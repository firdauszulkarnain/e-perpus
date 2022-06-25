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

        // FORM VALIDATION
        $this->form_validation->set_rules('buku', 'Buku', 'required|trim', ['required' => 'Buku Tidak Boleh Kosong']);
        $this->form_validation->set_rules('anggota', 'Anggota', 'required|trim', ['required' => 'Anggota Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required|trim', ['required' => 'Tanggal Pinjam Tidak Boleh Kosong']);
        $this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali', 'required|trim', ['required' => 'Tanggal Kembali Tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->template->load('template/template', 'admin/transaksi/pinjam', $data);
        } else {
            $this->Transaksi_Model->proses_peminjaman();
            $this->session->set_flashdata('pesan', 'Berhasil Proses Peminjaman Buku');
            redirect('laporan/peminjaman');
        }
    }
}
