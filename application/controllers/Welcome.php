<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function index2()
	{
		$this->load->view('daftar');
	}
	public function index3()
	{
		$this->load->view('beranda');
	}


	public function Login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$cek_login = $this->db->get('tabel_user')->row_array();

		if($cek_login > 0){
			redirect('Welcome/index3');
		}else{
			echo "
			<script>
				window.alert('Username atau password salah')
				window.location='../../';
			</script>";
		}
	}
	public function Logout()
	{
		redirect('../');
	}
	public function Daftar()
	{
		$this->load->model('Modeldata');
		$this->Modeldata->daftar();
		redirect('Welcome/index2');
	}
}
