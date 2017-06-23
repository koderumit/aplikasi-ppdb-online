<?php
class Distributor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MDistributor');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        };

        $id_login   = $this->session->userdata("id_kasir");
        $datalogin  = $this->db->get_where("tb_kasir", array('id_kasir'=> $id_login))->row();

        if ($datalogin->akses != "admin") {
            redirect(base_url('dashboard'));
        };
    }

    public function index()
    {
        $data['data']   = $this->MDistributor->tampil()->result_array();
        $data['title'] = "Data Distributor";
        $data['konten'] = "distributor/tampil";
        $this->load->view('template', $data);
    }

    public function tambah() {
    	$data['title']	= "Tambah Data Distributor";

        if ($this->input->post('submit')) {
            #ini controller simpan

            $a = $this->input->post('nama_distributor');
            $b = $this->input->post('telepon');
            $c = $this->input->post('alamat');

            $objek = array(
                'nama_distributor' => $a,
                'telepon' => $b,
                'alamat' => $c,
                 );

            $query = $this->MDistributor->simpan($objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_simpan', 'sukses');
                redirect(base_url('distributor'));
            }

        } else {
            $data['konten'] = "distributor/tambah";
            $this->load->view('template', $data); 
        }
    }

    public function edit($id) {
        $data['title']  = "Edit Data Distributor";

        if ($this->input->post('submit')) {
            #ini controller simpan

            $a = $this->input->post('nama_distributor');
            $b = $this->input->post('telepon');
            $c = $this->input->post('alamat');

            $objek = array(
                'nama_distributor' => $a,
                'telepon' => $b,
                'alamat' => $c,
                 );

            $this->db->where('id_distributor', $id);
            $query = $this->db->update('tb_distributor', $objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_edit', 'sukses');
                redirect(base_url('distributor'));
            }

        } else {
            $data['konten'] = "distributor/edit";
            $data['editdata'] = $this->db->get_where("tb_distributor", array('id_distributor'=> $id))->row();
            $this->load->view('template', $data); 
        }
    }

    public function hapus($id)
    {

        $query = $this->MDistributor->hapus($id);

        if ($query) {
            $this->session->set_flashdata('berhasil_hapus', 'sukses');
            redirect(base_url('distributor'));
        }
    }

    public function cari(){
        $data['title']="Pencarian Data";
        $cari=$this->input->post('cari');
        $cek=$this->MDistributor->cari($cari);

        if($cek->num_rows()>0){
            $data['konten']     = 'distributor/cari';
            $data['message']    = "";
            $data['data']       = $cek->result_array();
            $this->load->view('template', $data);
        }else{
            $data['konten']     = 'distributor/cari';
            $data['data']       = $cek->result_array();
            $data['message']    = $this->session->set_flashdata('gagal_cari','Gagal' );
            $this->load->view('template', $data);
        }
    }

}