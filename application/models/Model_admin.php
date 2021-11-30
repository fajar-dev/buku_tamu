<?php
class Model_admin extends CI_Model
{

	function tampil($table){
		return $this->db->get($table);
	}

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}