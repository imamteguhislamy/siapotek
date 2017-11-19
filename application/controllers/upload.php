<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->library('upload');
                $this->load->model('model');
        }

        public function index()
        {
                if (! $this->session->has_userdata('username')) { redirect('welcome');}
                $this->load->view('upload_form', array('error' => ' ' ));
                $this->load->view('header');
                $this->load->view('sidebar');
        }

        public function do_upload()
        {
                $this->form_validation->set_rules('error','empty','required');       
                if($this->form_validation->run() != false){
                        $is_submit = $this->input->POST('is_submit');
                        if(isset($is_submit) && $is_submit == 1) {
                                $fileUpload = array();
                                $isUpload = FALSE;
                                $config = array (
                                        'upload_path' => './uploads/',
                                        'allowed_types' => 'gif|jpg|png',
                                        'max_size' => 100000
                                );
                                $this->upload->initialize($config);
                                if($this->upload->do_upload('file_faktur')) {
                                        $fileUpload = $this->upload->data();
                                        $isUpload = TRUE;
                                } if($isUpload) {
                                        $data = array (
                                                'id_faktur' => $this->input->POST('id_faktur'),
                                                'nama_pabrik' => $this->input->POST('nama_pabrik'),
                                                'keterangan' => $this->input->POST('keterangan'),
                                                'file_faktur' => $fileUpload['file_name']
                                        );
                                        $this->model->Upload($data);
                                        redirect('crud_faktur/index');
                                }
                        } else {
                                $this->error();
                        }
                } else {
                    $this->error();
                }
        }

        public function new_user()
        {
            $this->form_validation->set_rules('nama_user','Nama Pelanggan','required');  
            $this->form_validation->set_rules('nama_instansi','Nama Instansi','required');     
                if($this->form_validation->run() != false){
                        $is_submit = $this->input->POST('is_submit');
                        if(isset($is_submit) && $is_submit == 1) {
                                $fileUpload = array();
                                $isUpload = FALSE;
                                $config = array (
                                        'upload_path' => './uploads/',
                                        'allowed_types' => 'gif|jpg|png',
                                        'max_size' => 100000
                                );
                                $this->upload->initialize($config);

                                
                                if($this->upload->do_upload('foto_user')) {
                                    if($this->upload->do_upload('foto_toko')){
                                        $fileUpload = $this->upload->data();
                                        $isUpload = TRUE;
                                } if($isUpload) {
                                        $data = array (
                                                'nama_user' => $this->input->POST('nama_user'),
                                                'alamat' => $this->input->POST('alamat'),
                                                'nama_instansi' => $this->input->POST('nama_instansi'),
                                                'foto_user' => $fileUpload['file_name'],
                                                'foto_toko' => $fileUpload['file_name']
                                        );
                                        $this->model->UploadUser($data);
                                        redirect('crud_user/index');
                                    }
                                }
                        } else {
                            $this->load->view('form_add_user');
                            $this->load->view('header');
                            $this->load->view('sidebar');
                        }
                } else {
                    $this->load->view('form_add_user');
                    $this->load->view('header');
                    $this->load->view('sidebar');
                }
        }

        public function error() {
                $this->load->view('upload_form'); 
                $this->load->view('header');
                $this->load->view('sidebar');  
        }
}
?>