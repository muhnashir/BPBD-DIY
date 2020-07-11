<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_about');
		$this->load->model('M_Komentar');
		$this->load->library('form_validation');
    }
	public function index()
	{
		$data['about']=$this->M_about->get_all_data();
		$this->load->view('template/header');
		$this->load->view('v_kontak',$data);
		$this->load->view('template/footer',$data);
		// var_dump($data);
	}

	public function addsaran(){
		$this->form_validation->set_rules('komentar', 'Komentar', 'required');
		$this->form_validation->set_rules('nama', 'Komentar', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->session->set_flashdata('msg','<div class="allert alert-danger" role="alert">&nbsp Gagal menambahkan saran </div>');
			$data['about']=$this->M_about->get_all_data();
			$this->load->view('template/header');
			$this->load->view('v_kontak',$data);
			$this->load->view('template/footer',$data);
		}
		else
		{
			$data=array(
				"komentar"=>$this->input->post('komentar'),
				"nama"=>$this->input->post('nama'),
				"email"=>$this->input->post('email'),
				"tgl_komentar"=>date('Y-m-d'),
			);				
			// var_dump($data);
			$this->M_Komentar->add_komentar($data);
			$this->session->set_flashdata('msg','<div class="allert alert-success" role="alert">&nbsp Berhasil menambahkan saran </div>');
			redirect('Kontak');
		}
	}

	// private function _saran(){
	// 	$data=array(
	// 		"komentar"=>$this->input->post('komentar'),
	// 		"nama"=>$this->input->post('nama'),
	// 		"email"=>$this->input->post('email'),
	// 		"tgl_komentar"=>date('Y-m-d'),
	// 	);				
	// 	// var_dump($data);
	// 	$this->M_Komentar->add_komentar($data);
	// 	$this->session->set_flashdata('msg','success');
	// 	redirect('Kontak');
	// }
}
