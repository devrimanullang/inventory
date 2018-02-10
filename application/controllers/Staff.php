<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
		if(!$this->session->userdata('logged_in'))
		redirect('Login', 'refresh');
		elseif ($this->session->userdata('logged_in')['prev'] != 'staff')
		{
			if($this->session->userdata('logged_in')['prev'] == 'admin')
			redirect('Admin', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['nama'] = $session_data['nama'];
		$this->load->view('barhead');
		$this->load->view('staff/barmenu',$data);
	}	
	
	public function index()
	{
		if($this->session->userdata('logged_in')['bagian'] == 'Pengembangan')
		{
			$data['q']=$this->barang_model->dataChart1();
		}
		else if($this->session->userdata('logged_in')['bagian'] == 'Pemeliharaan'){
			$data['q']=$this->barang_model->dataChart2();	
		}
		$data['bagian']=$this->session->userdata('logged_in')['bagian'];
		$this->load->view('staff/home',$data);
	}
	
	function jenis()
	{
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->getJenis();
		$this->load->view('barang/listjenis',$data);
	}
	
	function barang()
	{
		if($this->session->userdata('logged_in')['bagian'] == 'Pengembangan')
		{
			$seksi=1;
		}
		else if($this->session->userdata('logged_in')['bagian'] == 'Pemeliharaan'){
			$seksi=2;
		}
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->getBarang($seksi);
		$this->load->view('barang/listbarang',$data);
	}
	
	function addJenis(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$this->load->view('barang/addJenis',$data);
	}
	
	function regJenis(){
		$this->barang_model->regJenis($_POST);
		echo '<script>alert("Menambah Jenis Barang Berhasil!")</script>;';
		redirect('Staff/jenis','refresh');
	}	
	
	function addBarang(){
		$session_data = $this->session->userdata('logged_in');
		$data['prev'] = $session_data['prev'];
		$data['bagian'] = $session_data['bagian'];
		$data['q']=$this->barang_model->jsonjenis();
		$this->load->view('barang/addBarang',$data);
	}
	
	function regBarang(){
		$this->barang_model->regBarang($_POST);
		echo '<script>alert("Menambah Jenis Barang Berhasil!")</script>;';
		redirect('Staff/jenis','refresh');
	}

	function addMasuk(){
		$data['prev'] = $this->session->userdata('logged_in')['prev'];
		$data['q']=$this->barang_model->jsonbarang();
		$this->load->view('barang/addMasuk',$data);
	}
	
	function transaksi(){
		if($this->session->userdata('logged_in')['bagian'] == 'Pengembangan')
		{
			$seksi=1;
		}
		else if($this->session->userdata('logged_in')['bagian'] == 'Pemeliharaan'){
			$seksi=2;
		}		
		$data['q']=$this->barang_model->getLog($seksi);
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
			redirect('Staff/barang','refresh');
		}
		else
		{
			echo '<script>alert("Gagal")</script>;';
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
			redirect('Admin/barang','refresh');
		}
		else
		{
			echo '<script>alert("Gagal")</script>;';
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
		$this->load->view('barang/cetak2');
	}
	
	function cetakdata(){
		$data['q']=$this->barang_model->cetakData($_POST);
		$this->load->view('barang/cetakData',$data);
	}
	
	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('Staff/', 'refresh');
	}	
}
