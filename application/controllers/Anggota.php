<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Anggota';
        $data['anggota'] = $this->Data_Model->ambil_anggota();
        $this->template->load('template/template', 'admin/anggota/index', $data);
    }
}
