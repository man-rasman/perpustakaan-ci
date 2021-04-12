<?php
class Modeldata extends CI_Model{
    public function ambil_data_user()
    {
        $this->db->where('id_user');
        return $this->db->get('tabel_user')->result();
    }

    public function daftar()
    {
        $isidatauser = array(
        'nama_user' => $this->input->post('nama',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'alamat_user' => $this->input->post('alamat',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'level' => 'pengguna'
        );
        return $this->db->insert('tabel_user',$isidatauser);
    }
}