<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasok extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       	$this->load->model('MBuku'); 
        $this->load->model('MDistributor');
        $this->load->model('MPasok');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }

        $id_login   = $this->session->userdata("id_kasir");
        $datalogin  = $this->db->get_where("tb_kasir", array('id_kasir'=> $id_login))->row();

        if ($datalogin->akses != "kasir") {
            redirect(base_url('dashboard'));
        };
    }

    public function index()
    {
        $data['data']   = $this->MPasok->tampil()->result_array();
        $data['title'] = "Data Pasok";
        $data['konten'] = "pasok/tampil";
        $this->load->view('template', $data);
    }

    public function tambah() {
    	$data['title']	= "Tambah Data Pasok";
    	$data['distributor'] = $this->MDistributor->tampil()->result_array();
    	$data['buku'] = $this->MBuku->tampil()->result_array();
        if ($this->input->post('submit')) {
            #ini controller simpan

            $a = $this->input->post('id_distributor');
            $b = $this->input->post('id_buku');
            $c = $this->input->post('jumlah');
            $d = $this->input->post('tanggal');
            $e = $this->input->post('id_kasir');

            $objek = array(
                'id_distributor' => $a,
                'id_buku' => $b,
                'jumlah' => $c,
                'tanggal' => $d,
                'id_kasir' => $e );

            $query = $this->MPasok->simpan($objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_simpan', 'sukses');
                redirect(base_url('pasok'));
            }

        } else {
            $data['konten'] = "pasok/tambah";
            $this->load->view('template', $data); 
        }
    }

    

    public function cari(){
        $data['title']="Pencarian Data";
        $cari=$this->input->post('cari');
        $cek=$this->Mpasok->cari($cari);

        if($cek->num_rows()>0){
            $data['konten']     = 'pasok/cari';
            $data['message']    = "";
            $data['data']       = $cek->result_array();
            $this->load->view('template', $data);
        }else{
            $data['konten']     = 'pasok/cari';
            $data['data']       = $cek->result_array();
            $data['message']    = $this->session->set_flashdata('gagal_cari','Gagal' );
            $this->load->view('template', $data);
        }
    }

    public function detail($id){
        $data['title']  = "Detail Data";
        $data['detaildata'] = $this->MPasok->detail($id)->row();
        $data['konten'] = "pasok/detail";
        $this->load->view('template', $data);
    }

    public function laporan($id){
        $data['title']  = "Lapporan Data";
        $data['detaildata'] = $this->MPasok->detail($id)->row();
        $data['laporan'] = "pasok/laporan";
        $this->load->view('template_laporan', $data);
    }

}

/* End of file Pasok.php */
/* Location: ./application/controllers/Pasok.php */