<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KphktnController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function index(){
        return $this->load->view('pages/kphktn');
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/kphk_tn');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function store(){
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten_kota_kphk');
        $hasil = explode(',',$provinsi);
       // $datatemp = array();
        $hasilkabupaten = explode(',',$kabupaten);
        //print_r($hasilkabupaten);
        for($i=0; $i < count($hasil);$i++){
            //echo $hasil[$i];
            for ($j=0; $i < count($hasilkabupaten);$j++) {
               
                $client     = new GuzzleHttp\Client();
                $name = $_FILES['dokumensk']['name'];
                $result = $client->post(constant('API_URL').'/kphk_tn',[
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
                            'name' => 'tahun_pengesahaan',
                            'contents' => $this->input->post('tahunpengesahan')
                        ],
                        [
                            'name' => 'luas_kphk',
                            'contents' => $this->input->post('luaskphk')
                        ],
                        [
                            'name' => 'kode_provinsi',
                            'contents' => $hasil[$i]
                        ],
                        [
                            'name' => 'kode_kabupaten',
                            'contents' => $hasilkabupaten[$j]
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
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/kphk_tn/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/kphk_tn/'.$id);
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
            $result = $client->put(constant('API_URL').'/kphk_tn/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => $this->input->post('dokumensk')
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
            $result = $client->put(constant('API_URL').'/kphk_tn/'.$id,[
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
