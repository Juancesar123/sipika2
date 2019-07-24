<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeanekaragamHayatiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function get($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get1($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get2($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get3($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get4($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get5($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get6($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get7($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get8($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get9($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get10($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function get11($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id);
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
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('nama_latin'),
                'jenis' => $this->input->post('jenis'),
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
            ]
        ]);
    }
    public function update(){
        $id = $this->input->post('id_keanekaragamhayati');
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->patch(constant('API_URL').'/keanekaragaman-hayati/'.$id, [
           /*
               isi yang akan di lempar ke api.
               'nama_kawasan' variable apinya.
           */
          'form_params' => [
            'nama_latin' => $this->input->post('nama_latin'),
            'jenis' => $this->input->post('jenis'),
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        ]
       ]);
    }
    public function destroy($id){
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/'.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
}