<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_berita');
        $this->load->library('upload');
        $this->load->library('form_validation');
     }

	public function index()
	{
        $data['title'] = "Berita";
        $data['page'] = 'Berita';
        // $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/Berita');
    }
    
    function simpan_berita(){
            $config['upload_path'] = './assets/images/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $this->form_validation->set_rules('judul', 'Judul_berita', 'required');
            $this->form_validation->set_rules('isi', 'Isi_berita', 'required');  
            if ($this->form_validation->run() == FALSE)
		    {
                    $data['title'] = "Berita";
                    $this->load->view('templates/sidebar',$data);
                    $this->load->view('templates/sidebarlink');
                    $this->load->view('Webprofile/Berita');
            }
		    else
		    {
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

                            $data=array(
                                "judul_berita"=>$this->input->post('judul'),
                                "isi_berita"=>$this->input->post('isi'),
                                "foto"=>$gbr['file_name'],
                                "tgl_berita"=>date('Y-m-d'),
                                "status"=>1,
                            );
                            $this->M_berita->simpanfix($data);
                            $this->session->set_flashdata('msg','success');
                            redirect('Admin/Berita/List_berita');
                    }else{
                        echo $this->session->set_flashdata('msg','gagal');
                        redirect('admin/berita');
                        
                    }
                    
                }else{
                    redirect('admin/berita');
                }
            }
            
    }

    public function list_berita(){
        $data['title'] = "List Berita";
        $data['page'] = 'Berita';
        $data['berita']=$this->M_berita->get_all_berita();
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/List_berita',$data);
    }

    public function hapus_berita(){
        $id_berita=$this->input->post('id_berita');
        $this->M_berita->hapus_berita($id_berita);
		$this->session->set_flashdata('msg','hapus');
		redirect('admin/berita/list_berita');
    }
    
    public function edit_berita(){
        $id_berita=$this->uri->segment(4);
        $data['page'] = 'Berita';
        $data['berita']=$this->M_berita->edit_berita($id_berita);
        $data['title'] = "Edit Berita";
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/edit_berita',$data);
        // var_dump($data);  
    }
    public function update_berita(){
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
                        
                        $id_berita=$this->input->post('id_berita');
                        $data=array(
                            
                            "judul_berita"=>$this->input->post('judul_berita'),
                            "isi_berita"=>$this->input->post('isi_berita'),
                            "foto"=>$gbr['file_name'],
                            "status"=>$this->input->post('status'),
                        );
                        // var_dump($data);
                        // die;
                        $this->M_berita->update_berita($id_berita,$data);
                        $this->session->set_flashdata('msg','update');
                        redirect('Admin/Berita/list_berita');
                        // echo "ada";
                }else{
                    $this->session->set_flashdata('msg','gagal');
                    redirect('admin/berita/list_berita');
                   
                }
                 
            }else{
                    $id_berita=$this->input->post('id_berita');
                    $data=array(      
                        "judul_berita"=>$this->input->post('judul_berita'),
                        "isi_berita"=>$this->input->post('isi_berita'),
                        "status"=>$this->input->post('status'),
                    );
                        // var_dump($data);
                        // die;
                    $this->M_berita->update_berita($id_berita,$data);
                    $this->session->set_flashdata('msg','update');
                    redirect('Admin/Berita/list_berita');
            }
    }
}
