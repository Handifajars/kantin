<?php 

class m_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('menu');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function reset($table){
		$this->db->truncate($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function get_data (){
        return $this->db->get('menu')->result_array();
	}
	
    public function data_p (){
        return $this->db->get('transaksi')->result_array();
	}
	public function data_u (){
        return $this->db->get('user')->result_array();
	}
	
    public function keranjang($where,$table){		
		return $this->db->get_where($table,$where);
	}
}