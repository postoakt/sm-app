<?php

	class User_m extends CI_Model {
		
		var $user_data;
		
		function __construct(){
			$this->load->database();
			$this->load->library("session");
		}
		
		function validate_user($email, $password) {
			$this->db->from("users");
        	$this->db->where("email", $email);
        	$this->db->where( "pw_hash", sha1($password));
	        $login = $this->db->get()->result();

			if (is_array($login) && count($login) == 1) {
				$this->user_data = $login[0];
				return true;
			}
			return false;
		}
		
		function load_user_data($user_id){
			$this->db->from("users");
			$this->db->where("id", $user_id);
			$login = $this->db->get()->result();
			
			if (is_array($login) && count($login == 1)){
				$this->user_data = $login[0];
				return true;
			}
			return false;
		}
		
		function get_user_data(){
			return $this->user_data;
		}
		
		function new_user($userdata) {
	      $data["first_name"] = $userdata["first_name"];
		  $data["last_name"] = $userdata["last_name"];
		  $data["email"] = $userdata["email"];
		  $data["url_slug"] = $userdata["url_slug"];
		  $data["pw_hash"] = sha1($userdata["password"]);
		  return $this->db->insert('users', $data);
		}
		
		function check_if_email_in_use($email){
			$this->db->from("users");
			$this->db->where("email", $email);
			$login = $this->db->get()->result();
			
			if (is_array($login) && !empty($login)){
				$this->user_data = $login[0];
				return true;
			}
			return false;
		}
		
		function set_session() {
			$this->session->set_userdata( array(
					"id"=>$this->user_data->id,
					"first_name"=> $this->user_data->first_name,
					"last_name"=> $this->user_data->last_name,
					"email"=>$this->user_data->email,
					"url_slug"=>$this->user_data->url_slug,
					'isLoggedIn'=>true
				)
			);
		}
		
		function unset_session(){
			session_destroy();
		}
		
		function update_info($userdata) {
			$this->db->where("id", $userdata["id"]);
			$this->db-update("users", $userdata);
			return true;
		}
		
		function get_prof_pic($id) {
			$this->db->select("*");
			$this->db->from("users");
        	$this->db->where("id", $id);
	        $data = $this->db->get()->result();
			return $data[0]->prof_pic;
		}
		
		function get_friend_request_count($userid) {
			$query = "SELECT * FROM relationships "
				    . "WHERE status == 0 && "
				    . "(" . $userid . " == user_one_id && action_user_id == 2) "
				    . "|| " . $userid . " == user_one_id && action_user_id == 1)";
			$this->db->query($query);
			$data = $this->db->get()->result();
			return count($data);
		}
		
		function has_uploaded_photo($userid) {
			$query = "SELECT * FROM users "
			       . "WHERE id =" . $userid . " "
			       . "AND prof_pic='default.jpg'";
			$this->db->query($query);
			$result = $this->db->get()->result();
			return count($data) > 0;
		}
		
	}