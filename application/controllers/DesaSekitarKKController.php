<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesaSekitarKKController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function store(){
        /*
            CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
            ada di constants.php di bagian config. lalu cari define('API_URL').
            fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
            di ubah untuk semua.
        */
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/desa-sekitar-kk', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'kota_kabupaten' => $this->input->post('kotakbupaten'),
                'desa' => $this->input->post('desa'),
                'nama_kawasan' => $this->input->post('namakawasan'),
                'kecamatan' => $this->input->post('kecamatan')
            ]
        ]);
    }
    public function getData($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/desa-sekitar-kk/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/desa-sekitar-kk/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/desa-sekitar-kk/'.$id);
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
        $id = $this->input->post('iddesakk');
        $client->patch(constant('API_URL').'/desa-sekitar-kk/'.$id, [
            'form_params' => [
                'kota_kabupaten' => $this->input->post('kotakbupaten'),
                'desa' => $this->input->post('desa'),
                'nama_kawasan' => $this->input->post('namakawasan'),
                'kecamatan' => $this->input->post('kecamatan')
            ]
        ]);
    }
}