<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'buku/data_buku';
		$isi['data'] = $this->db->get('data_buku');
		$this->load->view('tampilan_home',$isi);
	}
	public function tambah()
	{
		$isi['content'] = 'buku/tambah_buku';
		$this->load->view('tampilan_home',$isi);
	}
	public function simpanbuku()
	{
		$key = $this->input->post('judul');
		$data['judul'] 		= $this->input->post('judul');
		$data['pengarang'] 	= $this->input->post('pengarang');
		$data['th_terbit'] 	= $this->input->post('th_terbit');
		$data['penerbit']	= $this->input->post('penerbit');
		$data['isbn'] 		= $this->input->post('isbn');
		$data['kategori'] 	= $this->input->post('kategori');
		$data['jumlah_buku']= $this->input->post('jumlah_buku');

		$this->load->model('model_buku');
		$query = $this->model_buku->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_buku->getupdate($key,$data);

		}
		else
		{
			$this->model_buku->getinsert($data);
		}
		redirect('buku');
	}
}

