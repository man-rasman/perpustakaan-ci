<?php
class Modeldata extends CI_Model{

    public function get_data_beranda()
    {
        return $this->db->get('tabel_buku')->result();
    }



    public function get_data_user()
    {
        return $this->db->get('tabel_user')->result();
    }
    
    public function get_data_buku()
    {
        return $this->db->get('tabel_buku')->result();
    }

    
    public function ambil_id_isi_buku($id)
    {
        $this->db->where('id_buku',$id);
        return $this->db->get('tabel_buku')->result();
    }


    public function user_daftar()
    {

        $user_daftar    = array(
            'nama_user'     => $this->input->post('nama',            TRUE),
            'alamat_user'   => $this->input->post('alamat',          TRUE),
            'no_hp'         => $this->input->post('no_hp_daftar',    TRUE),
            'username'      => $this->input->post('username_daftar', TRUE),
            'password'      => $this->input->post('password',        TRUE),
            'level'         => 'pengguna'
        );
        return $this->db->insert('tabel_user',$user_daftar);
    }
    

    //Simpan buku
    public function simpan_data_buku()
    {
        $simpanbuku = array(
            'nama_buku'     => $this->input->post('nama_buku',  TRUE),
            'jenis_buku'    => $this->input->post('jenis_buku', TRUE),
            'penulis_buku'  => $this->input->post('penulis_buku',    TRUE),
            'penerbit_buku' => $this->input->post('penerbit_buku',   TRUE),
            'isi_buku'      => $this->input->post('isi_buku',    TRUE),
            'keterangan'    => $this->input->post('keterangan', TRUE)
        );
        return $this->db->insert('tabel_buku',$simpanbuku);
    }


    //Simpan user
    public function simpan_data_user()
    {
        $simpanuser = array(
            'nama_user'     => $this->input->post('nama_user',  TRUE),
            'alamat_user'   => $this->input->post('alamat_user', TRUE),
            'no_hp'         => $this->input->post('no_hp_user',    TRUE),
            'username'      => $this->input->post('username',   TRUE),
            'password'      => $this->input->post('password',    TRUE),
            'level'    => 'pengguna'
        );
        return $this->db->insert('tabel_user',$simpanuser);
    }


    //Edit buku
    public function ambil_id_buku_edit($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->get('tabel_buku')->result();
    }

    public function edit_data_buku($idbuku, $namabuku, $jenisbuku, $penulis, $penerbit, $isibuku, $keterangan)
    {
        $simpanbuku = array(
            'nama_buku'    => $namabuku,
            'jenis_buku'   => $jenisbuku,
            'penulis_buku' => $penulis,
            'penerbit_buku'=> $penerbit,
            'isi_buku'     => $isibuku,
            'keterangan'   => $keterangan
        );
        $this->db->set($simpanbuku);
        $this->db->where('id_buku', $idbuku);
        $this->db->update('tabel_buku');
    }



    //Edit user
    public function ambil_id_user_edit($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('tabel_user')->result();
    }

    public function edit_data_user($iduser, $namauser, $alamatuser, $nohp, $username, $password)
    {
        $simpanuser = array(
            'nama_user'    => $namauser,
            'alamat_user'  => $alamatuser,
            'no_hp'        => $nohp,
            'username'     => $username,
            'password'     => $password,
        );
        $this->db->set($simpanuser);
        $this->db->where('id_user', $iduser);
        $this->db->update('tabel_user');
    }


    //Hapus buku
    public function ambil_id_buku_hapus($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->get('tabel_buku');
    }

    public function hapus_buku()
    {
        $idbuku = $this->input->post('id_buku', TRUE);
        $this->db->where('id_buku',$idbuku);
        $this->db->delete('tabel_buku');
    }


    //Hapus user
    public function ambil_id_user_hapus($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('tabel_user');
    }

    public function hapus_user()
    {
        $iduser = $this->input->post('id_user', TRUE);
        $this->db->where('id_user',$iduser);
        $this->db->delete('tabel_user');
    }


}