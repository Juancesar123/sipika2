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
    public function tumbuhan($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=1');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savetumbuhan(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 1,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Showtumbuhan($id){
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
    public function Ubahtumbuhan(){
        $id = $this->input->post('idtumbuhan');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 1,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Deletetumbuhan($id){
       $client     = new GuzzleHttp\Client();
       $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function satwa($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=2');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savesatwa(){
         $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 2,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
     public function Deletesatwa($id){
       $client     = new GuzzleHttp\Client();
       $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function Showsatwa($id){
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
    public function Ubahsatwa(){
         $id = $this->input->post('idsatwa');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 2,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function spesieskunci($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=3');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savespesieskunci(){
         $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 3,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Showspesieskunci($id){
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
    public function Ubahspesieskunci(){
          $id = $this->input->post('idspesieskunci');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 3,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Deletespesieskunci($id){
        $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function tumbuhandilindungi($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=7');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savetumbuhandilindungi(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 7,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Ubahtumbuhandilindungi(){
          $id = $this->input->post('idtumbuhandilindungi');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 7,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Showtumbuhandilindungi($id){
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
    public function Deletetumbuhandilindungi($id){
         $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function satwadilindungi($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=8');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savesatwadilindungi(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 8,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Ubahsatwadilindungi(){
          $id = $this->input->post('idsatwadilindungi');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 8,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Showsatwadilindungi($id){
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
    public function Deletesatwadilindungi($id){
         $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function habitatsatwa($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=9');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savehabitatsatwa(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 9,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Ubahhabitatsatwa(){
          $id = $this->input->post('idhabitatsatwa');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 9,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Showhabitatsatwa($id){
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
    public function Deletehabitatsatwa($id){
         $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function tumbuhanliar($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=10');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function Savetumbuhanliar(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_latin' => $this->input->post('namalatin'),
                'jenis' => 10,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Ubahtumbuhanliar(){
          $id = $this->input->post('idtumbuhanliar');
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
            'nama_latin' => $this->input->post('namalatin'),
            'jenis' => 10,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Showtumbuhanliar($id){
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
    public function Deletetumbuhanliar($id){
         $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function potensi($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/keanekaragaman-hayati/?nama_kawasan='.$id.'&jenis=11');
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
     public function Savepotensi(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/keanekaragaman-hayati', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'deskripsi' => $this->input->post('deskripsi'),
                'jenis' => 11,
                'nama_kawasan' => $this->input->post('nama_kawasan'),
                'nama' => $this->input->post('nama'),
            ]
        ]);
    }
    public function Ubahpotensi(){
          $id = $this->input->post('idpotensi');
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
            'deskripsi' => $this->input->post('deskripsi'),
            'jenis' => 11,
            'nama_kawasan' => $this->input->post('nama_kawasan'),
            'nama' => $this->input->post('nama'),
        ]
       ]);
    }
    public function Showpotensi($id){
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
    public function Deletepotensi($id){
         $client     = new GuzzleHttp\Client();
        $client->delete(constant('API_URL').'/keanekaragaman-hayati/'.$id);
    }
    public function getSatwaEndemik($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/satwa-endemik/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function getTumbuhanEndemik($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/tumbuhan-endemik/?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function getSatwaPrioritas($id){
      $client     = new GuzzleHttp\Client();
      $result = $client->get(constant('API_URL').'/satwa-prioritas/?nama_kawasan='.$id);
      /*
          Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
          ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
      */
      $data = $result->getBody()->getContents();
      $hasil =  json_decode($data,true);
      echo json_encode($hasil);
    }
    public function setSatwaPrioritas(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/satwa-prioritas', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_kawasan' => $this->input->post('namakawasan'),
                'jenis' => $this->input->post('jenis')
            ]
        ]);
    }
    public function setSatwaEndemik(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/satwa-endemik', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_kawasan' => $this->input->post('namakawasan'),
                'jenis' => $this->input->post('jenis')
            ]
        ]);
    }
     public function updateSatwaPrioritas(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idsatwaprioritas');
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->patch(constant('API_URL').'/satwa-prioritas/'.$id, [
           /*
               isi yang akan di lempar ke api.
               'nama_kawasan' variable apinya.
           */
          'form_params' => [
            'jenis' => $this->input->post('jenis'),
            'nama_kawasan' => $this->input->post('namakawasan'),
        ]
       ]);
    }
    public function updateSatwaEndemik(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idsatwaendemik');
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->patch(constant('API_URL').'/satwa-endemik/'.$id, [
           /*
               isi yang akan di lempar ke api.
               'nama_kawasan' variable apinya.
           */
          'form_params' => [
            'jenis' => $this->input->post('jenis'),
            'nama_kawasan' => $this->input->post('namakawasan'),
        ]
       ]);
    }
    public function setTumbuhanEndemik(){
        $client     = new GuzzleHttp\Client();
        $client->post(constant('API_URL').'/tumbuhan-endemik', [
            /*
                isi yang akan di lempar ke api.
                'nama_kawasan' variable apinya.
            */
            'form_params' => [
                'nama_kawasan' => $this->input->post('namakawasan'),
                'jenis' => $this->input->post('jenis')
            ]
        ]);
    }
    public function updateTumbuhanEndemik(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idtumbuhanendemik');
        /*
           CURL API menggunakan guzzle. untuk constant('API_URL') jika ingin rubah valuenya
           ada di constants.php di bagian config. lalu cari define('API_URL').
           fungsinya untuk global var untuk link API jadi tidak merubah satu2 file cukup 1 file aja
           di ubah untuk semua.
       */
       $client     = new GuzzleHttp\Client();
       $client->patch(constant('API_URL').'/tumbuhan-endemik/'.$id, [
           /*
               isi yang akan di lempar ke api.
               'nama_kawasan' variable apinya.
           */
          'form_params' => [
            'jenis' => $this->input->post('jenis'),
            'nama_kawasan' => $this->input->post('namakawasan'),
        ]
       ]);
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