<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeraturanController extends CI_Controller {
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
        return $this->load->view('pages/peraturan',$data);
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/peraturan');
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
        $name = $_FILES['file']['name'];
        $result = $client->post(constant('API_URL').'/peraturan',[
            'multipart'=>[
                [
                    'name' => 'file',
                    'contents' => fopen($_FILES['file']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'file',
                    'contents' => 'peraturan/'.$name
                ],
                [
                    'name' => 'jenis_peraturan',
                    'contents' => $this->input->post('jenis_peraturan')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/peraturan/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/peraturan/'.$id);
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
            $id = $this->input->post('idperaturan');
            $result = $client->put(constant('API_URL').'/peraturan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'file',
                        'contents' => $this->input->post('file')
                    ],
                    [
                        'name' => 'jenis_peraturan',
                        'contents' => $this->input->post('jenis_peraturan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idperaturan');
            $name = $_FILES['file']['name'];
            $result = $client->put(constant('API_URL').'/peraturan/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'file',
                        'contents' => fopen($_FILES['file']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'file',
                        'contents' => 'peraturan/'.$name
                    ],
                    [
                        'name' => 'jenis_peraturan',
                        'contents' => $this->input->post('jenis_peraturan')
                    ],
                ]
            ]);
        }
    }
}
