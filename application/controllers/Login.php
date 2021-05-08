<?php
    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('Modeldata');
            $this->load->library('form_validation');
        }




        public function index()
        {
            $this->load->view('form_login');
        }



        
        public function daftar()
        {
            $this->load->view('form_daftar');
        }

        public function aksi_daftar()
        {
            $this->Modeldata->user_daftar();
            redirect(base_url('form_daftar'));
        }


        
        public function login()
        {

                    $user   =   $this->input->post('username',true);
                    $pass   =   $this->input->post('password',true);
                    $this->db->where('username',$user);
                    $this->db->where('password',$pass);
                    $cek    =   $this->db->get('tabel_user')->row_array();
        
                    if($cek > 0) {
                        
                        $data_session = array(
                            'username'  => $user,
                            'data'     => "masuk"
                        );
                        $this->session->set_userdata($data_session);
                        redirect(base_url('index.php/perpustakaan_ci/beranda'));
                    }else{
                        echo "
                        <script>
                            window.alert('username/password salah')
                            window.location='../../';
                        </script>`
                        ";
                    }


        }






        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        
    }