<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_masuk_m');
    }
    public function index()
    {
        $surat_masuk = $this->surat_masuk_m;
        $data['surat_masuk'] = $surat_masuk->getAll();

        $data['title'] = "Surat masuk";
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar');
        $this->load->view('surat-masuk/index', $data);
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $surat_masuk = $this->surat_masuk_m;
        $rules = $surat_masuk->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->index();
        } else {
            $surat_masuk->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data surat masuk berhasil ditambahkan</div>');
            redirect('surat_masuk');
        }
    }

    public function edit($id = null)
    {
        $surat_masuk = $this->surat_masuk_m;
        $rules = $surat_masuk->editRules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Update data surat masuk";
            $data['surat_masuk'] = $surat_masuk->getById($id);

            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar');
            $this->load->view('surat-masuk/edit', $data);
            $this->load->view('_partials/footer');
        } else {
            $surat_masuk->update();
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert>Data surat masuk berhasil diupdate</div>');
            redirect('surat_masuk');
        }
    }

    public function hapus($id = null)
    {
        $surat_masuk = $this->surat_masuk_m;
        if (!isset($id)) {
            show_404();
        }

        $hapus = $surat_masuk->delete($id);
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data surat masuk berhasil dihapus</div>');
            redirect('surat_masuk');
        }
    }
}
