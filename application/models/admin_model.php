<?php
date_default_timezone_set("Asia/Bangkok");
Class admin_model extends CI_Model
{
	function getUser(){
		$edishub = $this->load->database('edishub', TRUE);
		$query="select * from tbl_user";
		$select=$edishub->query($query);
		$q=$select->result();
		return $q;
	}
	
	function pendingUser(){
		$edishub = $this->load->database('edishub', TRUE);
		$query="select * from tbl_user where status = 'FALSE'";
		$select=$edishub->query($query);
		$q=$select->result();
		return $q;
	}
	
	function aktifuser($username){
		$edishub = $this->load->database('edishub', TRUE);
		$session_data = $this->session->userdata('logged_in');
		$approved = $session_data['username'];
		$query="update tbl_user set status = 't', approved_by = '$approved' where username = '$username'";
		$edishub->query($query);
	}
	
	function nonaktifuser($username){
		$edishub = $this->load->database('edishub', TRUE);
		$query="update tbl_user set status = 'f' where username = '$username'";
		$edishub->query($query);
	}
}
?>