<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_pembelian extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');

    }

    public function index() {
        if (! $this->session->has_userdata('username')) { redirect('welcome');}
        $this->load->view('pembelian');
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function show_data($kode_obat) {
        $brng = $this->model->GetObat("where kode_obat = '$kode_obat'");
        $data = array(
            //"kode_obat"=>$brng[0]['kode_obat'],
            //"nama_obat"=>$brng[0]['nama_obat'],
            //"nama_pabrik"=>$brng[0]['nama_pabrik'],
            "jumlah"=>$brng[0]['jumlah'],
            "satuan"=>$brng[0]['satuan'],
            //"harga"=>$brng[0]['harga'],
        );
        $this->load->view('pembelian', $data);
        $this->load->view('header');
        $this->load->view('sidebar');
    }

    public function tambahkan($kode_obat) {
        $brng = $this->model->GetObat("where kode_obat = '$kode_obat'");
        $data = array(
            //"kode_obat"=>$brng[0]['kode_obat'],
            "nama_obat"=>$brng[0]['nama_obat'],
            "nama_pabrik"=>$brng[0]['nama_pabrik'],
            "jumlah"=>$brng[0]['jumlah'],
            "satuan"=>$brng[0]['satuan'],
            "harga"=>$brng[0]['harga'],
        );
        $this->load->view('pembelian', $data);
        $this->load->view('header');
        $this->load->view('sidebar');
    }


}
