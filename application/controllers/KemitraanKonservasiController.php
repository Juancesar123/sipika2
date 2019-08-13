<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KemitraanKonservasiController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/kemitraan-konservasi?nama_kawasan='.$id);
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
        $name = $_FILES['petapks']['name'];
        $result = $client->post(constant('API_URL').'/kemitraan-konservasi',[
            'multipart'=>[
                [
                    'name' => 'peta_pks',
                    'contents' => fopen($_FILES['petapks']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'peta_pks',
                    'contents' => 'kemitraankonservasi/'.$name
                ],
                [
                    'name' => 'luas_pks',
                    'contents' => $this->input->post('luaspks')
                ],
                [
                    'name' => 'no_pks',
                    'contents' => $this->input->post('nomorpks')
                ],
                [
                    'name' => 'nama_kelompok',
                    'contents' => $this->input->post('namakelompok')
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/kemitraan-konservasi/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/kemitraan-konservasi/'.$id);
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
        $status = $this->input->post('status');
        if($status == 'filenotfound'){
            $id = $this->input->post('idkemitraankonservasi');
            $result = $client->put(constant('API_URL').'/kemitraan-konservasi/'.$id,[
                'multipart'=>[
                   
                    [
                        'name' => 'peta_pks',
                        'contents' => $this->input->post('petapks')
                    ],
                    [
                        'name' => 'luas_pks',
                        'contents' => $this->input->post('luaspks')
                    ],
                    [
                        'name' => 'no_pks',
                        'contents' => $this->input->post('nomorpks')
                    ],
                    [
                        'name' => 'nama_kelompok',
                        'contents' => $this->input->post('namakelompok')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idkemitraankonservasi');
            $name = $_FILES['petapks']['name'];
            $result = $client->put(constant('API_URL').'/kemitraan-konservasi/'.$id,[
                'multipart'=>[
                    [
                    'name' => 'peta_pks',
                    'contents' => fopen($_FILES['petapks']['tmp_name'], 'r'),
                    'filename' => $name
                    ],
                    [
                        'name' => 'peta_pks',
                        'contents' => 'kemitraankonservasi/'.$name
                    ],
                    [
                        'name' => 'luas_pks',
                        'contents' => $this->input->post('luaspks')
                    ],
                    [
                        'name' => 'no_pks',
                        'contents' => $this->input->post('nomorpks')
                    ],
                    [
                        'name' => 'nama_kelompok',
                        'contents' => $this->input->post('namakelompok')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                ]
            ]);
        }
    }
}