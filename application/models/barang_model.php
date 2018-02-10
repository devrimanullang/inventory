<?php
date_default_timezone_set("Asia/Bangkok");
Class barang_model extends CI_Model
{
	function dataChart1(){
		$query = "select ( select count (*) from tbl_barang where seksi=1) as barang, (select count(*) from (select count(a.pekerjaan) from tbl_barang a, tbl_pekerjaan b where a.pekerjaan = b.kode_pekerjaan and a.seksi ='1' group by a.pekerjaan) as pekerjaan) as pekerjaan";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	
	function dataChart2(){
		$query = "select ( select count (*) from tbl_barang where seksi=2) as barang, (select count(*) from (select count(a.pekerjaan) from tbl_barang a, tbl_pekerjaan b where a.pekerjaan = b.kode_pekerjaan and a.seksi ='2' group by a.pekerjaan) as pekerjaan) as pekerjaan";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	
	function getBarang($seksi=NULL){
		if ($seksi==NULL) $query = "select a.*, b.kode_barang, c.nama_jenis, d.nama_pekerjaan, sum(b.jumlah) as jumlah from tbl_barang a, tbl_transaksi b, tbl_jenis c, tbl_pekerjaan d where a.kode_barang = b.kode_barang and a.jenis_barang = c.kode_jenis and a.pekerjaan = d.kode_pekerjaan group by a.kode_barang, b.kode_barang, c.nama_jenis, d.kode_pekerjaan order by b.kode_barang asc";
		else $query = "select a.*, b.kode_barang, sum(b.jumlah) as jumlah from tbl_barang a, tbl_transaksi b where a.kode_barang = b.kode_barang and a.seksi = '$seksi' group by a.kode_barang, b.kode_barang order by b.kode_barang asc";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	
	function getLog($seksi=NULL){
		if ($seksi==NULL) $query = "select *, c.nama_jenis, c.satuan from tbl_transaksi a, tbl_barang b, tbl_jenis c where a.kode_barang = b.kode_barang and b.jenis_barang = c.kode_jenis";
		else $query = "select * from tbl_transaksi where kode_barang like '$seksi%'";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}

	function getPekerjaan(){
		$query = "select * from tbl_pekerjaan";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	
	function jsonbarang(){
		$query = "select a.*, b.nama_jenis from tbl_barang a, tbl_jenis b where a.jenis_barang = kode_jenis";
		$select = $this->db->query($query);
		$q = $select->result();
		
		$data=array();
		foreach($q as $row){
		 $data[]=array(
			'id' => $row->kode_barang,
			'text' => $row->kode_barang.' - '.$row->nama_jenis
			);
		}		
		return $q = json_encode($data);
	}
	
	function jsonjenis(){
		$query = "select * from tbl_jenis";
		$select = $this->db->query($query);
		$q = $select->result();
		
		$data=array();
		foreach($q as $row){
		 $data[]=array(
			'id' => $row->kode_jenis,
			'text' => $row->kode_jenis.' - '.$row->nama_jenis
			);
		}		
		return $q = json_encode($data);
	}

	function jsonpekerjaan(){
		$query = "select * from tbl_pekerjaan";
		$select = $this->db->query($query);
		$r = $select->result();
		
		$data=array();
		foreach($r as $row){
		 $data[]=array(
			'id' => $row->kode_pekerjaan,
			'text' => $row->kode_kegiatan.' - '.$row->nama_pekerjaan
			);
		}		
		return $r = json_encode($data);
	}
	
	function getJenis(){
		$query = "select * from tbl_jenis";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	
	function regJenis(){
		$nama_jenis=ucfirst((string)$_POST['nama_jenis']);
		$satuan=(string)$_POST['satuan'];
		$awal = substr($nama_jenis,0,1);
		$query2 = "select * from tbl_jenis where kode_jenis like '$awal%' order by kode_jenis DESC LIMIT 1";
		
		$select=$this->db->query($query2);
		$q=$select->result();
		
		if($select -> num_rows() == 0){
			$sum = 1;
			$kode = "$awal$sum";
		}
		else{
			$sum=substr($q[0]->kode_jenis,1)+1;
			$kode = "$awal$sum";
			}
		$query="insert into tbl_jenis (kode_jenis, nama_jenis, satuan) values ('$kode','$nama_jenis','$satuan')";
		
		$this->db->query($query);
	}
	
	function regBarang($file=NULL){
		$pekerjaan = (string)$_POST['pekerjaan'];
		$jenis_barang = (string)$_POST['jenis_barang'];
		$jumlah_barang = (string)$_POST['jumlah_barang'];
		$tanggal = (string)$_POST['tanggal'];
		$letak = (string)$_POST['letak'];
		$seksi = (string)$_POST['seksi'];
		$penerima = (string)$_POST['penerima'];
		$file= $file['file'];
		
		$date = date_create('now');	
		$time=date_format($date, 'Y-m-d H:i:s');
		$session_data = $this->session->userdata('logged_in');
		$user = $session_data['username'];
		$id=date_format($date, 'YmdHis');
		$kode = "$seksi/$jenis_barang/$id";
		
		if ($file==NULL){
		$query="insert into tbl_barang (kode_barang, jenis_barang, letak, seksi, aktif, created_at, created_by, pekerjaan)
						values ('$kode','$jenis_barang','$letak','$seksi','t','$time','$user', '$pekerjaan')";
		$this->db->query($query);
		$query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, penerima)
						values ('$kode','$letak','$jumlah_barang','$time','$user', '$tanggal', '$penerima' )";
		$this->db->query($query2);
		}
		else {
		$query="insert into tbl_barang (kode_barang, jenis_barang, letak, seksi, aktif, created_at, created_by, pekerjaan)
						values ('$kode','$jenis_barang','$letak','$seksi','t','$time','$user', '$pekerjaan')";
		$this->db->query($query);
		$query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, foto, penerima)
						values ('$kode','$letak','$jumlah_barang','$time','$user', '$tanggal', '$file', '$penerima' )";
		$this->db->query($query2);
		}
	}
	
	function regPekerjaan(){
		$nama_pekerjaan = (string)$_POST['nama_pekerjaan'];
		$nomor_rekening = (string)$_POST['nomor_rekening'];
		$kode_kegiatan = (string)$_POST['kode_kegiatan'];
		$tahun_anggaran = (string)$_POST['tahun_anggaran'];
		$query = "insert into tbl_pekerjaan(nama_pekerjaan, kode_kegiatan, tahun_anggaran, nomor_rekening)
							values ('$nama_pekerjaan', '$kode_kegiatan', '$tahun_anggaran', '$nomor_rekening')";
		$this->db->query($query);
	}
	
	function stockin($file=NULL){
		$kode_barang = (string)$_POST['kode_barang'];
		$keterangan = (string)$_POST['keterangan'];
		$jumlah = (string)$_POST['jumlah'];
		$tanggal = (string)$_POST['tanggal'];
		$penerima = (string)$_POST['penerima'];
		$file= $file['file'];
		
		$date = date_create('now');
		$time=date_format($date, 'Y-m-d H:i:s');
		$session_data = $this->session->userdata('logged_in');
		$user = $session_data['username'];
		if($file==NULL){
			echo $query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, penerima)
						values ('$kode_barang','$keterangan','$jumlah','$time','$user','$tanggal', '$penerima')";
			$this->db->query($query2);
		}
		else{
			echo $query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, foto, penerima)
						values ('$kode_barang','$keterangan','$jumlah','$time','$user','$tanggal','$file', '$penerima')";
			$this->db->query($query2);
		}
	}
	
	function stockout($file=NULL){
		$kode_barang = (string)$_POST['kode_barang'];
		$keterangan = (string)$_POST['keterangan'];
		$jumlah = (string)$_POST['jumlah'];
		$tanggal = (string)$_POST['tanggal'];
		$penerima = (string)$_POST['penerima'];
		$file= $file['file'];

		$date = date_create('now');
		$time=date_format($date, 'Y-m-d H:i:s');
		$session_data = $this->session->userdata('logged_in');
		$user = $session_data['username'];
		if($file==NULL){
			$query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, penerima)
						values ('$kode_barang','$keterangan','-$jumlah','$time','$user','$tanggal', '$penerima')";
			$this->db->query($query2);
		}
		else{
			$query2="insert into tbl_transaksi (kode_barang, keterangan, jumlah, created_at, created_by, tanggal, foto, penerima)
						values ('$kode_barang','$keterangan','-$jumlah','$time','$user','$tanggal','$file', '$penerima')";
			$this->db->query($query2);
		}
	}
	
	function cetakData(){
		$kode = (string)$_POST['kode_barang'];
		//$query = "select * from transaksi where kode_barang = '$kode' order by created_at asc";
		$query = "select a.kode_barang, c.nama_jenis, c.satuan, a.keterangan, a.jumlah, a.created_at, a.created_by, d.nama_pekerjaan, d.kode_kegiatan from tbl_transaksi a, tbl_barang b, tbl_jenis c, tbl_pekerjaan d where a.kode_barang = b.kode_barang and b.jenis_barang = c.kode_jenis and a.kode_barang = '$kode' and b.pekerjaan = d.kode_pekerjaan order by created_at asc";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
	function cetakPekerjaan(){
		$pekerjaan = (string)$_POST['pekerjaan'];
		$query = "select a.*, b.kode_barang, c.nama_jenis, d.nama_pekerjaan, d.kode_kegiatan, sum(b.jumlah) as jumlah from tbl_barang a, tbl_transaksi b, tbl_jenis c, tbl_pekerjaan d where a.kode_barang = b.kode_barang and a.jenis_barang = c.kode_jenis and a.pekerjaan = d.kode_pekerjaan and a.pekerjaan = '$pekerjaan' group by a.kode_barang, b.kode_barang, c.nama_jenis, d.kode_pekerjaan order by b.kode_barang asc";
		$select=$this->db->query($query);
		$q=$select->result();
		return $q;
	}
}
?>