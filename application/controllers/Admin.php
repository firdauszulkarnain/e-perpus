<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        redirect('admin/dashboard');
    }

    public function dashboard()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Dashboard';
        $data['buku'] = $this->db->get('buku')->num_rows();
        $data['anggota'] = $this->db->get('anggota')->num_rows();
        $data['peminjaman'] = $this->db->get('peminjaman')->num_rows();
        $data['kategori'] = $this->db->get('kategori')->num_rows();
        $this->template->load('template/template', 'admin/dashboard', $data);
    }
}
