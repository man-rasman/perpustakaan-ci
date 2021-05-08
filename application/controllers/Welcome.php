<?php
class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Modeldata');
		
	}

	public function index()
	{
		$this->load->view('form_login');
	}
	public function Daftar()
    {
        $this->Modeldata->user_daftar();
        redirect('form_daftar');
    }
	public function Beranda()
    {
        if ($this->session->userdata('status')=="login") {

			$data['data_beranda']	=	$this->Modeldata->get_data_beranda();
            $this->load->view('beranda',$data);

        }else{
			redirect(base_url());
		}
    }
	public function Kategori()
	{
		if ($this->session->userdata('status')=="login") {
			
			$data['data_kategori']	=	$this->Modeldata->get_data_kategori();
			$this->load->view('beranda',$data);

		}else{
				redirect(base_url());
			}
	}
	public function Pustaka()
	{
		if ($this->session->userdata('status')=="login") {

			$data['data_buku']	=	$this->Modeldata->get_data_buku();
			$this->load->view('beranda',$data);

		}else{
				redirect(base_url());
			}
	}

	public function Cari()
	{
		if ($this->session->userdata('status')=="login") {

			$data = $this->Modeldata->ambil_katakunci();
			$this->load->view('beranda',$data);

		}else{
			redirect(base_url());
		}
	}

	
}