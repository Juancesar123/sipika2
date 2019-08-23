<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PencarianController extends CI_Controller {
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
         return $this->load->view('pages/pencarian',$data);
    }
    public function cari($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembangan-kawasan?nama_kawasan[$like]='.$id.'%');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
   
}