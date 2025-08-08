<?php

defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper(['url', 'form']);
    }

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user_by_email($email);

            if ($user && password_verify($password, $user->password)) {
                // Login success – store session
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('user_name', $user->name);
                $this->session->set_flashdata('success', 'Login successful');
                redirect('products');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }



    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            $inserted = $this->User_model->insert_user($data);

            if ($inserted) {
                $this->session->set_flashdata('success', 'Registration successful');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Database insert failed');
                redirect('auth/register');
            }
        }

        $this->load->view('auth/register');
    }

    public function dashboard()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->load->view('auth/dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
