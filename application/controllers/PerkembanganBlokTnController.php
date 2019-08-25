
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerkembanganBlokTnController extends CI_Controller {
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
        return $this->load->view('pages/perkembanganbloktn',$data);
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembanganblok-tn');
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
        $name = $_FILES['dokumensk']['name'];
        $penataankawasanname = $_FILES['penataankawasan']['name'];
        $petaname = $_FILES['peta']['name'];
        $petashpname = $_FILES['petashp']['name'];
        $result = $client->post(constant('API_URL').'/perkembanganblok-tn',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'dokumenperkembanganbloktn/'.$name
                ],
                [
                    'name' => 'luas',
                    'contents' => $this->input->post('luas')
                ],
                [
                    'name' => 'datasurat ',
                    'contents' => $this->input->post('datasurat')
                ],
                [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
                [
                    'name' => 'status_blok',
                    'contents' => $this->input->post('statusblok')
                ],
                
                [
                    'name' => 'penataan_kawasan',
                    'contents' => fopen($_FILES['penataankawasan']['tmp_name'], 'r'),
                    'filename' => $penataankawasanname
                ],
                [
                    'name' => 'penataan_kawasan',
                    'contents' => 'dokumenperkembanganbloktn/'.$penataankawasanname
                ],
                [
                    'name' => 'peta',
                    'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                    'filename' => $petaname
                ],
                [
                    'name' => 'peta',
                    'contents' => 'dokumenperkembanganbloktn/'.$petaname
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => 'dokumenperkembanganbloktn/'.$petashpname
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
                    'filename' => $petashpname
                ],
                [
                    'name' => 'deskripsi',
                    'contents' => $this->input->post('deskripsi')
                ],
                [
                    'name' => 'blok_pemanfaatan',
                    'contents' => $this->input->post('blokpemanfaatan')
                ],
                [
                    'name' => 'blok_tradisional',
                    'contents' => $this->input->post('bloktradisional')
                ],
                [
                    'name' => 'blok_perlindungan',
                    'contents' => $this->input->post('blokperlindungan')
                ],
                [
                    'name' => 'blok_religi',
                    'contents' => $this->input->post('blokreligi')
                ],
                [
                    'name' => 'blok_koleksi',
                    'contents' => $this->input->post('blokkoleksi')
                ],
                [
                    'name' => 'blok_perlindungan_bahari',
                    'contents' => $this->input->post('blokperlindunganbahari')
                ],
                [
                    'name' => 'blok_rehabilitasi',
                    'contents' => $this->input->post('blokrehabilitasi')
                ],
                [
                    'name' => 'blok_khusus',
                    'contents' => $this->input->post('blokkhusus')
                ],
                [
                    'name' => 'blok_lainnya',
                    'contents' => $this->input->post('bloklainnya')
                ],
                [
                    'name' => 'judul_sk',
                    'contents' => $this->input->post('judulsk')
                ],
                [
                    'name' => 'nomor_sk',
                    'contents' => $this->input->post('nomorsk')
                ],
                [
                    'name' => 'tanggal_sk',
                    'contents' => $this->input->post('tanggalsk')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/perkembanganblok-tn/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembanganblok-tn/'.$id);
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
        $status = $this->input->post('status');
        if($status == 'filenotfound'){
            $id = $this->input->post('idperkembanganbloktn');
            var_dump($id);
            $result = $client->put(constant('API_URL').'/perkembanganblok-tn/'.$id,[
                'multipart'=>[
	                [
	                    'name' => 'dokumen_sk',
	                    'contents' => $this->input->post('dokumensk')
	                ],
	                [
	                    'name' => 'luas',
	                    'contents' => $this->input->post('luas')
	                ],
	                [
	                    'name' => 'datasurat',
	                    'contents' => $this->input->post('datasurat')
	                ],
	                [
	                    'name' => 'nama_kawasan',
	                    'contents' => $this->input->post('namakawasan')
	                ],
	                [
	                    'name' => 'status_blok',
	                    'contents' => $this->input->post('statusblok')
	                ],
	                [
	                    'name' => 'penataan_kawasan',
	                    'contents' => $this->input->post('penataankawasan')
	                ],
	                [
	                    'name' => 'peta',
	                    'contents' => $this->input->post('peta')
	                ],
	                [
	                    'name' => 'peta_shp',
	                    'contents' =>  $this->input->post('petashp')
	                ],
	                [
	                    'name' => 'deskripsi',
	                    'contents' => $this->input->post('deskripsi')
	                ],
	                [
	                    'name' => 'blok_pemanfaatan',
	                    'contents' => $this->input->post('blokpemanfaatan')
	                ],
	                [
	                    'name' => 'blok_tradisional',
	                    'contents' => $this->input->post('bloktradisional')
	                ],
	                [
	                    'name' => 'blok_perlindungan',
	                    'contents' => $this->input->post('blokperlindungan')
	                ],
	                [
	                    'name' => 'blok_religi',
	                    'contents' => $this->input->post('blokreligi')
	                ],
	                [
	                    'name' => 'blok_koleksi',
	                    'contents' => $this->input->post('blokkoleksi')
	                ],
	                [
	                    'name' => 'blok_perlindungan_bahari',
	                    'contents' => $this->input->post('blokperlindunganbahari')
	                ],
	                [
	                    'name' => 'blok_rehabilitasi',
	                    'contents' => $this->input->post('blokrehabilitasi')
	                ],
	                [
	                    'name' => 'blok_khusus',
	                    'contents' => $this->input->post('blokkhusus')
	                ],
	                [
	                    'name' => 'blok_lainnya',
	                    'contents' => $this->input->post('bloklainnya')
	                ],
	                [
	                    'name' => 'judul_sk',
	                    'contents' => $this->input->post('judulsk')
	                ],
	                [
	                    'name' => 'nomor_sk',
	                    'contents' => $this->input->post('nomorsk')
	                ],
	                [
	                    'name' => 'tanggal_sk',
	                    'contents' => $this->input->post('tanggalsk')
	                ],
                ]
            ]);
        }else{
	        $id = $this->input->post('idperkembanganbloktn');
	        $name = $_FILES['dokumensk']['name'];
	        $penataankawasanname = $_FILES['penataankawasan']['name'];
	        $petaname = $_FILES['peta']['name'];
	        $petashpname = $_FILES['petashp']['name'];
            $result = $client->put(constant('API_URL').'/perkembanganblok-tn/'.$id,[
                'multipart'=>[
	                [
	                    'name' => 'dokumen_sk',
	                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
	                    'filename' => $name
	                ],
	                [
	                    'name' => 'dokumen_sk',
	                    'contents' => 'dokumenperkembanganbloktn/'.$name
	                ],
	                [
	                    'name' => 'luas',
	                    'contents' => $this->input->post('luas')
	                ],
	                [
	                    'name' => 'datasurat',
	                    'contents' => $this->input->post('datasurat')
	                ],
	                [
	                    'name' => 'nama_kawasan',
	                    'contents' => $this->input->post('namakawasan')
	                ],
	                [
	                    'name' => 'status_blok',
	                    'contents' => $this->input->post('statusblok')
	                ],
	                
	                [
	                    'name' => 'penataan_kawasan',
	                    'contents' => fopen($_FILES['penataankawasan']['tmp_name'], 'r'),
	                    'filename' => $penataankawasanname
	                ],
	                [
	                    'name' => 'penataan_kawasan',
	                    'contents' => 'dokumenperkembanganbloktn/'.$penataankawasanname
	                ],
	                [
	                    'name' => 'peta',
	                    'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
	                    'filename' => $petaname
	                ],
	                [
	                    'name' => 'peta',
	                    'contents' => 'dokumenperkembanganbloktn/'.$petaname
	                ],
	                [
	                    'name' => 'peta_shp',
	                    'contents' => 'dokumenperkembanganbloktn/'.$petashpname
	                ],
	                [
	                    'name' => 'peta_shp',
	                    'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
	                    'filename' => $petashpname
	                ],
	                [
	                    'name' => 'deskripsi',
	                    'contents' => $this->input->post('deskripsi')
	                ],
	                [
	                    'name' => 'blok_pemanfaatan',
	                    'contents' => $this->input->post('blokpemanfaatan')
	                ],
	                [
	                    'name' => 'blok_tradisional',
	                    'contents' => $this->input->post('bloktradisional')
	                ],
	                [
	                    'name' => 'blok_perlindungan',
	                    'contents' => $this->input->post('blokperlindungan')
	                ],
	                [
	                    'name' => 'blok_religi',
	                    'contents' => $this->input->post('blokreligi')
	                ],
	                [
	                    'name' => 'blok_koleksi',
	                    'contents' => $this->input->post('blokkoleksi')
	                ],
	                [
	                    'name' => 'blok_perlindungan_bahari',
	                    'contents' => $this->input->post('blokperlindunganbahari')
	                ],
	                [
	                    'name' => 'blok_rehabilitasi',
	                    'contents' => $this->input->post('blokrehabilitasi')
	                ],
	                [
	                    'name' => 'blok_khusus',
	                    'contents' => $this->input->post('blokkhusus')
	                ],
	                [
	                    'name' => 'blok_lainnya',
	                    'contents' => $this->input->post('bloklainnya')
	                ],
	                [
	                    'name' => 'judul_sk',
	                    'contents' => $this->input->post('judulsk')
	                ],
	                [
	                    'name' => 'nomor_sk',
	                    'contents' => $this->input->post('nomorsk')
	                ],
	                [
	                    'name' => 'tanggal_sk',
	                    'contents' => $this->input->post('tanggalsk')
	                ],
                ]
            ]);
        }
    }
}
