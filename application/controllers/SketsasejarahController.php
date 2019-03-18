<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SketsasejarahController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function index(){
        return $this->load->view('pages/sketsasejarah');
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/sketsa-sejarah');
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
        $result = $client->post(constant('API_URL').'/sketsa-sejarah',[
            'multipart'=>[
                [
                    'name' => 'file',
                    'contents' => fopen($_FILES['file']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'file',
                    'contents' => 'sketsasejarah/'.$name
                ],
                [
                    'name' => 'judul',
                    'contents' => $this->input->post('judul')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/sketsa-sejarah/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/sketsa-sejarah/'.$id);
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
            $id = $this->input->post('idsketsasejarah');
            $result = $client->put(constant('API_URL').'/sketsa-sejarah/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'file',
                        'contents' => $this->input->post('file')
                    ],
                    [
                        'name' => 'judul',
                        'contents' => $this->input->post('judul')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idsketsasejarah');
            $name = $_FILES['file']['name'];
            $result = $client->put(constant('API_URL').'/sketsa-sejarah/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'file',
                        'contents' => fopen($_FILES['file']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'file',
                        'contents' => 'sketsasejarah/'.$name
                    ],
                    [
                        'name' => 'judul',
                        'contents' => $this->input->post('judul')
                    ],
                ]
            ]);
        }
    }
}
