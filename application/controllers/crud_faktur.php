<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_faktur extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');

    }

    public function index() {
        $this->load->view('table_faktur');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function add_data() {
        $this->load->view('upload_form');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function view_data($id_faktur) {
        $brng = $this->model->GetFaktur("where id_faktur = '$id_faktur'");
        $data = array(
            "id_faktur"=>$brng[0]['id_faktur'],
            "nama_pabrik"=>$brng[0]['nama_pabrik'],
            "keterangan"=>$brng[0]['keterangan'],
            "file_faktur"=>$brng[0]['file_faktur']
        );
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('view_faktur', $data);
    }

    public function do_delete($id_faktur) {
        $where = array('id_faktur' => $id_faktur);
        $res = $this->model->DeleteDataFaktur('faktur',$where);
        if($res>=1) {
            redirect('crud_faktur/index');
        }

    }

}
