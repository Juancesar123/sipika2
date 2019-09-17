<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FotoKawasanKonservasiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function getData($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/foto-kawasan?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function getdatadefaultimages($id){
         $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/foto-kawasan?nama_kawasan='.$id.'&default_images=yes');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/foto-kawasan/'.$id);
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
        $name = $_FILES['fotokawasan']['name'];
        $result = $client->post(constant('API_URL').'/foto-kawasan',[
            'multipart'=>[
                [
                    'name' => 'foto',
                    'contents' => fopen($_FILES['fotokawasan']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'foto',
                    'contents' => 'fotokawasan/'.$name
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
                [
                    'name' => 'default_images',
                    'contents' => $this->input->post('defaultimages')
                ],
            ]
        ]);
    }
    public function update(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idfotokawasankonservasi');
        $name = $_FILES['fotokawasan']['name'];
        $result = $client->put(constant('API_URL').'/foto-kawasan/'.$id,[
            'multipart'=>[
                [
                    'name' => 'foto',
                    'contents' => fopen($_FILES['fotokawasan']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'foto',
                    'contents' => 'fotokawasan/'.$name
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
                [
                    'name' => 'default_images',
                    'contents' => $this->input->post('defaultimages')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/foto-kawasan/'.$id);
    }
}