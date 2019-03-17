<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsulantahuraController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function index(){
        return $this->load->view('pages/usulantahura');
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/usulan-tahura');
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
        $name = $_FILES['peta']['name'];
        $result = $client->post(constant('API_URL').'/usulan-tahura',[
            'multipart'=>[
                [
                    'name' => 'peta',
                    'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'peta',
                    'contents' => 'petatahura/'.$name
                ],
                [
                    'name' => 'provinsi',
                    'contents' => $this->input->post('provinsi')
                ],
                [
                    'name' => 'kabupaten_kota',
                    'contents' => $this->input->post('kabupaten_kota')
                ],
                [
                    'name' => 'pengusul',
                    'contents' => $this->input->post('pengusul')
                ],
                
                [
                    'name' => 'lokasi',
                    'contents' => $this->input->post('lokasi')
                ],
                [
                    'name' => 'luas',
                    'contents' => $this->input->post('luas')
                ],
                [
                    'name' => 'fungsi_hutan',
                    'contents' => $this->input->post('fungsi_hutan')
                ],

            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/usulan-tahura/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/usulan-tahura/'.$id);
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
            $id = $this->input->post('idkphk');
            var_dump($id);
            $result = $client->put(constant('API_URL').'/usulan-tahura/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk')
                    ],
                    [
                        'name' => 'tanggal_pengesahan',
                        'contents' => $this->input->post('tanggalpengesahan')
                    ],
                    [
                        'name' => 'nama_kphk',
                        'contents' => $this->input->post('namakhpk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                
                    [
                        'name' => 'tahun_pengesahaan',
                        'contents' => $this->input->post('tahunpengesahan')
                    ],
                    [
                        'name' => 'luas_kphk',
                        'contents' => $this->input->post('luaskphk')
                    ],
                    [
                        'name' => 'provinsi',
                        'contents' => $this->input->post('provinsi')
                    ],
                    [
                        'name' => 'kabupaten_kota_kphk',
                        'contents' => $this->input->post('kabupaten_kota_kphk')
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
                ]
            ]);
        }else{
            
        $id = $this->input->post('idkphk');
       
            $name = $_FILES['dokumensk']['name'];
            var_dump($id);
            $result = $client->put(constant('API_URL').'/usulan-tahura/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'skkphktn/'.$name
                    ],
                    [
                        'name' => 'tanggal_pengesahan',
                        'contents' => $this->input->post('tanggalpengesahan')
                    ],
                    [
                        'name' => 'nama_kphk',
                        'contents' => $this->input->post('namakhpk')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                    [
                        'name' => 'tahun_pengesahaan',
                        'contents' => $this->input->post('tahunpengesahan')
                    ],
                    [
                        'name' => 'luas_kphk',
                        'contents' => $this->input->post('luaskphk')
                    ],
                    [
                        'name' => 'provinsi',
                        'contents' => $this->input->post('provinsi')
                    ],
                    [
                        'name' => 'kabupaten_kota_kphk',
                        'contents' => $this->input->post('kabupaten_kota_kphk')
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
                ]
            ]);
        }
    }
}
