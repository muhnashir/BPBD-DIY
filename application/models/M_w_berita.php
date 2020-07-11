<?php
Class M_w_berita extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }

    function get_all_berita($limit, $start){
    //   $this->db->select('*'); 
    //   $this->db->from('tb_berita'); 
    //   $this->db->order_by('id_berita','DESC');
    // //   $this->db->limit(3);
    //   $query = $this->db->get();
    //   return $query->result();
    return $this->db->get_where('tb_berita',array('status' => 1), $limit, $start)->result();
    }
    function get_all_beritaa(){
        return $this->db->get_where('tb_berita',array('status' => 1))->result();
    }

    function readmore_berita($id_berita){
        return $this->db->get_where('tb_berita', array('id_berita' => $id_berita))->result();
      }
    
      function fetch_data($query){
            $this->db->select("*");
            $this->db->from("tb_berita");
            if($query != '')
            {
            $this->db->like('judul_berita', $query);
            $this->db->or_like('isi_berita', $query);
            $this->db->or_like('tgl_berita', $query);
            }
            // $this->db->order_by('CustomerID', 'DESC');
            return $this->db->get();
    }

}
?>