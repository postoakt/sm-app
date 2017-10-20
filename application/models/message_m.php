<?php

	class Message_m extends CI_Model {
		
		function __construct(){
			$this->load->database();
		}
		
		function get_messages($user_id) {
			$this->db->from("messages");
			$this->db->where("recipient_id", $user_id);
			$this->db->order_by("datetime", "asc");
			return $this->db->get()->result();
		}
		
		function new_message($user_id, $recipient_id, $body) {
			$query = "INSERT INTO messages (sender_id, recipient_id, body, b_read) "
			       . "VALUES(" . $user_id . ", " . $recipient_id . ", '" . $body . "', false)";
			$this->db->query($query);
			if ($this->db->affected_rows() > 0){
				return true;
			}
			return false;
		}
		
		function mark_message_read($message_id) {
			$query = "UPDATE messages SET b_read = true WHERE id == " . $message_id;
			$this->db->query($query);
			if ($this->db->affected_rows() > 0){
				return true;
			}
			return false;
		}
		
		function get_unread_message_count($user_id) {
			$query = "SELECT id FROM messages "
			       . "WHERE recipient_id == " . $user_id . " "
			       . "&& b_read = false";
			$this->db->query($query);
			$data = $this->db->get()->result();
			return count($data);
		}
		
	}