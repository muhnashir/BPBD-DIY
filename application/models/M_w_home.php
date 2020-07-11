<?php
Class M_w_home extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }

    function get_three_berita(){
      // return $this->db->get_where('tb_berita',array('status' => 1))->result();
      $this->db->select('*'); 
      $this->db->from('tb_berita'); 
      $this->db->where('status','1');
      $this->db->order_by('id_berita','DESC');
      $this->db->limit(3);
      $query = $this->db->get();
      return $query->result();
    }

    function get_three_mitra(){
      $this->db->select('*'); 
      $this->db->from('tb_mitra'); 
      $this->db->order_by('id_mitra','ASC');
      $this->db->limit(3);
      $query = $this->db->get();
      return $query->result();
    }

}
?>