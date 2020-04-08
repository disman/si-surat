<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Surat keluar";
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar');
        $this->load->view('surat-keluar/index', $data);
        $this->load->view('_partials/footer');
    }
}
