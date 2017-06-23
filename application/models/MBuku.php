<?php
class MBuku extends CI_Model {

	public function tampil() {
		return $this->db->get('tb_buku');
	}

	public function simpan($data) {
		return $this->db->insert('tb_buku', $data);
	}

	public function hapus($data)
	{
		$hapus = $this->db->where('id_buku', $data);
        return $this->db->delete('tb_buku', $hapus);
	}

	public function cari($cari){
        $this->db->like('id_buku',$cari);
        $this->db->or_like("judul",$cari);
        $this->db->or_like("penulis",$cari);
        return $this->db->get('tb_buku');
    }

}