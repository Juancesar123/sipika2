<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagekawasankonservasiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembangan-kawasan/'.$id);
        $hasil = $result->getBody()->getContents();
        $data['hasil'] =  json_decode($hasil,true);
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/managekawasankonservasi',$data);
    }
    public function Updatekawasan(){
        
    }
}