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
        $result = $client->get(constant('API_URL').'/perkembangan_kawasan/'.$id);
        $hasil = $result->getBody()->getContents();
        $data['hasil'] =  json_decode($hasil,true);
        $resultkondisikawasan = $client->get(constant('API_URL').'/kondisi-kawasan-konservarsi/?nama_kawasan='.$data['hasil']['nama_kawasan']);
        $hasilkondisikawasan = $resultkondisikawasan->getBody()->getContents();
        $data['kondisikawasan'] =  json_decode($hasilkondisikawasan,true);
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/managekawasankonservasi',$data);
        // $segment = $this->uri->segment_array(); 
        // if($this->uri->segment(1)=="perkembangan-kawasan")
        // {
        //     echo "active";
        // }else{
        //     echo "tai";
        // }
    }
    public function update(){
        $id = $this->input->post('id_kawasan');
         /*
            CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
            ada di constants.php di bagian config. lalu cari define('API_URL').
            fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
            di ubah untuk semua.
        */
        $name = $_FILES['gambar']['name'];
        $client     = new GuzzleHttp\Client();
        $client->patch(constant('API_URL').'/perkembangan_kawasan/'.$id, [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */'multipart'=>[
                [
                    'name' => 'gambar',
                    'contents' => fopen($_FILES['gambar']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'gambar',
                    'contents' => 'perkembangankawasan/'.$name
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('nama_kawasan')
                ],
                [
                    'name' => 'luas_kawasan',
                    'contents' => $this->input->post('luas_kawasan')
                ],
                [
                    'name' => 'kabupaten',
                    'contents' => $this->input->post('kabupaten')
                ],
                [
                    'name' => 'provinsi',
                    'contents' => $this->input->post('provinsi')
                ],
                [
                    'name' => 'pulau',
                    'contents' => $this->input->post('pulau')
                ],
                [
                    'name' => 'register',
                    'contents' => $this->input->post('register')
                ],
                [
                    'name' => 'fungsi',
                    'contents' => $this->input->post('fungsi')
                ],
            ]
        ]);
    }
}