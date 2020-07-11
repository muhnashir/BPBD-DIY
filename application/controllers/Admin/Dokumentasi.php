<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dokumentasi');
        $this->load->library('upload');
    }

    public function video(){
        $data['title']="Video";
        $data['page'] = 'Video';
        $data['dokumentasi']=$this->M_dokumentasi->getallvideo();
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/doc_video',$data);
    }

    public function foto(){
        $data['title']="Foto";
        $data['page'] = 'Foto';
        $data['dokumentasi']=$this->M_dokumentasi->getallfoto();
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/sidebarlink');
        $this->load->view('Webprofile/doc_foto');
    }

    public function addvideo(){
        $data=array(
            "nama_kegiatan"=>$this->input->post('nama_kegiatan'),
            "deskripsi"=>$this->input->post('deskripsi'),
            "video"=>$this->input->post('video'),
            "tgl_dokumentasi_video"=>date('Y-m-d'),
            "status"=>1,
        );
        // var_dump($data);
        $this->M_dokumentasi->addvideo($data);
        $this->session->set_flashdata('msg','success');
        redirect('Admin/Dokumentasi/video');
    }

    public function hapus_video(){
        $id_dokumentasi_video=$this->input->post('id_dokumentasi_video');
        $this->M_dokumentasi->hapus_video($id_dokumentasi_video);
		$this->session->set_flashdata('msg','hapus');
		redirect('Admin/Dokumentasi/video');
    }

    public function editvideo(){
        $id_dokumentasi_video=$this->input->post('id_dokumentasi_video');
        $data=array(
            "nama_kegiatan"=>$this->input->post('nama_kegiatan'),
            "deskripsi"=>$this->input->post('deskripsi'),
            "video"=>$this->input->post('video'),
            "status"=>$this->input->post('status'),
        );
        $this->M_dokumentasi->editvideo($id_dokumentasi_video,$data);
        $this->session->set_flashdata('msg','update');
        redirect('Admin/Dokumentasi/video');
    }

    function addfoto(){
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

                    $data=array(
                        "nama_kegiatan"=>$this->input->post('nama_kegiatan'),
                        "foto"=>$gbr['file_name'],
                        "deskripsi"=>$this->input->post('deskripsi'),
                        "tgl_dokumentasi_foto"=>date('Y-m-d'),
                        "status"=>1,
                    );
                    $this->M_dokumentasi->addfoto($data);
                    $this->session->set_flashdata('msg','success');
                    redirect('Admin/Dokumentasi/foto');
            }else{
                echo $this->session->set_flashdata('msg','gagal');
                redirect('Admin/Dokumentasi/foto');
            }
             
        }else{
            echo $this->session->set_flashdata('msg','gagal');
            redirect('Admin/Dokumentasi/foto');
        }
        
}


public function hapus_foto(){
    $id_dokumentasi_foto=$this->input->post('id_dokumentasi_foto');
    $this->M_dokumentasi->hapus_foto($id_dokumentasi_foto);
    $this->session->set_flashdata('msg','hapus');
    redirect('Admin/Dokumentasi/foto');
}

public function editfoto(){
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
                
                $id_dokumentasi_foto=$this->input->post('id_dokumentasi_foto');
                $data=array(
                    "nama_kegiatan"=>$this->input->post('nama_kegiatan'),
                    "deskripsi"=>$this->input->post('deskripsi'),
                    "foto"=>$gbr['file_name'],
                    "status"=>$this->input->post('status'),
                );
                $this->M_dokumentasi->editfoto($id_dokumentasi_foto,$data);
                $this->session->set_flashdata('msg','update');
                redirect('Admin/Dokumentasi/foto');
                // echo "ada";
        }else{
            $this->session->set_flashdata('msg','gagal');
            redirect('Admin/Dokumentasi/foto');
           
        }
         
    }else{
            $id_dokumentasi_foto=$this->input->post('id_dokumentasi_foto');
            $data=array(
                "nama_kegiatan"=>$this->input->post('nama_kegiatan'),
                "deskripsi"=>$this->input->post('deskripsi'),
                "status"=>$this->input->post('status'),
            );
                // var_dump($data);
                // die;
            $this->M_dokumentasi->editfoto($id_dokumentasi_foto,$data);
            $this->session->set_flashdata('msg','update');
            redirect('Admin/Dokumentasi/foto');
    }
}

	
}
