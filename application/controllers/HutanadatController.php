<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HutanadatController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function getData(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/hutan-adat');
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
        $name = $_FILES['dokumensk']['name'];
        $result = $client->post(constant('API_URL').'/hutan-adat',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'dokumensk/'.$name
                ],
                [
                    'name' => 'judul_sk',
                    'contents' => $this->input->post('judulsk')
                ],
                [
                    'name' => 'nomor_sk',
                    'contents' => $this->input->post('nomorsk')
                ],
                [
                    'name' => 'tanggal_sk',
                    'contents' => $this->input->post('tanggalsk')
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('nama_kawasan')
                ],
                [
                    'name' => 'luas',
                    'contents' => $this->input->post('luas')
                ],
                [
                    'name' => 'nama_adat',
                    'contents' => $this->input->post('nama_adat')
                ],
                [
                    'name' => 'provinsi',
                    'contents' => $this->input->post('provinsi')
                ],
                [
                    'name' => 'kabupaten',
                    'contents' => $this->input->post('kabupaten')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/hutan-adat/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/hutan-adat/'.$id);
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
            $id = $this->input->post('idhutanadat');
            $result = $client->put(constant('API_URL').'/hutan-adat/'.$id,[
                'multipart'=>[
                   
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk')
                    ],
                    [
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'nomor_sk',
                        'contents' => $this->input->post('nomorsk')
                    ],
                    [
                        'name' => 'tanggal_sk',
                        'contents' => $this->input->post('tanggalsk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('nama_kawasan')
                    ],
                    [
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'nama_adat',
                        'contents' => $this->input->post('nama_adat')
                    ],
                    [
                        'name' => 'provinsi',
                        'contents' => $this->input->post('provinsi')
                    ],
                    [
                        'name' => 'kabupaten',
                        'contents' => $this->input->post('kabupaten')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idhutanadat');
            $name = $_FILES['dokumensk']['name'];
            $result = $client->put(constant('API_URL').'/hutan-adat/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'dokumensk/'.$name
                    ],
                    [
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'nomor_sk',
                        'contents' => $this->input->post('nomorsk')
                    ],
                    [
                        'name' => 'tanggal_sk',
                        'contents' => $this->input->post('tanggalsk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('nama_kawasan')
                    ],
                    [
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'nama_adat',
                        'contents' => $this->input->post('nama_adat')
                    ],
                    [
                        'name' => 'provinsi',
                        'contents' => $this->input->post('provinsi')
                    ],
                    [
                        'name' => 'kabupaten',
                        'contents' => $this->input->post('kabupaten')
                    ],
                ]
            ]);
        }
    }
}