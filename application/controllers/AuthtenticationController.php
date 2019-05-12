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
        $client     = new GuzzleHttp\Client();
        $result = $client->post(constant('API_URL').'/authentication', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'email' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'strategy' => 'local'
            ]
        ]);
        $hasil = $result->getBody()->getContents();
        $result = json_decode($hasil,TRUE);
        $this->session->set_userdata('token', $result['accessToken']);
        $userdata = $this->session->userdata('token');
        $result1 = $client->get(constant('API_URL').'/users',[
            'headers' => [
                'Authorization' => $userdata
            ]
        ]);
        $hasil1 = $result1->getBody()->getContents();
        $convert = json_decode($hasil1,TRUE);
        $this->session->set_userdata('userdata', $convert[0]);
        redirect('/');
    }
    public function logout(){
        $this->session->unset_userdata('userdata');
        $this->session->unset_userdata('token');
        redirect('/login');
    }
}