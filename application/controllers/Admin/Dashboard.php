<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['page'] = 'Dashboard';
        // $data['pegawai'] = $this->M_admin->nama($data);
        // $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('level') == 1) {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('Admin/Dashboard');
            $this->load->view('templates/sidebarlink');
        // } else if ($this->session->userdata('level') == 2) {
        //     $this->load->view('Karyawan/dashboard', $data);
        } else {
            redirect('Auth');
        }
    }


    // public function Pemasukan()
    // {
    //     $data['title'] = "Pemasukan";
    //     $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
    //     if ($data['pegawai']['level'] == 1) {
    //         $this->load->view('Admin/Pemasukan', $data);
    //     } else if ($data['pegawai']['level'] == 2) {
    //         $this->load->view('Karyawan/Pemasukan', $data);
    //     } else {
    //         redirect('Auth');
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Kamu telah keluar!</center></div></div>');
        redirect('Auth');
    }

    // public function about(){
    //     $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('Webprofile/about');
    // }
}
