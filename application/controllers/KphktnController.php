<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KphktnController extends CI_Controller {
    public function index(){
        return $this->load->view('pages/kphktn');
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/kphk-tn');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
}
