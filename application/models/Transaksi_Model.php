<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{
    public function proses_peminjaman()
    {
        $data = [

            'buku_id' => $this->input->post('buku'),
            'anggota_id' => $this->input->post('anggota'),
            'tanggal_pinjam' => $this->input->post('tgl_pinjam'),
            'tanggal_kembali' => $this->input->post('tgl_kembali'),
            'total' => $this->input->post('total')
        ];

        $this->db->insert('peminjaman', $data);
    }

    public function ambil_peminjaman()
    {
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        return $this->db->get('peminjaman pm')->result_array();
    }

    public function detail_peminjaman($nomor_transaksi)
    {
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        $this->db->join('kategori kt', 'kt.id_kategori = bk.kategori_id');
        return $this->db->get_where('peminjaman pm', ['nomor_transaksi' => $nomor_transaksi])->row_array();
    }
}
