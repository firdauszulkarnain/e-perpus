<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    // Cek Session Login Admin
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
    }


    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Buku';
        $data['buku'] = $this->Data_Model->ambil_buku();
        $this->template->load('template/template', 'admin/buku/index', $data);
    }

    public function tambah_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Tambah Data Buku';
        $data['kategori'] = $this->db->get('kategori')->result_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim', ['required' => 'Nama Buku Tidak Boleh Kosong']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'kategori Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', ['required' => 'Tahun Terbit Tidak Boleh Kosong']);
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required', ['required' => 'Pengarang Tidak Boleh Kosong']);


        if ($this->form_validation->run() == false) {
            $this->template->load('template/template', 'admin/buku/tambah_buku', $data);
        } else {
            $this->Data_Model->tambah_buku();
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data Buku');
            redirect('buku');
        }
    }

    public function hapus_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $id_buku = $this->input->post('id_buku');
        $this->Data_Model->hapus_buku($id_buku);
        $this->session->set_flashdata('pesan', 'Berhasil Hapus Buku');
        redirect('buku');
    }

    public function update_buku($id_buku)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Update Buku';
        $data['buku'] = $this->Data_Model->detail_buku($id_buku);
        $data['kategori'] = $this->db->get('kategori')->result_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim', ['required' => 'Nama Buku Tidak Boleh Kosong']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'kategori Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', ['required' => 'Tahun Terbit Tidak Boleh Kosong']);
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required', ['required' => 'Pengarang Tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->template->load('template/template', 'admin/buku/update_buku', $data);
        } else {
            $this->Data_Model->update_buku($id_buku);
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data Buku');
            redirect('buku');
        }
    }

    public function tambah_stock()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->form_validation->set_rules('stock', 'Stock', 'required', ['required' => "Stock Harus Diisi",]);

        if ($this->form_validation->run() == false) {
            redirect('buku');
        } else {
            $this->Data_Model->tambah_stock();
            $this->session->set_flashdata('pesan', 'Tambah Stock Buku');
            redirect('buku');
        }
    }

    public function cari_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $id_buku = $this->input->post('id_buku');
        $buku = $this->Data_Model->detail_buku($id_buku);
        $response = array(
            'kategori' => $buku['nama_kategori'],
            'pengarang' => $buku['pengarang'],
            'tahun_terbit' => $buku['tahun_terbit'],
        );
        echo json_encode($response);
    }
}
