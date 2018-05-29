<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Anggota extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('npm',$key);
		$hasil = $this->db->get('data_anggota');
		return $hasil;

	}
	public function getupdate($key,$data)
	{
		$this->db->where('npm',$key);
		$this->db->update('data_anggota',$data);

	}
	public function getinsert($data)
	{
		$this->db->insert('data_anggota',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('npm',$key);
		$this->db->delete('data_anggota');
	}

	
}

