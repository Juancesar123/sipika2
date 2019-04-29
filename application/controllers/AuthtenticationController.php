<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthtenticationController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function login(){
        return $this->load->view('pages/login');
    }
    public function register(){
        return $this->load->view('pages/register');
    }
    public function processlogin(){
        $user_array = array(
            'name' => 'Juan Ceasar Andrianto'
        );
        $this->session->set_userdata('userdata', $user_array);
        redirect('/');
    }
    public function logout(){
        $this->session->unset_userdata('userdata');
        redirect('/login');
    }
}