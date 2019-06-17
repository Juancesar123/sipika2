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
    public function update(){
        $id = $this->input->post('id_kawasan');
         /*
            CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
            ada di constants.php di bagian config. lalu cari define('API_URL').
            fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
            di ubah untuk semua.
        */
        $client     = new GuzzleHttp\Client();
        $client->patch(constant('API_URL').'/perkembangan-kawasan/'.$id, [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'luas_kawasan' => $this->input->post('luas_kawasan'),
                'kabupaten' => $this->input->post('kabupaten'),
                'provinsi' => $this->input->post('provinsi'),
                'pulau' => $this->input->post('pulau'),
                'register' => $this->input->post('register'),
                'fungsi' => $this->input->post('fungsi')
            ]
        ]);
    }
}