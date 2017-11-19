<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');
    }

    public function beranda($username) {
        $this->load->view('header');
    }

    public function login_check() {
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $isLogin = $this->model->login_authen($username, $password);
        if ($isLogin->num_rows() == 1) {
            foreach ($isLogin->result() as $user) {
                $sess_user['username'] = $user->username;
                $this->session->set_userdata($sess_user);
            }
            $this->beranda($username);
            $this->load->view('table_obat');
        }
        else{
            $data['err_message'] = "Username / Password salah";
            $this->load->view('form_login', $data);
        }
    }
}

?>