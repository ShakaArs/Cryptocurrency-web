<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('modelku');
    }
    public function index()
	{
            $dataMhs = $this->modelku->getData('cpt');
            $datapenumpang = $this->modelku->getData('marketplace');
            $data = array(
                "dataMhs"=>  $dataMhs,
                "datapenumpang" => $datapenumpang
            );
            echo json_encode($data);
	}
}
?>