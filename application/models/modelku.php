<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model{
    /*public function getData($tabel){
        $datanih = $this->db->query("SELECT * FROM ".$tabel);
        return $datanih->result_array();
    }*/

    public function getData($tabel){
        $datanih = $this->db->get($tabel);
        return $datanih->result_array();
    }
    public function masukkan($tabel, $data){
        $datanih = $this->db->insert($tabel, $data);
        return $datanih;
    }
    public function hapus($tabel, $where){
        $datanih = $this->db->delete($tabel, $where);
        return $datanih;
    }
    public function perbarui($tabel, $data, $where){
        $datanih = $this->db->update($tabel, $data, $where);
        return $datanih;
    }
    public function getData_khusus($tabel, $where){
        $this->db->order_by('no','DESC');
        $datanih = $this->db->get_where($tabel, $where);
        return $datanih->result_array();
    }
}
?>