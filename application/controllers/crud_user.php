<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_user extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');
    }

    public function index() {
        if (! $this->session->has_userdata('username')) { redirect('welcome');}
        $this->load->view('table_user');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function add_data() {
        $this->load->view('form_add_user');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function getJumlah($id_user) {
        $brg = $this->model->getUser("where id_user = '$id_user'");
        $nambah = $brg[0]['jumlah'];
        return $nambah;
    }

    public function do_insert() {
        $this->form_validation->set_rules('nama_user','Nama Pelanggan','required');  
        $this->form_validation->set_rules('nama_instansi','Nama Instansi','required');        
        if($this->form_validation->run() != false) {
            $init_jumlah = $this->getJumlah($_POST['id_user']);
            $id_user = $_POST['id_user'];
            $nama_user = $_POST['nama_user'];
            $alamat = $_POST['alamat'];
            $nama_instansi = $_POST['nama_instansi'];
            $data_insert = array(
                'id_user' => $id_user,
                'nama_user' => $nama_user,
                'alamat' => $alamat,
                'nama_instansi' => $nama_instansi
            );
            $res = $this->model->InsertDataUser('user', $data_insert);
            if($res>=1) {
                redirect("crud_user/index");
            } else {
                echo "<h2>Insert data gagal</h2>";
            }
        } else {
            $this->add_data();
        }
    }

    public function do_update() {
        $id_user = $_POST['id_user'];
        $nama_user = $_POST['nama_user'];
        $alamat = $_POST['alamat'];
        $nama_instansi = $_POST['nama_instansi'];
        $data_update = array(
            'nama_user' => $nama_user,
            'alamat' => $alamat,
            'nama_instansi' => $nama_instansi
        );
        $where = array('id_user'=>$id_user);
        $res = $this->model->UpdateDatauser('user', $data_update, $where);
        if($res>=1) {
            redirect("crud_user/index");
        }
    }

    public function edit_data($id_user) {
        $brng = $this->model->GetUser("where id_user = '$id_user'");
        $data = array(
            "id_user"=>$brng[0]['id_user'],
            "nama_user"=>$brng[0]['nama_user'],
            "alamat"=>$brng[0]['alamat'],
            "nama_instansi"=>$brng[0]['nama_instansi'],
        );
        $this->load->view('form_edit_user', $data);
        $this->load->view('header');
        $this->load->view('sidebar');
    }


    public function do_delete($id_user) {
        $where = array('id_user' => $id_user);
        $res = $this->model->DeleteDataUser('user',$where);
        if($res>=1) {
            redirect('crud_user/index');
        }

    }

}
