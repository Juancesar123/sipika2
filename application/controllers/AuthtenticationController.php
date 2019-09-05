<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthtenticationController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function login(){
        //var_dump($this->session->userdata());
        return $this->load->view('pages/login');
    }
    public function register(){
        return $this->load->view('pages/register');
    }
    public function processlogin(){
        $client     = new GuzzleHttp\Client();
      
        try {
           // $response = $request->send();
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
            $result1 = $client->get(constant('API_URL').'/users?email='.$this->input->post('username'),[
                'headers' => [
                    'Authorization' => $userdata
                ]
            ]);
            $hasil1 = $result1->getBody()->getContents();
            $convert = json_decode($hasil1,TRUE);
            $this->session->set_userdata('userdata', $convert[0]);
            redirect('/dashboard');
            //var_dump($convert);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            // $responseBody = $exception->getResponse()->getBody(true);
            //echo "<script>alert('This card was not approved, Thanks.');</script>";
            $this->session->set_flashdata('SUCCESS', "password atau email salah");
            redirect('/login');
        }
    }
    public function logout(){
        // $this->session->sess_destroy();
        // $this->session->unset_userdata('userdata');
        // $this->session->unset_userdata('token');
        unset($_SESSION['userdata']);
        unset($_SESSION['token']);
        //var_dump($this->session->userdata());
        redirect('/login');
    }
}