<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterProvinsiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
          
    }
    public function index(){
        return $this->load->view('pages/masterprovinsi');
    }
    public function get(){
        $hasilarray = [];
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/master_provinsi');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data);
        if(is_array($hasil)){
            foreach($hasil as $key=>$item){
                if(strlen($item->kode) == '2'){
                    $hasilarray[] = $item;
                }
            }
            echo json_encode($hasilarray);
        }
    }
    public function getKabupaten(){
        $hasilarray = [];
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/master_provinsi');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data);
        if(is_array($hasil)){
            foreach($hasil as $key=>$item){
                if(strlen($item->kode) == '5'){
                    $hasilarray[] = $item;
                }
            }
            echo json_encode($hasilarray);
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
        $client->post(constant('API_URL').'/master_provinsi', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama' => $this->input->post('nama'),
                'kode' => $this->input->post('kodeprovinsi')
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/master_provinsi/'.$id);
        echo'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/master_provinsi/'.$id);
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);

    }
    public function update(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idprovinsi');
        $client->patch(constant('API_URL').'/master_provinsi/'.$id, [
            'form_params' => [
                'nama' => $this->input->post('nama')
            ]
        ]);
    }
}