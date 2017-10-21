<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->helper("url");		
	}
	
	public function index(){
		$this->load->library("session");
		$user_id = $this->session->userdata("id");
		$message_m = $this->load->model("messages");
	}
}