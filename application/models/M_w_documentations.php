<?php
Class M_w_documentations extends CI_model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        
     }

    function get_all_foto(){
    return $this->db->get_where('tb_dokumentasi_foto',array('status' => 1))->result();
    }

    function get_all_video($limit, $start){
        return $this->db->get_where('tb_dokumentasi_video',array('status' => 1), $limit, $start)->result();
        }

    // function readmore_berita($id_berita){
    //     return $this->db->get_where('tb_berita', array('id_berita' => $id_berita))->result();
    //   }

}
?>