<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'content_home';
		$this->load->view('tampilan_home',$isi);
	}
}

