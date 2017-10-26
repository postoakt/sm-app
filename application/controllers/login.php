<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->helper("url");	
		$this->load->library("session");
	}
	
	public function index()
	{
		$data = array("login_fail" => false);
		$this->load->view("login_page", $data);
		if($this->session->userdata("id") !== FALSE){
			redirect(base_url() . "home");
		} 
	}
	
	public function login_user()
	{
		if($this->session->userdata("id") !== FALSE){
			redirect(base_url() . "home");
		} 
		$this->load->model("user_m");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		if ($this->user_m->validate_user($email, $password)){
			$this->user_m->set_session();
			redirect(base_url("home"));
		}
		else{
			$data = array("login_fail" => true);
			$this->load->view("login_page", $data);
		}
	}
	
	public function logout_user()
	{
		$this->load->model("user_m");
		$this->user_m->unset_session();
		$data = array("login_fail" => false);
		$this->load->view("login_page", $data);
		redirect(base_url());
	}
}
