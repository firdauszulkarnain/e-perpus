<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{

    public function register()
    {
        $data = [
            "kode_anggota" => $this->kode_anggota(),
            "username" => htmlspecialchars(trim($this->input->post('username', true))),
            "nama_lengkap" => htmlspecialchars(trim($this->input->post('nama', true))),
            "email" => htmlspecialchars(trim($this->input->post('email', true))),
            "notelp" => htmlspecialchars(trim($this->input->post('notelp', true))),
            "alamat" => htmlspecialchars(trim($this->input->post('alamat', true))),
            "password" => htmlspecialchars(password_hash($this->input->post('password1', true), PASSWORD_DEFAULT)),
            "tanggal_daftar" => date('Y-m-d'),
        ];
        $this->db->insert('anggota', $data);
    }

    public function update_password($admin_id)
    {
        $data = [
            "password" => htmlspecialchars(password_hash($this->input->post('password1'), PASSWORD_DEFAULT))
        ];

        $this->db->where('id_admin', $admin_id);
        $this->db->update('admin', $data);
    }

    public function kode_anggota()
    {
        $query = "SELECT MAX(MID(kode_anggota,9,4)) AS nomor FROM anggota WHERE MID(kode_anggota,3,6) = DATE_FORMAT(CURDATE(),'%y%m%d')";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            $tmp = ((int)$row->nomor) + 1;
            $no = sprintf("%'.04d", $tmp);
        } else {
            $no = "0001";
        }

        $nomorPesanan = "AP" . date('ymd') . $no;
        return $nomorPesanan;
    }
}
