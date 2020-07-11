<?php
Class M_berita extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }
    public function simpanfix($data){
      $this->db->insert('tb_berita',$data);
    }

    function get_all_berita(){
      return $this->db->get('tb_berita')->result(); 
    }

    function hapus_berita($id_berita){
      return $this->db->delete('tb_berita', array('id_berita' => $id_berita)); 
    }
    
    function edit_berita($id_berita){
      return $this->db->get_where('tb_berita', array('id_berita' => $id_berita))->result();
    }
    function update_berita($id_berita,$data){
      $this->db->where('id_berita',$id_berita);
      $this->db->update('tb_berita', $data);
      // var_dump($data);
      
    }
}
?>