<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'anggota/data_anggota';
		$isi['data'] = $this->db->get('data_anggota');
		$this->load->view('tampilan_home',$isi);
	}
}

