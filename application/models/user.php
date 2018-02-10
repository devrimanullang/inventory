<?php
Class User extends CI_Model
{
	function loginAdmin($username, $password){
		$edishub = $this->load->database('edishub', TRUE);
		$query = "select username, nm_lengkap, password, bagian from tbl_user where username = '$username' and status=TRUE and (level = 'Admin' or level =  'SuperAdmin' or level = 'Koordinator')  limit 1";
		$select=$edishub->query($query);
		$q=$select->result();	
		
		if($select -> num_rows() != 1){
			return false;
		}
		else if (password_verify($password, $q[0]->password)==true){
			return $q;
			}
		else{
			return false;
			}
	}
	
	function loginStaff($username, $password){
		$edishub = $this->load->database('edishub', TRUE);
		$query = "select username, nm_lengkap, password, bagian from tbl_user where username = '$username' and status=TRUE and level = 'Staff'  limit 1";
		$select=$edishub->query($query);
		$q=$select->result();
		
		if($select -> num_rows() != 1){
			return false;
		}
		else if (password_verify($password, $q[0]->password)==true){
			return $q;
			}
		else{
			return false;
			}
	}
	
	function unik($username)
	{
		$edishub = $this->load->database('edishub', TRUE);
		$query = "select * from tbl_user where username = '$username'";
		$select=$edishub->query($query);
		$q=$select->result();
		
		if($select -> num_rows() == 0){
			return true;
		}
		else{
			return false;
			}
	}
	
	function register()
    {
		$edishub = $this->load->database('edishub', TRUE);
		$username=(string)$_POST['username'];
		$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
		$nama=(string)$_POST['nama'];
		$telp=(string)$_POST['telp'];
		$bagian=(string)$_POST['seksi'];
		$date = date_create('now');
		$id=date_format($date, 'YmdHis');
		$tanggal=date_format($date, 'Y-m-d');
		$status=0;
		$level = 'Staff';
		$id_bidang=2;
		$query="insert into tbl_user (id_user,username, password, nm_lengkap,no_telp,tgl_daftar,status,level,id_bidang,bagian)
		values ($id,'$username',('$password'),'$nama','$telp','$tanggal','$status','$level','$id_bidang','$bagian')";
		$edishub->query($query);
    }
	
	function login_time($username){
		$edishub = $this->load->database('edishub', TRUE);
		$date = date_create('now');
		$time=date_format($date, 'Y-m-d H:i:s');
		$query = "update tbl_user set tgl_login_terakhir = '$time' where username = '$username'";
		$edishub->query($query);
	}
}
?>