<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginPemilih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('login/indexpemilih');
            $this->load->view('template/footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pemilih', ['username' => $username])->row_array();


        if ($user) {
            if (!password_verify($password, $user['password'])) {

                $data = [
                    'id_pemilih' => $user['id_pemilih'],
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);

                redirect('pemilih');
            } else {
                $this->session->set_flashdata('message', '<small class="text-danger" >Password anda salah</small>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<small class="text-danger" >Username anda salah</small>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        redirect('login');
    }
}
