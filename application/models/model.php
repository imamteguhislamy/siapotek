<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function Pencarian()
    {
        $cari = $this->input->post('cari', TRUE);
        $data = $this->db->query("SELECT * from obat where nama_obat like '%$cari%' ");
        return $data->result();
    }

    public function GetObat($where="") {
        $data = $this->db->query('select * from obat '.$where);
        return $data->result_array();
    }
    
    public function InsertDataObat($tabelName, $data) {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }
    
    public function UpdateDataObat($tableName, $data, $where) {
        $res = $this->db->update($tableName, $data, $where);
        return $res;
        
    }
    
    public function DeleteDataObat($tableName, $where) {
         $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function GetUser($where="") {
        $data = $this->db->query('select * from user '.$where);
        return $data->result_array();
    }

    public function InsertDataUser($tabelName, $data) {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }

    public function UpdateDataUser($tableName, $data, $where) {
        $res = $this->db->update($tableName, $data, $where);
        return $res;

    }

    public function DeleteDataUser($tableName, $where) {
        $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function GetFaktur($where="") {
        $data = $this->db->query('select * from faktur '.$where);
        return $data->result_array();
    }
    
    public function InsertDataFaktur($tabelName, $data) {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }
    
    public function DeleteDataFaktur($tableName, $where) {
         $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function Upload($data) {
        return $this->db->insert('faktur', $data);
    }

    public function UploadUser($data) {
        return $this->db->insert('user', $data);
    }

    public function login_authen($username, $password) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
        
    }
}
