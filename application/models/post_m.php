<?php

	class Post_m extends CI_Model {
		
		function __construct(){
			$this->load->database();
		}
		
		function save_post($user_id, $body){
			$query = "INSERT INTO posts "
			       . "(user_id, body) "
			       . "VALUES(" . $user_id . ", '" . $body . "')";
			$this->db->query($query);
			if ($this->db->affected_rows() > 0){
				return true;
			}
			return false;
		}
		
		function get_posts($user_id, $count) {
			$this->db->from("posts");
			$this->db->where("user_id", $user_id);
			$this->db->order_by("datetime", "asc");
			$this->db->limit($count);
			return $this->db->get()->result();
		}
		
	}