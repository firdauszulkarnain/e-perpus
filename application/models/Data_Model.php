<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Model extends CI_Model
{
    public function ambil_anggota()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function detail_anggota($id_anggota)
    {
        return $this->db->get_where('anggota', ['id_anggota' => $id_anggota])->row_array();
    }

    public function ambil_buku()
    {
        $this->db->join('kategori kt', 'kt.id_kategori = bk.kategori_id');
        return $this->db->get('buku bk')->result_array();
    }


    public function tambah_buku()
    {
        $data = [
            'kode_buku'  => htmlspecialchars(trim($this->input->post('kode_buku'))),
            'judul_buku' => htmlspecialchars(trim($this->input->post('judul_buku'))),
            'kategori_id' => $this->input->post('kategori'),
            'pengarang' => htmlspecialchars(trim($this->input->post('pengarang'))),
            'tahun_terbit' => htmlspecialchars(trim($this->input->post('tahun_terbit'))),
            'stock' => 0,
        ];

        $this->db->insert('buku', $data);
    }

    public function detail_buku($id_buku)
    {
        $this->db->join('kategori kt', 'kt.id_kategori = bk.kategori_id');
        return $this->db->get_where('buku bk', ['id_buku' => $id_buku])->row_array();
    }

    public function update_buku($id_buku)
    {
        $data = [
            'judul_buku' => htmlspecialchars(trim($this->input->post('judul_buku'))),
            'kategori_id' => $this->input->post('kategori'),
            'pengarang' => htmlspecialchars(trim($this->input->post('pengarang'))),
            'tahun_terbit' => htmlspecialchars(trim($this->input->post('tahun_terbit'))),
        ];

        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }

    public function hapus_buku($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('buku');
    }

    public function tambah_stock()
    {
        $id_buku = $this->input->post('id_buku');
        $add_stock = $this->input->post('stock');

        // Ambil Stock Saat ini
        $data_buku = $this->db->get_where('buku', ['id_buku' => $id_buku])->row_array();
        $stock_now = $data_buku['stock'];

        // Jumlahkan Stock Baru
        $jumlah_stock = $stock_now + $add_stock;
        $data = [
            'stock' => $jumlah_stock
        ];

        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }

    // -------------------Kategori Start------------------\\
    public function ambil_kategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function tambah_kategori()
    {
        $data = [
            'nama_kategori' => htmlspecialchars(trim(ucwords($this->input->post('nama_kategori')))),
        ];

        $this->db->insert('kategori', $data);
    }

    public function update_kategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $data = [
            'nama_kategori' => htmlspecialchars((ucwords($this->input->post('nama_kategori'))))
        ];

        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);
    }

    public function hapus_kategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }
    // -------------------Kategori END------------------\\

}
