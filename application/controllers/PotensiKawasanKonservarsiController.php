<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PotensiKawasanKonservarsiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function get($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/potensi-kawasan-konservarsi/?nama_kawasan='.$id);
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
        $result = $client->post(constant('API_URL').'/potensi-kawasan-konservarsi',[
            'form_params' => [
                'jenis_potensi' => $this->input->post('jenis_potensi'),
                'deskripsi_potensi' => $this->input->post('deskripsi_potensi'),
                'nama_kawasan' => $this->input->post('nama_kawasan'),
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/potensi-kawasan-konservarsi/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/potensi-kawasan-konservarsi/'.$id);
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
        $id = $this->input->post('id_potensi');
        $result = $client->patch(constant('API_URL').'/potensi-kawasan-konservarsi/'.$id,[
            'form_params' => [
                'jenis_potensi' => $this->input->post('jenis_potensi'),
                'deskripsi_potensi' => $this->input->post('deskripsi_potensi'),
                'nama_kawasan' => $this->input->post('nama_kawasan'),
            ]
        ]);
    }
}
