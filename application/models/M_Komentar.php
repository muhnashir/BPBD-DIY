<?php
Class M_komentar extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    function get_all_komen(){
      return $this->db->get('tb_komentar')->result(); 
    }

    function hapus_komentar($id_komentar){
      return $this->db->delete('tb_komentar', array('id_komentar' => $id_komentar)); 
    }

    function add_komentar($data){
      $this->db->insert('tb_komentar',$data);
    }
    
}
?>