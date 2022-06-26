<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function dashboard()
    {
        $data['user'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Dashboard';
        $this->template->load('template/user_template', 'user/dashboard', $data);
    }

    public function buku()
    {
        $data['user'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Data Buku Taman Baca Edelweis';
        $data['buku'] = $this->Data_Model->ambil_buku_anggota();
        $this->template->load('template/user_template', 'user/buku', $data);
    }

    public function detail_buku($kode_buku)
    {
        $data['user'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Detail Buku Taman Baca Edelweis';
        $data['buku'] = $this->Data_Model->ambil_detail_buku($kode_buku);
        $this->template->load('template/user_template', 'user/detail_buku', $data);
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('user')])->row_array();
        $data['title'] = 'Profil Anggota';
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules(
            'notelp',
            'No Telephone',
            'required|trim|min_length[11]|numeric',
            [
                'required' => 'No Telephone Tidak Boleh Kosong',
                'min_length' => 'No Telephone Salah',
                'numeric' => 'No Telephone Salah'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->template->load('template/user_template', 'user/profile', $data);
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'notelp' => $this->input->post('anggota')
            ];

            $id_anggota = $this->input->post('id_anggota');

            $this->db->where('id_anggota', $id_anggota);
            $this->db->update('anggota');


            $$this->session->set_flashdata('pesan', 'Berhasil Register Akun');
            redirect('auth/login');
        }
    }
}
