<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->template->load('template/template', 'admin/dashboard', $data);
    }
}
