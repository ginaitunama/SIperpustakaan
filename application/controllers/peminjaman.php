<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'pem_buku/data_peminjaman';
		$isi['data'] = $this->db->get('trans_pinjam');
		$this->load->view('tampilan_home',$isi);
	}

	public function input()
	{
		$isi['content'] = 'pem_buku/input_peminjaman';
		$this->load->view('tampilan_home',$isi);
	}
}