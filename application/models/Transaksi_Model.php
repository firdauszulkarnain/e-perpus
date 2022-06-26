<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{
    public function nomor_transaksi()
    {
        $query = "SELECT MAX(MID(nomor_transaksi,9,4)) AS nomor FROM peminjaman WHERE MID(nomor_transaksi,3,6) = DATE_FORMAT(CURDATE(),'%y%m%d')";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            $tmp = ((int)$row->nomor) + 1;
            $no = sprintf("%'.04d", $tmp);
        } else {
            $no = "0001";
        }

        $nomorPesanan = "NP" . date('ymd') . $no;
        return $nomorPesanan;
    }

    public function proses_peminjaman()
    {
        $id_buku = $this->input->post('buku');
        $buku = $this->db->get_where('buku', ['id_buku' => $id_buku])->row_array();
        $stockBuku = (int)$buku['stock'];
        $stock = [
            'stock' => $stockBuku - 1,
        ];

        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $stock);


        $data = [
            'nomor_transaksi' => $this->nomor_transaksi(),
            'buku_id' => $this->input->post('buku'),
            'anggota_id' => $this->input->post('anggota'),
            'tanggal_pinjam' => $this->input->post('tgl_pinjam'),
            'tanggal_kembali' => $this->input->post('tgl_kembali'),
            'total' => $this->input->post('total'),
            'status' => 'pinjam',
        ];

        $this->db->insert('peminjaman', $data);
    }

    public function proses_pengembalian()
    {
        $pinjam = $this->db->get_where('peminjaman', ['nomor_transaksi' => $this->input->post('nomor_transaksi')])->row_array();
        $id_peminjaman = $pinjam['id_peminjaman'];
        $id_buku = $pinjam['buku_id'];

        $buku = $this->db->get_where('buku', ['id_buku' => $id_buku])->row_array();
        $stockBuku = (int)$buku['stock'];
        $stock = [
            'stock' => $stockBuku + 1,
        ];

        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $stock);

        $status = [
            'status' => 'kembali'
        ];

        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('peminjaman', $status);

        $data = [
            'id_peminjaman' => $id_peminjaman,
            'subtotal' => $this->input->post('total'),
            'denda' => $this->input->post('denda'),
            'total_bayar' => htmlspecialchars(trim(str_replace(".", "", $this->input->post('total_bayar')))),
            'tgl_kembali' => htmlspecialchars(trim(str_replace(".", "", $this->input->post('tanggal_kembali')))),
        ];

        $this->db->insert('pengembalian', $data);
    }

    public function ambil_peminjaman()
    {
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        $this->db->where('pm.status', 'pinjam');
        return $this->db->get('peminjaman pm')->result_array();
    }

    public function ambil_pengembalian()
    {
        $this->db->join('peminjaman pm', 'pm.id_peminjaman = pg.id_peminjaman');
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        return $this->db->get('pengembalian pg')->result_array();
    }

    public function detail_peminjaman($nomor_transaksi)
    {
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        $this->db->join('kategori kt', 'kt.id_kategori = bk.kategori_id');
        return $this->db->get_where('peminjaman pm', ['nomor_transaksi' => $nomor_transaksi])->row_array();
    }

    public function detail_pengembalian($nomor_transaksi)
    {
        $this->db->join('peminjaman pm', 'pm.id_peminjaman = pg.id_peminjaman');
        $this->db->join('buku bk', 'bk.id_buku = pm.buku_id');
        $this->db->join('anggota ag', 'ag.id_anggota = pm.anggota_id');
        $this->db->join('kategori kt', 'kt.id_kategori = bk.kategori_id');
        return $this->db->get_where('pengembalian pg', ['nomor_transaksi' => $nomor_transaksi])->row_array();
    }
}
