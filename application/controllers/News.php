<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
        $this->load->library('pagination');
        $this->load->model('M_w_berita');
        $this->load->helper('text');
        $this->load->library('form_validation');
		// $this->load->model('M_Komentar');
		// $this->load->library('form_validation');
    }
	public function index()
	{
         //konfigurasi pagination
         $config['base_url'] = site_url('News/index'); //site url
         $config['total_rows'] = $this->db->count_all('tb_berita'); //total row
         $config['per_page'] = 5;  //show record per halaman
         $config["uri_segment"] = 3;  // uri parameter
         $choice = $config["total_rows"] / $config["per_page"];
         $config["num_links"] = floor($choice);
 
         // Membuat Style pagination untuk BootStrap v4
         $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
 
         $this->pagination->initialize($config);
         $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
         $data['about']=$this->M_about->get_all_data();
         $data['berita']=$this->M_w_berita->get_all_berita($config["per_page"], $data['page']);
         $data['pagination'] = $this->pagination->create_links();
         $data['news']=$this->M_w_berita->get_all_beritaa();
		$this->load->view('template/header');
		$this->load->view('v_berita',$data);
		$this->load->view('template/footer',$data);
    }
    
    public function readmore(){
        $id_berita=$this->uri->segment(3);
        $data['about']=$this->M_about->get_all_data();
        $data['berita']=$this->M_w_berita->readmore_berita($id_berita);
        $data['news']=$this->M_w_berita->get_all_beritaa();
        $this->load->view('template/header');
		$this->load->view('v_readmore_berita',$data);
		$this->load->view('template/footer',$data);
    }

    function fetch(){
            $output = '';
            $query = '';
            $this->M_w_berita->fetch_data(); 
            // $this->load->model('ajaxsearch_model');
            if($this->input->post('query'))
            {
            $query = $this->input->post('query');
            }
            $data = $this->M_w_berita->fetch_data($query);
            $output .= '
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                </tr>
            ';
            if($data->num_rows() > 0)
            {
            foreach($data->result() as $row)
            {
                $output .= '
                <tr>
                <td>'.$row->judul_berita.'</td>
                <td>'.$row->isi_berita.'</td>
                <td>'.$row->tgl_berita.'</td>
                </tr>
                ';
            }
            }
            else
            {
            $output .= '<tr>
                <td colspan="5">No Data Found</td>
                </tr>';
            }
            $output .= '</table>';
            echo $output;
    }

}
