<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenutupanLahanController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/penutupan-lahan-perkawasan?nama_kawasan='.$id);
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
        $nameshp = $_FILES['fileshp']['name'];
        $namejpeg = $_FILES['filejpeg']['name'];
        $nametable = $_FILES['filetable']['name'];
        $result = $client->post(constant('API_URL').'/penutupan-lahan-perkawasan',[
            'multipart'=>[
                [
                    'name' => 'file_shp',
                    'contents' => fopen($_FILES['file_shp']['tmp_name'], 'r'),
                    'filename' => $nameshp
                ],
                [
                    'name' => 'file_shp',
                    'contents' => 'penutupanlahanperkawasan/'.$nameshp
                ],
                [
                    'name' => 'file_jpeg',
                    'contents' => fopen($_FILES['filejpeg']['tmp_name'], 'r'),
                    'filename' => $namejpeg
                ],
                [
                    'name' => 'file_jpeg',
                    'contents' => 'penutupanlahanperkawasan/'.$namejpeg
                ],
                [
                    'name' => 'file_table',
                    'contents' => fopen($_FILES['filetable']['tmp_name'], 'r'),
                    'filename' => $nametable
                ],
                [
                    'name' => 'file_table',
                    'contents' => 'penutupanlahanperkawasan/'.$nametable
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
        $result = $client->delete(constant('API_URL').'/penutupan-lahan-perkawasan/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/penutupan-lahan-perkawasan/'.$id);
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
            $id = $this->input->post('idpenutupankawasan');
            $result = $client->put(constant('API_URL').'/penutupan-lahan-perkawasan/'.$id,[
                'multipart'=>[
                   
                    [
                        'name' => 'file_shp',
                        'contents' => $this->input->post('fileshp')
                    ],
                    [
                        'name' => 'file_jpeg',
                        'contents' => $this->input->post('filejpeg')
                    ],
                    [
                        'name' => 'file_table',
                        'contents' => $this->input->post('filetable')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idpenutupankawasan');
            $nameshp = $_FILES['fileshp']['name'];
            $namejpeg = $_FILES['filejpeg']['name'];
            $nametable = $_FILES['filetable']['name'];
            $result = $client->put(constant('API_URL').'/penutupan-lahan-perkawasan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'file_shp',
                        'contents' => fopen($_FILES['fileshp']['tmp_name'], 'r'),
                        'filename' => $nameshp
                    ],
                    [
                        'name' => 'file_shp',
                        'contents' => 'penutupanlahanperkawasan/'.$nameshp
                    ],
                    [
                        'name' => 'file_jpeg',
                        'contents' => fopen($_FILES['filejpeg']['tmp_name'], 'r'),
                        'filename' => $namejpeg
                    ],
                    [
                        'name' => 'file_jpeg',
                        'contents' => 'penutupanlahanperkawasan/'.$namejpeg
                    ],
                    [
                        'name' => 'file_table',
                        'contents' => fopen($_FILES['filetable']['tmp_name'], 'r'),
                        'filename' => $nametable
                    ],
                    [
                        'name' => 'file_table',
                        'contents' => 'penutupanlahanperkawasan/'.$nametable
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