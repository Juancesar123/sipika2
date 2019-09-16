<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function getCountData($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembangan_kawasan?fungsi='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
   public function getAllData(){
    $client     = new GuzzleHttp\Client();
    $result = $client->get(constant('API_URL').'/perkembangan_kawasan');
    /*
        Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
        ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
    */
    $data = $result->getBody()->getContents();
    $hasil =  json_decode($data,true);
    echo json_encode($hasil);
   }
}