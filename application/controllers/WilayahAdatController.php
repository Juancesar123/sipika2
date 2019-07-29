<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WilayahAdatController extends CI_Controller {
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
        return $this->load->view('pages/kphktn',$data);
    }
    public function getData($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/wilayah-adat?nama_kawasan='.$id);
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
            $client     = new GuzzleHttp\Client();
            $name = $_FILES['dokumensk']['name'];
            $result = $client->post(constant('API_URL').'/wilayah-adat',[
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
                        'name' => 'nomor_sk',
                        'contents' => $this->input->post('nomorsk')
                    ],
                    [
                        'name' => 'judul_sk',
                        'contents' => $this->input->post('judulsk')
                    ],
                    [
                        'name' => 'nama_wilayah_adat',
                        'contents' => $this->input->post('namawilayahadat')
                    ],
                    [
                        'name' => 'luas',
                        'contents' => $this->input->post('luas')
                    ],
                    [
                        'name' => 'jumlah_kepala_keluarga',
                        'contents' => $this->input->post('jumlahkepalakeluarga')
                    ],
                    [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                    [
                        'name' => 'tanggal_sk',
                        'contents' => $this->input->post('tanggalsk')
                    ],
                ]
            ]);  
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/wilayah-adat/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/wilayah-adat/'.$id);
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
                $id = $this->input->post('idwilayahadat');
                var_dump($id);
                $result = $client->put(constant('API_URL').'/wilayah-adat/'.$id,[
                    'multipart'=>[
                        [
                            'name' => 'dokumen_sk',
                            'contents' => $this->input->post('dokumensk')
                        ],
                        [
                            'name' => 'nama_wilayah_adat',
                            'contents' => $this->input->post('namawilayahadat')
                        ],
                        [
                            'name' => 'luas',
                            'contents' => $this->input->post('luas')
                        ],
                        [
                            'name' => 'jumlah_kepala_keluarga',
                            'contents' => $this->input->post('jumlahkepalakeluarga')
                        ],
                        [
                            'name' => 'judul_sk',
                            'contents' => $this->input->post('judulsk')
                        ],
                        [
                            'name' => 'nama_kawasan',
                            'contents' => $this->input->post('namakawasan')
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
                $id = $this->input->post('idwilayahadat');
                $name = $_FILES['dokumensk']['name'];
                $result = $client->put(constant('API_URL').'/wilayah-adat/'.$id,[
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
                            'name' => 'nama_wilayah_adat',
                            'contents' => $this->input->post('namawilayahadat')
                        ],
                        [
                            'name' => 'luas',
                            'contents' => $this->input->post('luas')
                        ],
                        [
                            'name' => 'jumlah_kepala_keluarga',
                            'contents' => $this->input->post('jumlahkepalakeluarga')
                        ],
                        [
                            'name' => 'nama_kawasan',
                            'contents' => $this->input->post('namakawasan')
                        ].
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
