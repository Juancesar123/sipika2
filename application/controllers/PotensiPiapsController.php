<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PotensiPIAPSController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function index(){
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/potensipiaps',$data);
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/potensi-piaps');
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
        $petashp = $_FILES['petashp']['name'];
        $petajpeg = $_FILES['petajpeg']['name'];
        $result = $client->post(constant('API_URL').'/potensi-piaps',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'dokumenpotensipiaps/'.$name
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
                    'filename' => $petashp
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => 'dokumenpotensipiaps/'.$petashp
                ],
                [
                    'name' => 'peta_jpeg',
                    'contents' => fopen($_FILES['petajpeg']['tmp_name'], 'r'),
                    'filename' => $petajpeg
                ],
                [
                    'name' => 'peta_jpeg',
                    'contents' => 'dokumenpotensipiaps/'.$petajpeg
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
                    'name' => 'judul_sk',
                    'contents' => $this->input->post('judulsk')
                ],
                [
                    'name' => 'luas_zona',
                    'contents' => $this->input->post('luaszona')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/potensi-piaps/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/potensi-piaps/'.$id);
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

            $id = $this->input->post('idpotensipiaps');
            $result = $client->put(constant('API_URL').'/potensi-piaps/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk')
                    ],
                    [
                        'name' => 'peta_shp',
                        'contents' => $this->input->post('petashp')
                    ],
                    [
                        'name' => 'peta_jpeg',
                        'contents' => $this->input->post('petajpeg')
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
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'luas_zona',
                        'contents' => $this->input->post('luaszona')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idpotensipiaps');
            $name = $_FILES['dokumensk']['name'];
            $petashp = $_FILES['petashp']['name'];
            $petajpeg = $_FILES['petajpeg']['name'];
            $result = $client->put(constant('API_URL').'/potensi-piaps/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'dokumenpotensipiaps/'.$name
                    ],
                    [
                        'name' => 'peta_shp',
                        'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
                        'filename' => $petashp
                    ],
                    [
                        'name' => 'peta_shp',
                        'contents' => 'dokumenpotensipiaps/'.$petashp
                    ],
                    [
                        'name' => 'peta_jpeg',
                        'contents' => fopen($_FILES['petajpeg']['tmp_name'], 'r'),
                        'filename' => $petajpeg
                    ],
                    [
                        'name' => 'peta_jpeg',
                        'contents' => 'dokumenpotensipiaps/'.$petajpeg
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
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'luas_zona',
                        'contents' => $this->input->post('luaszona')
                    ],
                ]
            ]);
        }
    }
}
