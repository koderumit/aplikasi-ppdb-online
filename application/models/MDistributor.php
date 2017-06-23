<?php
class MDistributor extends CI_Model {

	public function tampil() {
		return $this->db->get('tb_distributor');
	}

	public function simpan($data) {
		return $this->db->insert('tb_distributor', $data);
	}

	public function hapus($data)
	{
		$hapus = $this->db->where('id_distributor', $data);
        return $this->db->delete('tb_distributor', $hapus);
	}

	public function cari($cari){
        $this->db->like('id_distributor',$cari);
        $this->db->or_like("nama_distributor",$cari);
        $this->db->or_like("telepon",$cari);
        $this->db->or_like("alamat",$cari);
        return $this->db->get('tb_distributor');
    }

}