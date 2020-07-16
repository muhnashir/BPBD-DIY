<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('M_lapor');
	}

	public function laporan_bencana()
	{
		$this->load->view('template/header');
		$this->load->view('v_tambah_laporan_bencana');
		$this->load->view('template/footer');
	}

	public function laporan_pengungsi()
	{
		$this->load->view('template/header');
		$this->load->view('v_tambah_laporan_pengungsi');
		$this->load->view('template/footer');
	}

	public function proses_tambah_laporan_bencana()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$laporan = $this->input->post('laporan');
		$status = $this->input->post('status');

		$data = array(

				'nama' => $nama,
				'email' => $email,
				'no_hp' => $no_hp,
				'laporan' => $laporan,
				'status' => $status
		);

		$this->M_lapor->input_data_laporan_bencana($data, 'lapor_bencana');
		redirect('home/');
	}

	public function proses_tambah_laporan_pengungsi()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$laporan = $this->input->post('laporan');
		

		$data = array(

				'nama' => $nama,
				'email' => $email,
				'no_hp' => $no_hp,
				'laporan' => $laporan,
				
		);

		$this->M_lapor->input_data_laporan_pengungsi($data, 'lapor_pengungsi');
		redirect('home/');
	}


}
