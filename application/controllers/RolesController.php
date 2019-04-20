<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RolesController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function index(){
        return $this->load->view('pages/roles');
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/roles');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function store(){
        $client     = new GuzzleHttp\Client();
        $result = $client->post(constant('API_URL').'/roles',[
            'form_params' => [
                'roles' => $this->input->post('roles')
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/roles/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/roles/'.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function update(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('id');
        $result = $client->patch(constant('API_URL').'/roles/'.$id,[
            'form_params' => [
                'roles' => $this->input->post('roles')
            ]
        ]);
    }
}
