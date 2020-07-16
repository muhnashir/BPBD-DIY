<?php 

class M_lapor extends CI_Model
{

	public function get_data_bencana(){
		return $this->db->get('lapor_bencana')->result_array(); 
	}

	public function get_data_pengungsi(){
		return $this->db->get('lapor_pengungsi')->result_array(); 
	}

	public function input_data_laporan_bencana($data){
		return $this->db->insert('lapor_bencana', $data);
	}

	public function input_data_laporan_pengungsi($data){
		return $this->db->insert('lapor_pengungsi', $data);
	}

	public function hapus_laporan_bencana($where,$table){

	$this->db->where($where);
	$this->db->delete($table);
	}

	public function hapus_laporan_pengungsi($where,$table){

	$this->db->where($where);
	$this->db->delete($table);
	}



}
 ?>