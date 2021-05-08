<?php
class Buku extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('Modeldata');

        if ($this->session->userdata('data') != "masuk") {
            redirect(base_url());
            }
    }


    //Simpan buku
    public function Simpan_buku()
    {
        $this->Modeldata->simpan_data_buku();
        redirect(base_url('index.php/Perpustakaan_ci/Pustaka'));
    }

    //Simpan user
    public function Simpan_user()
    {
        $this->Modeldata->simpan_data_user();
        redirect(base_url('index.php/Perpustakaan_ci/User'));
    }







    //Hapus buku
public function Ambilidbuku($id)
{
    $data = $this->Modeldata->ambil_id_buku_hapus($id)->row();
    echo json_encode($data);
}

public function hapus_buku()
{
    $this->Modeldata->hapus_buku();
    redirect ('Perpustakaan_ci/Pustaka');
}



    //Hapus user
public function Ambiliduser($id)
{
    $data = $this->Modeldata->ambil_id_user_hapus($id)->row();
    echo json_encode($data);
}

public function hapus_user()
{
    $this->Modeldata->hapus_user();
    redirect ('Perpustakaan_ci/User');
}


}