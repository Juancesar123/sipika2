<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengukuhanKawasanController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/pengukuhan-kawasan');
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
        $result = $client->get(constant('API_URL').'/pengukuhan-kawasan/'.$id);
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
            $id = $this->input->post('idpengukuhankawasan');
            $result = $client->put(constant('API_URL').'/pengukuhan-kawasan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk'),
                    ],
                    [
                        'name' => 'file_shp',
                        'contents' => $this->input->post('file_shp'),
                    ],
                    [
                        'name' => 'perkembangan_tata_batas',
                        'contents' => $this->input->post('perkembangan_tata_batas'),
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('nama_kawasan')
                    ],
                    [
                        'name' => 'usulan_penyelesaian',
                        'contents' => $this->input->post('usulan_penyelesaian')
                    ],
                    [
                        'name' => 'permasalahan',
                        'contents' => $this->input->post('permasalahan')
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
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'jenis_sk',
                        'contents' => $this->input->post('jenissk')
                    ],
                    [
                        'name' => 'upt',
                        'contents' => $this->input->post('upt')
                    ],
                    [
                        'name' => 'register',
                        'contents' => $this->input->post('register')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idpengukuhankawasan');
            $name = $_FILES['dokumensk']['name'];
            $nameshp = $_FILES['file_shp']['name'];
            $nameperkembangantatabatas = $_FILES['perkembangan_tata_batas']['name'];
            $result = $client->put(constant('API_URL').'/pengukuhan-kawasan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'fileshp/'.$name
                    ],
                    [
                        'name' => 'file_shp',
                        'contents' => fopen($_FILES['file_shp']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'file_shp',
                        'contents' => 'fileshp/'.$nameshp
                    ],
                    [
                        'name' => 'perkembangan_tata_batas',
                        'contents' => fopen($_FILES['perkembangan_tata_batas']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'perkembangan_tata_batas',
                        'contents' => 'fileshp/'.$nameperkembangantatabatas
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('nama_kawasan')
                    ],
                    [
                        'name' => 'usulan_penyelesaian',
                        'contents' => $this->input->post('usulan_penyelesaian')
                    ],
                    [
                        'name' => 'permasalahan',
                        'contents' => $this->input->post('permasalahan')
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
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'jenis_sk',
                        'contents' => $this->input->post('jenissk')
                    ],
                    [
                        'name' => 'upt',
                        'contents' => $this->input->post('upt')
                    ],
                    [
                        'name' => 'register',
                        'contents' => $this->input->post('register')
                    ],
                ]
            ]);
        }
    }
    public function store(){
        $client     = new GuzzleHttp\Client();
        $name = $_FILES['dokumensk']['name'];
        $nameshp = $_FILES['file_shp']['name'];
        $nameperkembangantatabatas = $_FILES['perkembangan_tata_batas']['name'];
        $result = $client->post(constant('API_URL').'/pengukuhan-kawasan',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'fileshp/'.$name
                ],
                [
                    'name' => 'file_shp',
                    'contents' => fopen($_FILES['file_shp']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'file_shp',
                    'contents' => 'fileshp/'.$nameshp
                ],
                [
                    'name' => 'perkembangan_tata_batas',
                    'contents' => fopen($_FILES['perkembangan_tata_batas']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'perkembangan_tata_batas',
                    'contents' => 'fileshp/'.$nameperkembangantatabatas
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('nama_kawasan')
                ],
                [
                    'name' => 'usulan_penyelesaian',
                    'contents' => $this->input->post('usulan_penyelesaian')
                ],
                [
                    'name' => 'permasalahan',
                    'contents' => $this->input->post('permasalahan')
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
                    'name' => 'luas',
                    'contents' => $this->input->post('luas')
                ],
                [
                    'name' => 'jenis_sk',
                    'contents' => $this->input->post('jenissk')
                ],
                [
                    'name' => 'upt',
                    'contents' => $this->input->post('upt')
                ],
                [
                    'name' => 'register',
                    'contents' => $this->input->post('register')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/pengukuhan-kawasan/'.$id);
    }
}