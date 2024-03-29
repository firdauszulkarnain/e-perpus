<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth_admin/login');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Kategori Buku';
        $data['kategori'] = $this->Data_Model->ambil_kategori();
        $this->template->load('template/template', 'admin/kategori/index', $data);
    }

    public function tambah_kategori()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Data_Model->tambah_kategori();
        $this->session->set_flashdata('pesan', 'Berhasil Tambah Kategori');
        redirect('kategori');
    }

    public function update_kategori()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Data_Model->update_kategori();
        $this->session->set_flashdata('pesan', 'Behasil Update Kategori');
        redirect('kategori');
    }

    public function hapus_kategori()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $this->Data_Model->hapus_kategori();
        $this->session->set_flashdata('pesan', 'Barhasil Hapus Kategori');
        redirect('kategori');
    }
}
