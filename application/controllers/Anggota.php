<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'anggota/data_anggota';
		$isi['data'] = $this->db->get('data_anggota');
		$this->load->view('tampilan_home',$isi);
	}
	public function tambah()
	{
		$isi['content'] = 'anggota/tambah_anggota';
		$this->load->view('tampilan_home',$isi);
	}
	public function simpan()
	{
		$key = $this->input->post('npm');
		$data['npm'] 	= $this->input->post('npm');
		$data['nama'] 	= $this->input->post('nama');
		$data['jk'] 	= $this->input->post('jk');
		$data['kelas']	= $this->input->post('kelas');
		$data['ttl'] 	= $this->input->post('ttl');
		$data['alamat'] = $this->input->post('alamat');

		$this->load->model('model_anggota');
		$query = $this->model_anggota->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_anggota->getupdate($key,$data);

		}
		else
		{
			$this->model_anggota->getinsert($data);
		}
		redirect('anggota');
	}
}

