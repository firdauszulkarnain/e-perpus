<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    // Cek Session Login Admin
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
        $data['title'] = 'Data Anggota';
        $data['anggota'] = $this->Data_Model->ambil_anggota();
        $this->template->load('template/template', 'admin/anggota/index', $data);
    }

    public function cari_anggota()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $id_anggota = $this->input->post('id_anggota');
        $anggota = $this->Data_Model->detail_anggota($id_anggota);
        $response = array(
            'email' => $anggota['email'],
            'notelp' => $anggota['notelp'],
        );
        echo json_encode($response);
    }

    public function detail($kode_anggota)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('admin')])->row_array();
        $data['title'] = 'Data Detail Anggota';
        $data['anggota'] = $this->db->get_where('anggota', ['kode_anggota' => $kode_anggota])->row_array();
        $this->template->load('template/template', 'admin/anggota/detail_anggota', $data);
    }
}
