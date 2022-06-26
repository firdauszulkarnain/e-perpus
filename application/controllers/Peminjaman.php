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
        $this->db->where('stock !=', 0);
        $data['buku'] = $this->db->get('buku')->result_array();
        $data['nomor_transaksi'] = $this->Transaksi_Model->nomor_transaksi();

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

    public function cari_peminjaman()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $nomor_transaksi = $this->input->post('id_peminjaman');
        $peminjaman = $this->Transaksi_Model->detail_peminjaman($nomor_transaksi);
        $response = array(
            'kode_anggota' => $peminjaman['kode_anggota'],
            'username' => $peminjaman['username'],
            'nama_lengkap' => $peminjaman['nama_lengkap'],
            'email' => $peminjaman['email'],
            'notelp' => $peminjaman['notelp'],
            'kode_buku' => $peminjaman['kode_buku'],
            'judul_buku' => $peminjaman['judul_buku'],
            'pengarang' => $peminjaman['pengarang'],
            'kategori' => $peminjaman['nama_kategori'],
            'tahun_terbit' => $peminjaman['tahun_terbit'],
            'tgl_pinjam' => $peminjaman['tanggal_pinjam'],
            'tgl_kembali' => $peminjaman['tanggal_kembali'],
            'total' => $peminjaman['total'],
        );
        echo json_encode($response);
    }
}
