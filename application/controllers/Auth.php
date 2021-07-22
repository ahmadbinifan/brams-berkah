<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User', 'user');
    }
    public function index()
    {
        if ($this->session->userdata('id_user')) {
            redirect('home');
        }
        $data['title'] = "Login Page - Brams Berkah";
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template-user/auth_header', $data);
            $this->load->view('auth/index');
            $this->load->view('template-user/auth_footer');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $user = $this->user->account($username, $password);
        if ($user) {
            $data = [
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'password' => $user['password'],
                'balance' => $user['balance'],
                'jawaban' => $user['jawaban'],
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'nama_bank' => $user['nama_bank'],
                'nama_pemilik_bank' => $user['nama_pemilik_bank'],
                'no_rek' => $user['no_rek'],
                'pertanyaan' => $user['pertanyaan'],
            ];

            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $message = "Wrong Password/Username";
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location.href = window.location.href;</script>";
        }
    }
    public function logout()
    {
        $data = [
            'id_user',
            'username',
            'password',
            'balance',
            'jawaban',
            'fullname',
            'email',
            'nama_bank',
            'nama_pemilik_bank',
            'no_rek',
            'pertanyaan'
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('auth');
    }
}
