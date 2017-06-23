<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDaftar');
	}

	public function index()
	{
		$data['title']	= "Daftar Calon Peserta Didik";
		$data['web']	= $this->MWeb->tampil()->row();
		if ($this->input->post('submit')) {

            $a = $this->input->post('nama_siswa');
            $b = $this->input->post('kelamin_siswa');
            $c = $this->input->post('tgl_lahir_siswa');
            $d = $this->input->post('agama_siswa');
            $e = $this->input->post('alamat_siswa');
            $f = $this->input->post('asal_sekolah_siswa');
            $g = $this->input->post('no_hp_siswa');
            $h = $this->input->post('nama_ayah_siswa');
            $i = $this->input->post('nama_ibu_siswa');

            $objek = array(
                'nama_siswa' => $a,
                'kelamin_siswa' => $b,
                'tgl_lahir_siswa' => $c,
                'agama_siswa' => $d,
                'alamat_siswa' => $e,
                'asal_sekolah_siswa' => $f,
                'no_hp_siswa' => $g,
                'nama_ayah_siswa' => $h,
                'nama_ibu_siswa' => $i
                 );

            $query = $this->MDaftar->simpan($objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_simpan', 'sukses');
                redirect(base_url('daftar'));
            }

        } else {
            $data['konten_public'] = "daftar";
			$this->load->view('template_public', $data);
        }
	}


}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */