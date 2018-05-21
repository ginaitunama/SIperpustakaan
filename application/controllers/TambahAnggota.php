<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TambahAnggota extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'anggota/tambah_anggota';
		$this->load->view('tampilan_home',$isi);
	}
}

