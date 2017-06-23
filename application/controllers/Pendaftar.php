<?php
class Pendaftar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MDaftar');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        };

        $id_login   = $this->session->userdata("id_user");
        $datalogin  = $this->db->get_where("tb_user", array('id_user'=> $id_login))->row();
    }

    public function index()
    {
        $data['title']  = "Data Pendaftar";
        $data['data']   = $this->MDaftar->tampil()->result_array();
        $data['konten'] = "pendaftar/tampil";
        $data['web']    = $this->MWeb->tampil()->row();
        $this->load->view('template', $data);
    }

    public function tambah() {
    	$data['title']    = "Tambah Pendaftar";
        $data['web']    = $this->MWeb->tampil()->row();
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
                redirect(base_url('pendaftar'));
            }

        } else {
            $data['konten'] = "pendaftar/tambah";
            $this->load->view('template', $data);
        }
    }

    public function edit($id) {
        $data['title']  = "Edit Data Pendaftar";
        $data['web']    = $this->MWeb->tampil()->row();
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

            $this->db->where('id_daftar', $id);
            $query = $this->db->update('tb_daftar', $objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_edit', 'sukses');
                redirect(base_url('pendaftar'));
            }

        } else {
            $data['konten'] = "pendaftar/edit";
            $data['editdata'] = $this->db->get_where("tb_daftar", array('id_daftar'=> $id))->row();
            $this->load->view('template', $data); 
        }
    }

    public function hapus($id)
    {

        $query = $this->MDaftar->hapus($id);

        if ($query) {
            $this->session->set_flashdata('berhasil_hapus', 'sukses');
            redirect(base_url('pendaftar'));
        }
    }

    public function cari(){
        $data['title']="Pencarian Data";
        $cari=$this->input->post('cari');
        $cek=$this->MBuku->cari($cari);

        if($cek->num_rows()>0){
            $data['konten']     = 'buku/cari';
            $data['message']    = "";
            $data['data']       = $cek->result_array();
            $this->load->view('template', $data);
        }else{
            $data['konten']     = 'buku/cari';
            $data['data']       = $cek->result_array();
            $data['message']    = $this->session->set_flashdata('gagal_cari','Gagal' );
            $this->load->view('template', $data);
        }
    }

}