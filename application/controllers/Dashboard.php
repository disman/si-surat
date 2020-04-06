<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_masuk_m');
    }

    public function index()
    {
        $surat_masuk = $this->surat_masuk_m;
        $data['count_all'] = $surat_masuk->countAll();
        $data['title'] = "Admin dashboard";
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('_partials/footer');
    }
}
