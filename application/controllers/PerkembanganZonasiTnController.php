<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerkembanganZonasiTnController extends CI_Controller {
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
        return $this->load->view('pages/perkembanganzonasitn',$data);
    }
    public function get(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembanganzonasi-tn');
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
        $penataankawasan = $_FILES['penataankawasan']['name'];
        $peta = $_FILES['peta']['name'];
        $petashp = $_FILES['petashp']['name'];
        echo $this->input->post('luas');
        $result = $client->post(constant('API_URL').'/perkembanganzonasi-tn',[
            'multipart'=>[
                [
                    'name' => 'dokumen_sk',
                    'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'dokumen_sk',
                    'contents' => 'skkphktn/'.$name
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
                    'name' => 'status_zonasi',
                    'contents' => $this->input->post('statuszonasi')
                ],
                
                [
                    'name' => 'penataan_kawasan',
                    'contents' => fopen($_FILES['penataankawasan']['tmp_name'], 'r'),
                    'filename' => $penataankawasan
                ],
                [
                    'name' => 'penataan_kawasan',
                    'contents' => 'dokumenpenataankawasan/'.$penataankawasan
                ],
                [
                    'name' => 'peta',
                    'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                    'filename' => $peta
                ],
                [
                    'name' => 'peta',
                    'contents' => 'dokumenpeta/'.$peta
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => 'dokumenpetashp/'.$petashp
                ],
                [
                    'name' => 'peta_shp',
                    'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
                    'filename' => $petashp
                ],
                [
                    'name' => 'deskripsi',
                    'contents' => $this->input->post('deskripsi')
                ],
                [
                    'name' => 'zona_pemanfaatan',
                    'contents' => $this->input->post('zonapemanfaatan')
                ],
                [
                    'name' => 'zona_tradisional',
                    'contents' => $this->input->post('zonatradisional')
                ],
                [
                    'name' => 'zona_inti',
                    'contents' => $this->input->post('zonainti')
                ],
                [
                    'name' => 'zona_religi',
                    'contents' => $this->input->post('zonareligi')
                ],
                [
                    'name' => 'zona_rimba',
                    'contents' => $this->input->post('zonarimba')
                ],
                [
                    'name' => 'zona_perlindungan_bahari',
                    'contents' => $this->input->post('zonaperlindunganbahari')
                ],
                [
                    'name' => 'zona_rehabilitasi',
                    'contents' => $this->input->post('zonarehabilitasi')
                ],
                [
                    'name' => 'zona_khusus',
                    'contents' => $this->input->post('zonakhusus')
                ],
                [
                    'name' => 'zona_lainnya',
                    'contents' => $this->input->post('zonalainnya')
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
        $result = $client->delete(constant('API_URL').'/perkembanganzonasi-tn/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/perkembanganzonasi-tn/'.$id);
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
            $id = $this->input->post('idperkembanganzonasitn');
            var_dump($id);
            $result = $client->put(constant('API_URL').'/perkembanganzonasi-tn/'.$id,[
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
                        'name' => 'status_zonasi',
                        'contents' => $this->input->post('statuszonasi')
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
                        'contents' => $this->input->post('petashp')
                    ],
                    [
                        'name' => 'deskripsi',
                        'contents' => $this->input->post('deskripsi')
                    ],
                    [
                        'name' => 'zona_pemanfaatan',
                        'contents' => $this->input->post('zonapemanfaatan')
                    ],
                    [
                        'name' => 'zona_tradisional',
                        'contents' => $this->input->post('zonatradisional')
                    ],
                    [
                        'name' => 'zona_inti',
                        'contents' => $this->input->post('zonainti')
                    ],
                    [
                        'name' => 'zona_religi',
                        'contents' => $this->input->post('zonareligi')
                    ],
                    [
                        'name' => 'zona_rimba',
                        'contents' => $this->input->post('zonarimba')
                    ],
                    [
                        'name' => 'zona_perlindungan_bahari',
                        'contents' => $this->input->post('zonaperlindunganbahari')
                    ],
                    [
                        'name' => 'zona_rehabilitasi',
                        'contents' => $this->input->post('zonarehabilitasi')
                    ],
                    [
                        'name' => 'zona_khusus',
                        'contents' => $this->input->post('zonakhusus')
                    ],
                    [
                        'name' => 'zona_lainnya',
                        'contents' => $this->input->post('zonalainnya')
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
            
            $id = $this->input->post('idperkembanganzonasitn');
            $name = $_FILES['dokumensk']['name'];
            $penataankawasan = $_FILES['penataankawasan']['name'];
            $peta = $_FILES['peta']['name'];
            $petashp = $_FILES['petashp']['name'];
            $result = $client->put(constant('API_URL').'/perkembanganzonasi-tn/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'dokumen_sk',
                        'contents' => fopen($_FILES['dokumensk']['tmp_name'], 'r'),
                        'filename' => $name
                    ],
                    [
                        'name' => 'dokumen_sk',
                        'contents' => 'skkphktn/'.$name
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
                        'name' => 'status_zonasi',
                        'contents' => $this->input->post('statuszonasi')
                    ],
                    
                    [
                        'name' => 'penataan_kawasan',
                        'contents' => fopen($_FILES['penataankawasan']['tmp_name'], 'r'),
                        'filename' => $penataankawasan
                    ],
                    [
                        'name' => 'penataan_kawasan',
                        'contents' => 'dokumenpenataankawasan/'.$penataankawasan
                    ],
                    [
                        'name' => 'peta',
                        'contents' => fopen($_FILES['peta']['tmp_name'], 'r'),
                        'filename' => $peta
                    ],
                    [
                        'name' => 'peta',
                        'contents' => 'dokumenpeta/'.$peta
                    ],
                    [
                        'name' => 'peta_shp',
                        'contents' => 'dokumenpetashp/'.$petashp
                    ],
                    [
                        'name' => 'peta_shp',
                        'contents' => fopen($_FILES['petashp']['tmp_name'], 'r'),
                        'filename' => $petashp
                    ],
                    [
                        'name' => 'deskripsi',
                        'contents' => $this->input->post('deskripsi')
                    ],
                    [
                        'name' => 'zona_pemanfaatan',
                        'contents' => $this->input->post('zonapemanfaatan')
                    ],
                    [
                        'name' => 'zona_tradisional',
                        'contents' => $this->input->post('zonatradisional')
                    ],
                    [
                        'name' => 'zona_inti',
                        'contents' => $this->input->post('zonainti')
                    ],
                    [
                        'name' => 'zona_religi',
                        'contents' => $this->input->post('zonareligi')
                    ],
                    [
                        'name' => 'zona_rimba',
                        'contents' => $this->input->post('zonarimba')
                    ],
                    [
                        'name' => 'zona_perlindungan_bahari',
                        'contents' => $this->input->post('zonaperlindunganbahari')
                    ],
                    [
                        'name' => 'zona_rehabilitasi',
                        'contents' => $this->input->post('zonarehabilitasi')
                    ],
                    [
                        'name' => 'zona_khusus',
                        'contents' => $this->input->post('zonakhusus')
                    ],
                    [
                        'name' => 'zona_lainnya',
                        'contents' => $this->input->post('zonalainnya')
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
