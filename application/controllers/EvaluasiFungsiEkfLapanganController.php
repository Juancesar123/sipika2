<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EvaluasiFungsiEkfLapanganController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan?nama_kawasan='.$id);
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
        $result = $client->get(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan/'.$id);
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
        $result = $client->post(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan',[
            'multipart'=>[
                [
                    'name' => 'dokmen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokmen_sk',
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
                    'name' => 'rekomendasi',
                    'contents' => $this->input->post('rekomendasi')
                ],
                [
                    'name' => 'tahun_pelaksanaan',
                    'contents' => $this->input->post('tahunpelaksanaan')
                ],
                [
                    'name' => 'upt',
                    'contents' => $this->input->post('upt')
                ],
            ]
        ]);
    }
    public function update(){
        $client     = new GuzzleHttp\Client();
        $status = $this->input->post('status');
        if($status == 'filenotfound'){
            $id = $this->input->post('idevaluasifungsiekflapangan');
            $result = $client->put(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan/'.$id,[
                'multipart'=>[
                   
                    [
                        'name' => 'dokmen_sk',
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
                        'name' => 'rekomendasi',
                        'contents' => $this->input->post('rekomendasi')
                    ],
                    [
                        'name' => 'tahun_pelaksanaan',
                        'contents' => $this->input->post('tahunpelaksanaan')
                    ],
                    [
                        'name' => 'upt',
                        'contents' => $this->input->post('upt')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('evaluasifungsiekflapangan');
            $name = $_FILES['dokumensk']['name'];
            $namepeta = $_FILES['peta']['name'];
            $result = $client->put(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokmen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokmen_sk',
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
                        'name' => 'rekomendasi',
                        'contents' => $this->input->post('rekomendasi')
                    ],
                    [
                        'name' => 'tahun_pelaksanaan',
                        'contents' => $this->input->post('tahunpelaksanaan')
                    ],
                    [
                        'name' => 'upt',
                        'contents' => $this->input->post('upt')
                    ],
                ]
            ]);
        }
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/evaluasi-fungsi-ekf-lapangan/'.$id);
    }
}