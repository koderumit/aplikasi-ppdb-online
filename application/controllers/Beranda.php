<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$data['web']	= $this->MWeb->tampil()->row();
		$data['konten_public'] = "konten_public";
		$this->load->view('template_public', $data);
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */