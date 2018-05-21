<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'buku/data_buku';
		$isi['data'] = $this->db->get('data_buku');
		$this->load->view('tampilan_home',$isi);
	}
}

