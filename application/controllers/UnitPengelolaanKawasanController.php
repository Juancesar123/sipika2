<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitPengelolaanKawasanController extends CI_Controller {
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
        return $this->load->view('pages/unitpengelolaankawasan',$data);
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/unit-pengelolaan-kawasan');
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
        $result = $client->post(constant('API_URL').'/unit-pengelolaan-kawasan',[
            'form_params' => [
                'nama_pengelola' => strtoupper($this->input->post('namapengelola')),
                'provinsi' => strtoupper($this->input->post('provinsi')),
                'kabupaten' => strtoupper($this->input->post('kabupaten')),
                'kecamatan' => strtoupper($this->input->post('kecamatan')),
                'alamat' => strtoupper($this->input->post('alamat')),
                'nomor_telepon' => strtoupper($this->input->post('nomortelepon')),
                'nomor_fax' => strtoupper($this->input->post('nomorfax')),
                'email' => strtoupper($this->input->post('email')),
                'website' => strtoupper($this->input->post('website')),
                'call_center' => strtoupper($this->input->post('callcenter'))
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/unit-pengelolaan-kawasan/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/unit-pengelolaan-kawasan/'.$id);
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
        $id = $this->input->post('id');
        $result = $client->patch(constant('API_URL').'/unit-pengelolaan-kawasan/'.$id,[
            'form_params' => [
                'nama_pengelola' => strtoupper($this->input->post('namapengelola')),
                'provinsi' => strtoupper($this->input->post('provinsi')),
                'kabupaten' => strtoupper($this->input->post('kabupaten')),
                'kecamatan' => strtoupper($this->input->post('kecamatan')),
                'alamat' => strtoupper($this->input->post('alamat')),
                'nomor_telepon' => strtoupper($this->input->post('nomortelepon')),
                'nomor_fax' => strtoupper($this->input->post('nomorfax')),
                'email' => strtoupper($this->input->post('email')),
                'website' => strtoupper($this->input->post('website')),
                'call_center' => strtoupper($this->input->post('callcenter'))
            ] 
        ]);
    }
}
