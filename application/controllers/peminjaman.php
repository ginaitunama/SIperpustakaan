<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'pem_buku/data_peminjaman';
		$isi['data'] = $this->db->get('trans_pinjam');
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$isi['content'] = 'pem_buku/input_peminjaman';

		$isi['id']				= '';
		$isi['judul_buku']		= '';
		$isi['nama_peminjam']	= '';
		$isi['tgl_pinjam']		= '';
		$isi['tgl_kembali']		= '';
		$isi['status']			= '';
		$isi['ket']				= '';

		$this->load->view('tampilan_home',$isi);
	}
	public function edit()
	{
		$isi['content'] = 'pem_buku/input_peminjaman';

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('trans_pinjam');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row)
			{
				$isi['id']				= $row->id;
				$isi['judul_buku']		= $row->judul_buku;
				$isi['nama_peminjam']	= $row->nama_peminjam;
				$isi['tgl_pinjam']		= $row->tgl_pinjam;
				$isi['tgl_kembali']		= $row->tgl_kembali;
				$isi['status']			= $row->status;
				$isi['ket']				= $row->ket;
			}
		} 
		else
		{
				$isi['id']				= '';
				$isi['judul_buku']		= '';
				$isi['nama_peminjam']	= '';
				$isi['tgl_pinjam']		= '';
				$isi['tgl_kembali']		= '';
				$isi['status']			= '';
				$isi['ket']				= '';
		}
		

		$this->load->view('tampilan_home',$isi);
	}
	public function simpan()
	{
		$key = $this->input->post('judul_buku');
		$data['judul_buku'] 	= $this->input->post('judul_buku');
		$data['nama_peminjam'] 	= $this->input->post('nama_peminjam');
		$data['tgl_pinjam'] 	= $this->input->post('tgl_pinjam');
		$data['tgl_kembali']	= $this->input->post('tgl_kembali');
		$data['status'] 		= $this->input->post('status');
		$data['ket'] 	= $this->input->post('ket');

		$this->load->model('model_peminjaman');
		$query = $this->model_peminjaman->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_peminjaman->getupdate($key,$data);

		}
		else
		{
			$this->model_peminjaman->getinsert($data);
		}
		redirect('peminjaman');
	}
	
}
