<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetaKawasanKonsevarsiController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/peta-kawasan-konsevarsi?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
     public function getimages($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/peta-kawasan-konsevarsi?nama_kawasan='.$id);
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
        //print_r($_FILES['fotokawasan']['tmp_name']);
         $datafoto = [];
         //$datanama = array();
        $petaatlaskawasankonsevarsi = $_FILES['petaatlaskawasankonsevarsi']['name'];
        $petabataskonsevarsi = $_FILES['petabataskonsevarsi']['name'];
        $petashpkawasan = $_FILES['petashpkawasan']['name'];
        $datafoto[] = [
            'name' => 'nama_kawasan',
            'contents' => $this->input->post('nama_kawasan')

        ];
         $datafoto[] = [
            'name' => 'peta_atlas_potensi_kawasan_konsevarsi',
            'contents' => fopen($_FILES['petaatlaskawasankonsevarsi']['tmp_name'], 'r'),
            'filename' => $petaatlaskawasankonsevarsi
         ];
         $datafoto[] = [
            'name' => 'peta_atlas_potensi_kawasan_konsevarsi',
            'contents' => 'petakawasankonsevarsi/'.$petaatlaskawasankonsevarsi
         ];
         $datafoto[] = [
            'name' => 'peta_shp',
            'contents' => fopen($_FILES['petashpkawasan']['tmp_name'], 'r'),
            'filename' => $petashpkawasan
         ];
         $datafoto[] = [
            'name' => 'peta_shp',
            'contents' => 'petakawasankonsevarsi/'.$petashpkawasan
         ];
         $datafoto[] = [
            'name' => 'peta_batas_kawasan_konsevarsi',
            'contents' => fopen($_FILES['petabataskonsevarsi']['tmp_name'], 'r'),
            'filename' => $petabataskonsevarsi
         ];
         $datafoto[] = [
            'name' => 'peta_batas_kawasan_konsevarsi',
            'contents' => 'petakawasankonsevarsi/'.$petabataskonsevarsi
         ];
        $result = $client->post(constant('API_URL').'/peta-kawasan-konsevarsi',[
            'multipart'=> $datafoto
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/peta-kawasan-konsevarsi/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/peta-kawasan-konsevarsi/'.$id);
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
            $id = $this->input->post('idpetakawasankonsevarsi');
            $result = $client->put(constant('API_URL').'/peta-kawasan-konsevarsi/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'peta_atlas_potensi_kawasan_konsevarsi',
                        'contents' => $this->input->post('petaatlaskawasankonsevarsi')
                    ],
                     [
                        'name' => 'peta_shp',
                        'contents' => $this->input->post('petashpkawasan')
                    ],
                     [
                        'name' => 'peta_batas_kawasan_konsevarsi',
                        'contents' => $this->input->post('petabataskonsevarsi')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('nama_kawasan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idpetakawasankonsevarsi');
            $petaatlaskawasankonsevarsi = $_FILES['petaatlaskawasankonsevarsi']['name'];
            $petabataskonsevarsi = $_FILES['petabataskonsevarsi']['name'];
            $petashpkawasan = $_FILES['petashpkawasan']['name'];
            $datafoto[] = [
                'name' => 'nama_kawasan',
                'contents' => $this->input->post('nama_kawasan')

            ];
             $datafoto[] = [
                'name' => 'peta_atlas_potensi_kawasan_konsevarsi',
                'contents' => fopen($_FILES['petaatlaskawasankonsevarsi']['tmp_name'], 'r'),
                'filename' => $petaatlaskawasankonsevarsi
             ];
             $datafoto[] = [
                'name' => 'peta_atlas_potensi_kawasan_konsevarsi',
                'contents' => 'petakawasankonsevarsi/'.$petaatlaskawasankonsevarsi
             ];
             $datafoto[] = [
                'name' => 'peta_shp',
                'contents' => fopen($_FILES['petashpkawasan']['tmp_name'], 'r'),
                'filename' => $petashpkawasan
             ];
             $datafoto[] = [
                'name' => 'peta_shp',
                'contents' => 'petakawasankonsevarsi/'.$petashpkawasan
             ];
             $datafoto[] = [
                'name' => 'peta_batas_kawasan_konsevarsi',
                'contents' => fopen($_FILES['petabataskonsevarsi']['tmp_name'], 'r'),
                'filename' => $petabataskonsevarsi
             ];
             $datafoto[] = [
                'name' => 'peta_batas_kawasan_konsevarsi',
                'contents' => 'petakawasankonsevarsi/'.$petabataskonsevarsi
             ];
            $result = $client->put(constant('API_URL').'/peta-kawasan-konsevarsi/'.$id,[
                'multipart'=> $datafoto
            ]);
        }
    }
}
