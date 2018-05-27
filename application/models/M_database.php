<?php
defined('BASEPATH') OR exit ('No direct script accsess allowed');

class M_database extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = "data_anggota";
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}
}
?>