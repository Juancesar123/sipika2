<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsulantahuraController extends CI_Controller {
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
        return $this->load->view('pages/usulantahura',$data);
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
            $id = $this->input->post('idtahura');
            $result = $client->put(constant('API_URL').'/usulan-tahura/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'peta',
                        'contents' => $this->input->post('peta')
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
        }else{
            $id = $this->input->post('idtahura');
            $name = $_FILES['peta']['name'];
            $result = $client->put(constant('API_URL').'/usulan-tahura/'.$id,[
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
    }
}
