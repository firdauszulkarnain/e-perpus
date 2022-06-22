<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Model extends CI_Model
{
    public function ambil_anggota()
    {
        return $this->db->get('anggota')->result_array();
    }


    public function ambil_buku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function tambah_buku()
    {
        $data = [
            'nama_buku' => htmlspecialchars(trim($this->input->post('nama_buku'))),
            'kategori_id' => $this->input->post('kategori'),
            'pengarang' => htmlspecialchars(trim($this->input->post('pengarang'))),
            'tahun_terbit' => htmlspecialchars(trim($this->input->post('tahun_terbit'))),
            'stock' => 0,
        ];

        $this->db->insert('produk', $data);
    }

    public function update_buku($id_buku)
    {
        $data = [
            'nama_buku' => htmlspecialchars(trim($this->input->post('nama_buku'))),
            'kategori_id' => $this->input->post('kategori'),
            'pengarang' => htmlspecialchars(trim($this->input->post('pengarang'))),
            'tahun_terbit' => htmlspecialchars(trim($this->input->post('tahun_terbit'))),
        ];

        $this->db->where('id_buku', $id_buku);
        $this->db->update('produk', $data);
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
            'foto_kategori' => 'default.png'
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
