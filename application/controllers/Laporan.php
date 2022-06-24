<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    // Cek Session Login Admin
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
    }

    public function peminjaman()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Laporan Peminjaman Buku';
        $data['peminjaman'] = $this->db->get('peminjaman')->result_array();
        $this->template->load('template/template', 'admin/laporan/pinjam', $data);
    }

    public function pengembalian()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Laporan Pengembalian Buku';
        $data['pengembalian'] = $this->db->get('pengembalian')->result_array();
        $this->template->load('template/template', 'admin/laporan/kembali', $data);
    }
}