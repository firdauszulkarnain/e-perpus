<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{

    public function register()
    {
        $data = [
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
}
