<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('modelku');
    }
    public function index()
	{
        if($this->session->userdata('status')=="login"){
            $dataMhs = $this->modelku->getData('cpt');
            $data2 = array(
                'data' =>  $dataMhs
            );
            $this->load->view('Home',$data2);
        }else{
            redirect(base_url());
        }
	}
    public function baca_form(){
		$this->load->view('formcrypto');
	}
    public function tambah_data(){
        $datainput = array(
            'mata_uang'=> $this->input->post('mata_uang'),
            'nama'=> $this->input->post('nama'),
            'negara'=> $this->input->post('negara'),
            'tahun'=> $this->input->post('tahun')
        );
        $this->modelku->masukkan('cpt',$datainput);
        redirect(base_url(). 'refresh');
    }
	public function hapus_data($petunjuk)
    {
        $datapetunjuk = array(
            'no' => $petunjuk
        );
        $this->modelku->hapus('cpt', $datapetunjuk);
        redirect(base_url(). 'refresh');
    }
    public function ambil_datawhere($petunjuk){
        $datapetunjuk = array(
            'no' => $petunjuk
        );
        $dataMhs = $this->modelku->getData_khusus('cpt', $datapetunjuk);
        $data2 = array(
            'data' =>  $dataMhs
        );

        $this->load->view('fomeditcrypto',$data2);
    }
    public function update_data(){
        $datainput = array(
            'mata_uang'=> $this->input->post('mata_uang'),
            'nama'=> $this->input->post('nama'),
            'negara'=> $this->input->post('negara'),
            'tahun'=> $this->input->post('tahun')
        );
        $datapetunjuk = array(
            'no' => $this->input->post('no')
        );
        $dataMhs = $this->modelku->perbarui('cpt', $datainput, $datapetunjuk);
        redirect(base_url(). 'refresh');
    }

	public function fungsi(){
		//echo"halo duniiaaa";
		$this->load->view('modelku');
	}
	public function param($nama){
		// echo"Selamat Datang kepada ".$nama;
		/*$data2 = array(
			'nama' =>  $nama
		);
		$this->load->view('Home',$data2);*/
	}
}
