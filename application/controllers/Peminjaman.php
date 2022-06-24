<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Transaksi Peminjaman Buku';
        $data['anggota'] = $this->db->get('anggota')->result_array();
        $data['buku'] = $this->db->get('buku')->result_array();
        $this->template->load('template/template', 'admin/transaksi/pinjam', $data);
    }
}
