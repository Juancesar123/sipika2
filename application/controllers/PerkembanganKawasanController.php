<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerkembanganKawasanController extends CI_Controller {
    public function index(){
        return $this->load->view('pages/perkembangankawasan');
    }
    public function store(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/perkembangan-kawasan', [
            'form_params' => [
                'nama_kawasan' => $this->input->post('namakawasan'),
                'luas_kawasan' => $this->input->post('luaskawasan'),
                'register' => $this->input->post('register'),
                'fungsi' => $this->input->post('fungsi'),
                'pulau' => $this->input->post('pulau'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('provinsitemp')
            ]
            ]);
      return 'sukses';
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembangan-kawasan');
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
}