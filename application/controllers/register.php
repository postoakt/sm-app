<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->helper("url");
		$this->load->helper("utility");
		$this->load->library("session");
		if($this->session->userdata("id") !== FALSE){
			redirect(base_url() . "home");
		} 
	}
	
	public function index()
	{
		$this->load->view("register");
	}
	
	public function register_user(){
		$this->load->model("user_m");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$salt = generateRandomString();
		$first_name = $this->input->post("first_name");
		$last_name = $this->input->post("last_name");
		$url_slug = strtolower($first_name) . "." . strtolower($last_name);
		if ($this->user_m->check_if_email_in_use($email)){
			$data = array("success" => false, "message" => "That email address is already in use.");
			$this->load->view("register", $data);
		}
		else{
			$user_data = array("first_name" => $first_name, "last_name" => $last_name, 
			                   "email" => $email, "password" =>$password, "salt" => $salt, "url_slug" => $url_slug);
			if ($this->user_m->new_user($user_data)){
				$this->load->view("register_success", $user_data);
			}
			else{
				$data = array("success" => false, "message" => "There was an error processing your request");
			}
		}
	}
	
}
