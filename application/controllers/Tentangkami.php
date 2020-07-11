<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangkami extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
    }

	public function index()
	{
        $data['about']=$this->M_about->get_all_data();  
        $this->load->view('template/header');
        $this->load->view('v_tentangkami',$data);
        $this->load->view('template/footer',$data);
	}
}
