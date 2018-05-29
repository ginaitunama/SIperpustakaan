<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Buku extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('data_buku');
		return $hasil;

	}
	public function getupdate($key,$data)
	{
		$this->db->where('id',$key);
		$this->db->update('data_buku',$data);

	}
	public function getinsert($data)
	{
		$this->db->insert('data_buku',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('data_buku');
	}

	
}

