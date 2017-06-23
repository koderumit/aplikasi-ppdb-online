<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin');
		if ($this->session->userdata('status') == 'login') {
			redirect(base_url('dashboard'));
		}
	}

	public function index()
	{
		$data['web']	= $this->MWeb->tampil()->row();
		$data['title'] 	= "Login Aplikasi";
		$this->load->view('tampil_login', $data);
	}

	public function aksilogin()
	{
		$id_user = $this->input->post('id_user');
		$password = $this->input->post('password');

		$where = array(
			'id_user' => $id_user,
			'password' => md5($password)
		);

		$cek = $this->MLogin->login("tb_user", $where )->num_rows();

		if ($cek > 0 ) {

			$data_session = array(
				'id_user' => $id_user,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));
		} else {
			$this->session->set_flashdata('gagal_login', 'gagal');
			redirect(base_url('login'));
		}
	}

}
