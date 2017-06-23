<?php
class MPasok extends CI_Model {

	public function tampil() {
		$this->db->select('*');    
		$this->db->from('tb_pasok');
		$this->db->join('tb_buku', 'tb_pasok.id_buku = tb_buku.id_buku');
		$this->db->join('tb_distributor', 'tb_pasok.id_distributor = tb_distributor.id_distributor');
		$this->db->join('tb_kasir', 'tb_pasok.id_kasir = tb_kasir.id_kasir');
		$query = $this->db->get();
		return $query;
	}
	public function detail($id) {
		$this->db->select('*');    
		$this->db->from('tb_pasok');
		$this->db->join('tb_buku', 'tb_pasok.id_buku = tb_buku.id_buku');
		$this->db->join('tb_distributor', 'tb_pasok.id_distributor = tb_distributor.id_distributor');
		$this->db->join('tb_kasir', 'tb_pasok.id_kasir = tb_kasir.id_kasir');
		$this->db->where('id_pasok', $id);
		$query = $this->db->get();
		return $query;
	}

	public function simpan($data) {
		return $this->db->insert('tb_pasok', $data);
	}

	public function cari($cari){
        $this->db->like('id_pasok',$cari);
        // $this->db->or_like("judul",$cari);
        // $this->db->or_like("penulis",$cari);
        return $this->db->get('tb_pasok');
    }

}