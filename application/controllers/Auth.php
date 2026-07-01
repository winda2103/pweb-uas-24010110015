<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        if($this->input->post())
        {
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));

            $user = $this->db->get_where('users', [
                'email' => $email,
                'password' => $password
            ])->row();

            if($user)
            {
                $this->session->set_userdata('user', $user);
                redirect('dashboard');
            }
            else
            {
                $data['error'] = 'Email atau Password salah';
                $this->load->view('auth/login', $data);
            }
        }
        else
        {
            $this->load->view('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}