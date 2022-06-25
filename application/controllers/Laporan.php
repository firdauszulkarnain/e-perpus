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
        $data['peminjaman'] = $this->Transaksi_Model->ambil_peminjaman();
        $this->template->load('template/template', 'admin/laporan/pinjam', $data);
    }

    public function pengembalian()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Laporan Pengembalian Buku';
        $data['pengembalian'] = $this->Transaksi_Model->ambil_pengembalian();
        $this->template->load('template/template', 'admin/laporan/kembali', $data);
    }

    public function detail_peminjaman($nomor_peminjaman)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Laporan Peminjaman Buku';
        $data['peminjaman'] = $this->Transaksi_Model->detail_peminjaman($nomor_peminjaman);
        $this->template->load('template/template', 'admin/laporan/detail_peminjaman', $data);
    }
}
