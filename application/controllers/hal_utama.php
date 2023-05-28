<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('modelku');
    }
	public function index()
	{
        $this->load->view('login');
	}
    public function aksi_login(){
        $user= $this->input->post('username');
        $pass= $this->input->post('password');
        $datapetunjuk = array(
            'user' => $user,
            'pass' => $pass
        );
        $cek= count($this->modelku->getData_khusus('duser', $datapetunjuk));

        if($cek > 0){
            $data_session = array(
                'nama' =>  $user,
                'status' => "login"
            );
            $this->session->set_userdata($data_session); 
            redirect(base_url()."index.php/hal_admin");
        }else{
            redirect(base_url());
        }
    }
    public function daftar(){
        $this->load->view('daftar');
    }
    public function aksi_daftar(){
        $datainput = array(
            'user'=> $this->input->post('username'),
            'pass'=> $this->input->post('password')
        );
        $this->modelku->masukkan('dUser',$datainput);
        redirect(base_url(). 'refresh');
    }
    public function konekto_daftar(){
		$this->load->view('daftar');
	}
    public function konekto_login(){
		$this->load->view('login');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}
