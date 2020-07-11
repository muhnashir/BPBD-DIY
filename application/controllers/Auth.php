<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pegawai', ['email' => $email])->row_array();
        
        if ($user) {
            //user ada
            if ($user['is_aktif'] == 1) {
                //user aktif
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'level' => $user['level'],
                        'nama' => $user['nama_pegawai']
                    ];
                    $this->session->set_userdata($data);
                    // var_dump($data);
                    // die;
                    redirect('Admin/Dashboard');
                } else {
                    //Password salah
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Password salah!</center></div></div>');
                    redirect('auth');
                }
            } else {
                //user tidak aktif
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Username tidak aktif!</center></div></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Username tidak terdaftar!</center></div></div>');
            redirect('auth');
        }
    }

    public function lupa_akun()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/lupa_akun');
        $this->load->view('templates/auth_footer');
    }
}
