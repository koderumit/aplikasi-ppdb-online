<?php
class MLogin extends CI_Model {

	public function login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	// public function datalogin(){
	// 	$id = $this->session->userdata("id_kasir");
	// 	return $this->db->query("SELECT * FROM `tb_kasir` WHERE `id_kasir` = '$id'");
	// }

}