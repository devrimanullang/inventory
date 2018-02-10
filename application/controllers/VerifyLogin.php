<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('passwordin', 'Password', 'trim|required|xss_clean|callback_check_database');
		$rr=$this->form_validation->run();
		
		if($rr == 0){
			//Field validation failed.&nbsp; User redirected to login page
			$this->load->view('viewLogin');
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.&nbsp; Validate against database
		$username = $this->input->post('username');

		//query the database
		$result1 = $this->user->loginAdmin($username, $password);
		$result2 = $this->user->loginStaff($username, $password);
		if($result1){
			foreach($result1 as $row)
			{
				$sess_array = array(
				'username' => $row->username,
				'nama' => $row->nm_lengkap,
				'prev' => 'Admin',
				'bagian'=>$row->bagian
				);
			$this->session->set_userdata('logged_in', $sess_array);
			$this->user->login_time($username);
			}
			redirect('Admin', 'refresh');;
		}
		elseif($result2){
			foreach($result2 as $row)
			{
				$sess_array = array(
				'username' => $row->username,
				'nama' => $row->nm_lengkap,
				'prev' => 'Staff',
				'bagian'=>$row->bagian
				);
			$this->session->set_userdata('logged_in', $sess_array);
			$this->user->login_time($username);
			}
			redirect('Staff', 'refresh');;
		}
		$this->form_validation->set_message('check_database', 'Invalid username or password/User has not been activated');
		return false;	
	}
	
	function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[15]|callback_unik');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('telp', 'Nomor Telp', 'required');
		$this->form_validation->set_rules('seksi', 'Seksi', 'required');
		
		if ($this->form_validation->run() == FALSE)
			{	
				$this->load->view('viewLogin');
				//redirect('Login#signup');
			}
			else
			{
				$this->user->register($_POST);
				echo '<script>alert("Register Berhasil!, Silahkan Login")</script>;';
				redirect('login', 'refresh');			
			}
		
	}
	
	function unik($username)
	{
		$result1 = $this->user->unik($username);
		if ($result1==TRUE){
		return TRUE;}
		else{
		$this->form_validation->set_message('unik', 'Username is not available');
		return FALSE;}
	}
}

?>
