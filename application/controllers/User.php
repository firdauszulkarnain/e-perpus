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
        $data['buku'] = $this->Data_Model->ambil_buku();
        $this->template->load('template/user_template', 'user/buku', $data);
    }
}
