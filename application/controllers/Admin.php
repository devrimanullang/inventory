<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model','',TRUE);
		$this->load->model('admin_model','',TRUE);
		if(!$this->session->userdata('logged_in'))
		redirect('Login', 'refresh');
		elseif ($this->session->userdata('logged_in')['prev'] != 'admin'){
		if($this->session->userdata('logged_in')['prev'] == 'staff')
			redirect('Staff', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['nama'] = $session_data['nama'];
		$this->load->view('barhead');
		$this->load->view('admin/barmenu',$data);
	}	
	
	public function index()
	{
		$data['q']=$this->barang_model->dataChart1();
		$data['r']=$this->barang_model->dataChart2();
		$this->load->view('admin/home',$data);
	}
	
	function jenis()
	{
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->getJenis();
		$this->load->view('barang/listjenis',$data);
	}
	
	function barang()
	{
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->getBarang();
		$this->load->view('barang/listbarang',$data);
	}
	
	function pekerjaan()
	{
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->getPekerjaan();
		$this->load->view('barang/listpekerjaan',$data);
	}
	
	function addJenis(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$this->load->view('barang/addJenis',$data);
	}
	
	function regJenis(){
		$this->barang_model->regJenis($_POST);
		echo '<script>alert("Menambah Jenis Barang Berhasil!")</script>;';
		redirect('Admin/jenis','refresh');
	}
	
	function addBarang(){
		$session_data = $this->session->userdata('logged_in');
		$data['prev'] = $session_data['prev'];
		$data['bagian'] = $session_data['bagian'];
		$data['q']=$this->barang_model->jsonjenis();
		$data['r']=$this->barang_model->jsonpekerjaan();
		$this->load->view('barang/addBarang',$data);
	}
	
	function regBarang(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
		if($this->upload->do_upload()){
			$data = $this->upload->data();
			$file['file']=$data['file_name'];
			
			$this->barang_model->regBarang($file);
			echo '<script>alert("Menambah Stock Barang Berhasil!")</script>;';
			redirect('Admin/barang','refresh');
		}
		else
		{
			$this->barang_model->regBarang();
			echo '<script>alert("Menambah Stock Barang Berhasil!")</script>;';
			redirect('Admin/barang','refresh');
		}
	}
	
	function addPekerjaan(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$this->load->view('barang/addPekerjaan',$data);
	}
	
	function regPekerjaan(){
		$this->barang_model->regPekerjaan($_POST);
		echo '<script>alert("Menambah Kegiatan Pekerjaan Berhasil!")</script>;';
		redirect('Admin/pekerjaan','refresh');
	}	
	
	function addMasuk(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->jsonbarang();
		$this->load->view('barang/addMasuk',$data);
	}
	
	function transaksi(){
		$data['q']=$this->barang_model->getLog();
		$this->load->view('barang/listlog',$data);
	}
	
	function stockin(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
		if($this->upload->do_upload())
		{
			$data = $this->upload->data();
			$file['file']=$data['file_name'];
			
			$this->barang_model->stockin($file);
			echo '<script>alert("Menambah Stock Barang Berhasil!")</script>;';
			//redirect('Admin/transaksi','refresh');
		}
		else
		{
			$this->barang_model->stockin();
			echo '<script>alert("Menambah Stock Barang Berhasil!")</script>;';
			//redirect('Admin/transaksi','refresh');
		}
	}
	
	function stockout(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
		if($this->upload->do_upload())
		{
			$data = $this->upload->data();
			$file['file']=$data['file_name'];
			
			$this->barang_model->stockout($file);
			echo '<script>alert("Stock Barang Berkurang!")</script>;';
			redirect('Admin/transaksi','refresh');
		}
		else
		{
			$this->barang_model->stockout();
			echo '<script>alert("Stock Barang Berkurang!")</script>;';
			redirect('Admin/transaksi','refresh');
		}
	}
	
	
	function addKeluar(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->jsonbarang();
		$this->load->view('barang/addKeluar',$data);
	}
	
	function cetak(){
		$this->load->view('barang/cetak');
	}
	
	function cetak2(){
		$data['r']=$this->barang_model->jsonpekerjaan();
		$this->load->view('barang/cetak2',$data);
	}
	
	function cetakdata(){
		$data['q']=$this->barang_model->cetakData($_POST);
		$this->load->view('barang/cetakData',$data);
	}
	
	function cetakpekerjaan(){
		$data['q']=$this->barang_model->cetakPekerjaan($_POST);
		$this->load->view('barang/cetakPekerjaan',$data);
	}
	
	function user()
	{
		$data['q']=$this->admin_model->getUser();
		$this->load->view('Admin/user',$data);
	}
	
	function pendingUser()
	{
		$data['q']=$this->admin_model->pendingUser();
		$this->load->view('Admin/userPending',$data);
	}
	
	function aktifkan($username)
	{
		$this->admin_model->aktifuser($username);
		echo '<script>alert("Aktifkan User Berhasil!")</script>;';
		redirect ('Admin/user','refresh');
	}
	
	function nonaktifkan($username)
	{
		$this->admin_model->nonaktifuser($username);
		echo '<script>alert("Non-aktifkan User Berhasil!")</script>;';
		redirect ('Admin/user');
	}
	
	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('Admin/', 'refresh');
	}	
	
	
}
