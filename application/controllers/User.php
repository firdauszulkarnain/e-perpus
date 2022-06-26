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
}
