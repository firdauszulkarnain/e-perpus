<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Buku';
        $data['buku'] = $this->Data_Model->ambil_buku();
        $this->template->load('template/template', 'admin/buku/index', $data);
    }

    public function tambah_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Tambah Data Produk';
        $data['notif'] = $this->Admin_Model->hitung_notif();
        $data['kategori'] = $this->db->get('kategori')->result_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('nama_produk', 'Nama Buku', 'required|trim|is_unique[produk.nama_buku]', ['required' => 'Nama Buku Tidak Boleh Kosong', 'is_unique' => 'Buku Sudah Ada']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'kategori Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', ['required' => 'Tahun Terbit Tidak Boleh Kosong']);
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required', ['required' => 'Pengarang Tidak Boleh Kosong']);


        if ($this->form_validation->run() == false) {
            $this->template->load('template/admin/template', 'admin/buku/tambah_buku', $data);
        } else {
            $this->Data_Model->tambah_buku();
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data Buku');
            redirect('buku');
        }
    }

    public function hapus_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $id_hapus = $this->input->post('id_hapus');
        $this->Data_Model->hapus_buku($id_hapus);
        $this->session->set_flashdata('pesan', 'Berhasil Hapus Buku');
        redirect('buku');
    }

    public function update_buku()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Tambah Data Produk';
        $id_buku = '';
        $data['buku'] = $this->Data_Model->detail_buku($id_buku);
        $data['kategori'] = $this->db->get('kategori')->result_array();

        // FORM VALIDATION
        $this->form_validation->set_rules('nama_produk', 'Nama Buku', 'required|trim|is_unique[produk.nama_buku]', ['required' => 'Nama Buku Tidak Boleh Kosong', 'is_unique' => 'Buku Sudah Ada']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'kategori Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', ['required' => 'Tahun Terbit Tidak Boleh Kosong']);
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required', ['required' => 'Pengarang Tidak Boleh Kosong']);


        if ($this->form_validation->run() == false) {
            $this->template->load('template/admin/template', 'admin/buku/update_buku', $data);
        } else {
            $this->Data_Model->update_buku();
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data Buku');
            redirect('buku');
        }
    }
}
