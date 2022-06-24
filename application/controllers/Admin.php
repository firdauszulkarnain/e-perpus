<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        redirect('admin/dashboard');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $this->template->load('template/template', 'admin/dashboard', $data);
    }
}
