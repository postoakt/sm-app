<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->helper("url");		
	}
	
	public function index(){
		$this->load->library("session");
		$user_id = $this->session->userdata("id");
		$this->load->model("user_m");
		$this->user_m->load_user_data($user_id);
		$data = $this->user_m->get_user_data();
		$prof_pic = $this->user_m->get_prof_pic($user_id);
		$this->load->view("home", $data);	
	}
}