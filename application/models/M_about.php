<?php
Class M_about extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }

    function get_all_data(){
      return $this->db->get('tb_tentang_kami')->result(); 
    }
    function get_all_data_vimi(){
      return $this->db->get('tb_visi_misi')->result(); 
    }

    function update_about_1($id_tentang_kami, $data){
      $this->db->update('tb_tentang_kami', $data, array('id_tentang_kami' => $id_tentang_kami));
    }

    function update_about_2($id_tentang_kami, $data){
      $this->db->update('tb_tentang_kami', $data, array('id_tentang_kami' => $id_tentang_kami));
    }

    function update_about_3($id_tentang_kami, $data){
      $this->db->update('tb_tentang_kami', $data, array('id_tentang_kami' => $id_tentang_kami));
    }

   
}
?>