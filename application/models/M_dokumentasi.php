<?php
Class M_dokumentasi extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');     
    }

    public function addvideo($data){
        $this->db->insert('tb_dokumentasi_video',$data);
    }
    public function getallvideo(){
        return $this->db->get('tb_dokumentasi_video')->result();
    }
    public function hapus_video($id_dokumentasi_video){
        return $this->db->delete('tb_dokumentasi_video', array('id_dokumentasi_video' => $id_dokumentasi_video)); 
    }
    public function editvideo($id_dokumentasi_video,$data){
        $this->db->where('id_dokumentasi_video',$id_dokumentasi_video);
        $this->db->update('tb_dokumentasi_video', $data);
    }


    public function getallfoto(){
        return $this->db->get('tb_dokumentasi_foto')->result();
    }

    public function addfoto($data){
        $this->db->insert('tb_dokumentasi_foto',$data);
    }

    public function hapus_foto($id_dokumentasi_foto){
        return $this->db->delete('tb_dokumentasi_foto', array('id_dokumentasi_foto' => $id_dokumentasi_foto)); 
    }

    public function editfoto($id_dokumentasi_foto,$data){
        $this->db->where('id_dokumentasi_foto',$id_dokumentasi_foto);
        $this->db->update('tb_dokumentasi_foto', $data);
    }

    

    
   
}
?>