<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDaftar extends CI_Model {

	public function tampil() {
		return $this->db->get('tb_daftar');
	}

	public function simpan($data) {
		return $this->db->insert('tb_daftar', $data);
	}

	public function hapus($data)
	{
		$hapus = $this->db->where('id_daftar', $data);
        return $this->db->delete('tb_daftar', $hapus);
	}

}

/* End of file MDaftar.php */
/* Location: ./application/models/MDaftar.php */