<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_lapor');

        
     }

    public function data_bencana()
    {
        $data['title'] = "Data Bencana";
        $data['page'] = 'data_bencana';
        // $data['pegawai'] = $this->M_admin->nama($data);
        // $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('level') == 1) {
            $this->load->view('templates/sidebar', $data);
             $data['lapor_bencana'] = $this->M_lapor->get_data_bencana();
      
            $this->load->view('Admin/v_data_bencana', $data);
            $this->load->view('templates/sidebarlink');
        // } else if ($this->session->userdata('level') == 2) {
        //     $this->load->view('Karyawan/dashboard', $data);
        } else {
            redirect('Auth');
        }
    }

    public function data_pengungsi()
    {
        $data['title'] = "Data Pengungsi";
        $data['page'] = 'data_pengungsi';
        // $data['pegawai'] = $this->M_admin->nama($data);
        // $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('level') == 1) {
            $this->load->view('templates/sidebar', $data);
             $data['lapor_pengungsi'] = $this->M_lapor->get_data_pengungsi();
      
            $this->load->view('Admin/v_data_pengungsi', $data);
            $this->load->view('templates/sidebarlink');
        // } else if ($this->session->userdata('level') == 2) {
        //     $this->load->view('Karyawan/dashboard', $data);
        } else {
            redirect('Auth');
        }
    }

    function hapus_laporan_bencana($id){
        $where = array('id' => $id);
        $this->M_lapor->hapus_laporan_bencana($where,'lapor_bencana');
        redirect('Admin/lapor/data_bencana');
    }


    function hapus_laporan_pengungsi($id){
        $where = array('id' => $id);
        $this->M_lapor->hapus_laporan_bencana($where,'lapor_pengungsi');
        redirect('Admin/lapor/data_pengungsi');
    }


}
