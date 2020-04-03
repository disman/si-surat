<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Admin dashboard";
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('_partials/footer');
    }
}
