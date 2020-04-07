<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m', 'auth', true);
    }

    public function index()
    {
        $data['title'] = "Please login";
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('_partials/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {

            // cek passwordnya
            if (password_verify($password, $user['password'])) {
                $data = [
                    'full_name'  => $user['full_name'],
                    'email' => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            // jika usernya tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    // public function registration()
    // {
    //     $data['title'] = "Registration";
    //     $rules = $this->auth->rules();
    //     $validation = $this->form_validation->set_rules($rules);

    //     if ($validation->run() == false) {
    //         $this->load->view('_partials/auth_header', $data);
    //         $this->load->view('auth/register', $data);
    //         $this->load->view('_partials/auth_footer');
    //     } else {
    //         $this->auth->registration();
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please login</div>');
    //         redirect('auth');
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

















    public function edit($id = null)
    {
        $rules = $this->menu->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Management menu";
            $data['menu'] = $this->menu->getAll();
            $data['editMenu'] = $this->menu->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/menu/edit');
            $this->load->view('_partials/footer');
        } else {
            $this->menu->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diupdate!</div>');
            redirect('admin/menu');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->menu->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus!</div>');
            redirect('admin/menu');
        }
    }
}
