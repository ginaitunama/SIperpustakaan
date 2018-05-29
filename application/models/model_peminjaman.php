<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Peminjaman extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('trans_pinjam');
		return $hasil;

	}
	public function getupdate($key,$data)
	{
		$this->db->where('id',$key);
		$this->db->update('trans_pinjam',$data);

	}
	public function getinsert($data)
	{
		$this->db->insert('trans_pinjam',$data);
	}

	
}

