<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
//
    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
			$u=$session_data['prev'];
            redirect("$u", 'refresh');
        } else {
            //If no session, redirect to login page
            $this->load->helper(array('form'));
            $this->load->view('viewLogin');
        }
    }

}
?>

