<?php
class Fungsi{
    protected $ci;
    function __construct() {
        function user_login() {
            $this->ci->load->model('user_m');;
            $user_id = $this->ci->session->userdata('userid');
            $user_data = $this->ci->user_m->get($user_id)->row_array();
            return $user_data;
        }
    }
}