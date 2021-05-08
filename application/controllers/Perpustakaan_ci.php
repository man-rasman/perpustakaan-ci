<?php
class Perpustakaan_ci extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Modeldata');
        if ($this->session->userdata('data') != "masuk") {
        redirect(base_url());
        }
		
	}




	public function Beranda()
    {
			$data['data_beranda']	=	$this->Modeldata->get_data_beranda();
            $this->load->view('beranda',$data);
    }




	





	public function Pustaka()
	{

			$data['data_buku']	=	$this->Modeldata->get_data_buku();
			$this->load->view('beranda',$data);
	}


    public function User()
	{

			$data['data_user']	=	$this->Modeldata->get_data_user();
			$this->load->view('beranda',$data);
	}


    //Edit buku
    public function Editbuku($idbuku = null)
    {
        if ($this->session->userdata('data') != "masuk") {
            redirect(base_url());
            }
        $data['ambil_id_buku'] = $this->Modeldata->ambil_id_buku_edit($idbuku);
        $this->load->view('beranda', $data);
    }

    public function Edit_buku()
    {
        if ($this->session->userdata('data') != "masuk") {
            redirect(base_url());
            }
        $idbuku     =   $this->input->post('id_buku',      TRUE);
        $namabuku   =   $this->input->post('nama_buku',    TRUE);
        $jenisbuku  =   $this->input->post('jenis_buku',   TRUE);
        $penulis    =   $this->input->post('penulis_buku', TRUE);
        $penerbit   =   $this->input->post('penerbit_buku',TRUE);
        $isibuku    =   $this->input->post('isi_buku',     TRUE);
        $keterangan =   $this->input->post('keterangan',   TRUE);
        $this->Modeldata->edit_data_buku($idbuku, $namabuku, $jenisbuku, $penulis, $penerbit, $isibuku, $keterangan);
        redirect(base_url('index.php/Perpustakaan_ci/Pustaka'));


    }


    //Edit user
    public function Edituser($iduser = null)
    {
        if ($this->session->userdata('data') != "masuk") {
            redirect(base_url());
            }
        $data['ambil_id_user'] = $this->Modeldata->ambil_id_user_edit($iduser);
        $this->load->view('beranda', $data);
    }

    public function Edit_user()
    {
        if ($this->session->userdata('data') != "masuk") {
            redirect(base_url());
            }
        $iduser     =   $this->input->post('id_user',      TRUE);
        $namauser   =   $this->input->post('nama_user',    TRUE);
        $alamatuser  =   $this->input->post('alamat_user',   TRUE);
        $nohp    =   $this->input->post('no_hp_user', TRUE);
        $username   =   $this->input->post('username',TRUE);
        $password    =   $this->input->post('password',     TRUE);
        $this->Modeldata->edit_data_user($iduser, $namauser, $alamatuser, $nohp, $username, $password);
        redirect(base_url('index.php/Perpustakaan_ci/User'));


    }



    //Isi buku
    public function Isibuku($idbuku = null)
    {
        $data['ambil_id_isi_buku'] = $this->Modeldata->ambil_id_isi_buku($idbuku);
        $this->load->view('beranda', $data);
    }



    

}