<?php
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url('login'));
		}
	}

    public function index()
    {
    	$data['konten'] = "konten";
    	$data['web']	= $this->MWeb->tampil()->row();
    	$id_login = $this->session->userdata("id_user");
    	$data['login'] = $this->db->get_where("tb_user", array('id_user'=> $id_login))->row();
        $this->load->view('template', $data);
    }
}