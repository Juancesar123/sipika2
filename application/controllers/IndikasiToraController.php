<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndikasiToraController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/indikasi-tora?nama_kawasan='.$id);
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
        $namepeta = $_FILES['peta']['name'];
        $result = $client->post(constant('API_URL').'/indikasi-tora',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'dokumenpenting/'.$name
                ],
                [
                    'name' => 'peta',
                    'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'peta',
                    'contents' => 'dokumenpenting/'.$namepeta
                ],
                [
                    'name' => 'judul_sk',
                    'contents' => $this->input->post('judulsk')
                ],
                [
                    'name' => 'nomor_Sk',
                    'contents' => $this->input->post('nomorsk')
                ],
                [
                    'name' => 'tanggal_sk',
                    'contents' => $this->input->post('tanggalsk')
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
                [
                    'name' => 'luas',
                    'contents' => $this->input->post('luas')
                ],
                [
                    'name' => 'luas_kawasan',
                    'contents' => $this->input->post('luas_kawasan')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/indikasi-tora/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/indikasi-tora/'.$id);
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
            $id = $this->input->post('idindikasitora');
            $result = $client->put(constant('API_URL').'/indikasi-tora/'.$id,[
                'multipart'=>[
                   
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk')
                    ],
                    [
                        'name' => 'peta',
                        'contents' => $this->input->post('peta')
                    ],
                    [
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'nomor_Sk',
                        'contents' => $this->input->post('nomorsk')
                    ],
                    [
                        'name' => 'tanggal_sk',
                        'contents' => $this->input->post('tanggalsk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                    [
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'luas_kawasan',
                        'contents' => $this->input->post('luas_kawasan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idindikasitora');
            $name = $_FILES['dokumensk']['name'];
            $namepeta = $_FILES['peta']['name'];
            $result = $client->put(constant('API_URL').'/indikasi-tora/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokmen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'dokumenpenting/'.$name
                    ],
                    [
                        'name' => 'peta',
                        'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'peta',
                        'contents' => 'dokumenpenting/'.$namepeta
                    ],
                    [
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'nomor_Sk',
                        'contents' => $this->input->post('nomorsk')
                    ],
                    [
                        'name' => 'tanggal_sk',
                        'contents' => $this->input->post('tanggalsk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                    [
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'luas_kawasan',
                        'contents' => $this->input->post('luas_kawasan')
                    ],
                ]
            ]);
        }
    }
}