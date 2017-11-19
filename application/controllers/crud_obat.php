<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_obat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');
    }

    public function index() {
        if (! $this->session->has_userdata('username')) { redirect('welcome');}
        $this->load->view('table_obat');
        $this->load->view('header');
        $this->load->view('sidebar');
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
            $this->index($username);
        }
        else{
            $data['err_message'] = "Username / Password salah";
            $this->load->view('form_login_error', $data);
        }
    }

    public function logout(){
        $this->load->view('form_login');
        $this->session->sess_destroy();
        

    }

    public function add_data() {
        $this->load->view('form_add_obat');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function do_insert() {
        $this->form_validation->set_rules('nama_obat','Nama Obat','required');
        $this->form_validation->set_rules('nama_pabrik','Nama Pabrik','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('harga','Harga','required');       
        if($this->form_validation->run() != false) {
            $kode_obat = $_POST['kode_obat'];
            $nama_obat = $_POST['nama_obat'];
            $nama_pabrik = $_POST['nama_pabrik'];
            $jumlah = $_POST['jumlah'];
            $satuan = $_POST['satuan'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $data_insert = array(
                'kode_obat' => $kode_obat,
                'nama_obat' => $nama_obat,
                'nama_pabrik' => $nama_pabrik,
                'jumlah' => $jumlah,
                'satuan' => $satuan,
                'harga' => $harga,
                'deskripsi' => $deskripsi
            );
            $res = $this->model->InsertDataObat('obat', $data_insert);
            if($res>=1) {
                redirect("crud_obat/index");
            } else {
                echo "<h2>Insert data gagal</h2>";
            }
        } else {
            $this->add_data();
        }
    }

    public function getJumlah($kode_obat)
        {
            $brg = $this->model->getObat("where kode_obat = '$kode_obat'");
            $nambah = $brg[0]['jumlah'];
            return $nambah;
        }

    public function do_update() {
        $init_jumlah = $this->getJumlah($_POST['kode_obat']);
        $kode_obat = $_POST['kode_obat'];
        $nama_obat = $_POST['nama_obat'];
        $nama_pabrik = $_POST['nama_pabrik'];
        $jumlah = $_POST['jumlah']+$init_jumlah;
        $satuan = $_POST['satuan'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $data_update = array(
            'nama_obat' => $nama_obat,
			'nama_pabrik' => $nama_pabrik,
            'jumlah' => $jumlah,
            'satuan' => $satuan,
			'harga' => $harga,
            'deskripsi' => $deskripsi
        );
        $where = array('kode_obat'=>$kode_obat);
        $res = $this->model->UpdateDataObat('obat', $data_update, $where);
        if($res>=1) {
            redirect("crud_obat/index");
        }
    }

    public function edit_data($kode_obat) {
        $brng = $this->model->GetObat("where kode_obat = '$kode_obat'");
        $data = array(
            "kode_obat"=>$brng[0]['kode_obat'],
            "nama_obat"=>$brng[0]['nama_obat'],
            "nama_pabrik"=>$brng[0]['nama_pabrik'],
            "jumlah"=>$brng[0]['jumlah'],
            "satuan"=>$brng[0]['satuan'],
            "harga"=>$brng[0]['harga'],
            "deskripsi"=>$brng[0]['deskripsi']
        );
        $this->load->view('form_edit_obat', $data);
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function view_data($kode_obat) {
        $brng = $this->model->GetObat("where kode_obat = '$kode_obat'");
        $data = array(
            "kode_obat"=>$brng[0]['kode_obat'],
            "nama_obat"=>$brng[0]['nama_obat'],
            "nama_pabrik"=>$brng[0]['nama_pabrik'],
            "jumlah"=>$brng[0]['jumlah'],
            "satuan"=>$brng[0]['satuan'],
            "harga"=>$brng[0]['harga'],
            "deskripsi"=>$brng[0]['deskripsi']
        );
        $this->load->view('detail', $data);
        $this->load->view('header');
        $this->load->view('sidebar');
    }



    public function do_delete($kode_obat) {
        $where = array('kode_obat' => $kode_obat);
        $res = $this->model->DeleteDataObat('obat',$where);
        if($res>=1) {
            redirect('crud_obat/index');
        }
    }

    public function cari() {
        $this->load->view('search');
        $this->load->view('header');
        $this->load->view('sidebar');   
    }
 
    public function hasil() {
        $data2['cari'] = $this->model->Pencarian();
        $this->load->view('result', $data2);
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function aksi(){
        $this->form_validation->set_rules('cari','search','required');       
        if($this->form_validation->run() != false){
            $this->hasil();
        } else {
            $this->cari();
        }
    }
}
