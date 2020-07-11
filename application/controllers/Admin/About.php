<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
        $this->load->library('upload');
    }
	public function index()
	{
        $data['tentang']=$this->M_about->get_all_data();
        $data['title']='About';
        $data['page'] = 'About';
        // var_dump($data);
        // die; 
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/about');
        
    }
    public function update_about_1(){
        $id_tentang_kami=$this->input->post('id_tentang_kami');
            $data=array(
                    "alamat"=>$this->input->post('alamat'),
                    "no_telp"=>$this->input->post('no_telp'),
                    "email"=>$this->input->post('email'),
            );

            // var_dump($id_tentang_kami);
            // die;
            $this->M_about->update_about_1($id_tentang_kami,$data);
            $this->session->set_flashdata('msg','update');
            redirect('Admin/About');
    }

    public function update_about_2(){
            $config['upload_path'] = './assets/images/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $this->upload->initialize($config);
            if(!empty($_FILES['filefoto']['name']))
            {
                if ($this->upload->do_upload('filefoto'))
                {
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./assets/images/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= FALSE;
                        $config['quality']= '60%';
                        $config['max_size'] = 5000;
                        $config['width']= 840;
                        $config['height']= 450;
                        $config['new_image']= './assets/images/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        
                        $id_tentang_kami=$this->input->post('id_tentang_kami');
                        $data=array(
                            "foto_tentang_kami"=>$gbr['file_name'],
                        );
                        // var_dump($data);
                        // die;
                        $this->M_about->update_about_2($id_tentang_kami,$data);
                        $this->session->set_flashdata('msg','update');
                        redirect('Admin/about');
                        // echo "ada";
                }else{
                    $this->session->set_flashdata('msg','gagal');
                    redirect('admin/about');
                   
                }
                 
            }else{
                redirect('admin/berita/list_berita');
            }
    }

    public function update_about_3(){
        $id_tentang_kami=$this->input->post('id_tentang_kami');
            $data=array(
                    "isi_tentang_kami"=>$this->input->post('isi'),
            );

            // var_dump($data);
            // die;
            $this->M_about->update_about_3($id_tentang_kami,$data);
            $this->session->set_flashdata('msg','update');
            redirect('Admin/About');
    }
}
