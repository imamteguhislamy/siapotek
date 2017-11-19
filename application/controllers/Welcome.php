<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('session');
    }

	public function index() {
		$data['err_message'] = "";
		$this->load->view('form_login', $data);	
	}

	public function home()
	{
		$this->load->view('table_obat');
	}

	public function pembelian()
	{
		$this->load->view('pembelian');
	}
}
