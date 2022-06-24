<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{  // Cek Session Login Admin
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
        $data['title'] = 'Transaksi Peminjaman Buku';
        $data['anggota'] = $this->db->get('anggota')->result_array();
        $data['buku'] = $this->db->get('buku')->result_array();
        $this->template->load('template/template', 'admin/transaksi/pinjam', $data);
    }
}
