<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KondisiKawasanController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function SaveData(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/kondisi-kawasan-konservarsi', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'lintang' => $this->input->post('lintang'),
                'bujur' => $this->input->post('bujur'),
                'letak_administrasi' => $this->input->post('letak_administrasi'),
                'unit_pengelola' => $this->input->post('unit_pengelola'),
                'tipe_ekosistem' => $this->input->post('tipe_ekosistem'),
                'tipe_iklim' => $this->input->post('tipe_iklim'),
                'curah_hujan' => $this->input->post('curah_hujan'),
                'ketinggian' => $this->input->post('ketinggian'),
                'sejarah_kawasan' => $this->input->post('sejarah_kawasan'),
                'nama_kawasan' => $this->input->post('nama_kawasan')
            ]
        ]);
    }
    public function UpdateData(){
        $id = $this->input->post('id_kondisikawasan');
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->patch(constant('API_URL').'/kondisi-kawasan-konservarsi/'.$id, [
           /*
               isi yang akan di lempar ke api.
               'nama_kawasan' variable apinya.
           */
           'form_params' => [
               'lintang' => $this->input->post('lintang'),
               'bujur' => $this->input->post('bujur'),
               'letak_administrasi' => $this->input->post('letak_administrasi'),
               'unit_pengelola' => $this->input->post('unit_pengelola'),
               'tipe_ekosistem' => $this->input->post('tipe_ekosistem'),
               'tipe_iklim' => $this->input->post('tipe_iklim'),
               'curah_hujan' => $this->input->post('curah_hujan'),
               'ketinggian' => $this->input->post('ketinggian'),
               'sejarah_kawasan' => $this->input->post('sejarah_kawasan'),
               'nama_kawasan' => $this->input->post('nama_kawasan'),
           ]
       ]);
    }
}