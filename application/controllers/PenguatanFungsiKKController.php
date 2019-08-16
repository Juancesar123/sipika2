<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenguatanFungsiKKController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function getData($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/penguatan-fungsi-kk?nama_kawasan='.$id);
        /*
            Hasil  data dari api tadi di getBody()->getContents(); agar semua isi data di api
            ke ambil. lalu jangan lupa di parse ke json karna datanya berupa stream string
        */
        $data = $result->getBody()->getContents();
        $hasil =  json_decode($data,true);
        echo json_encode($hasil);
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/penguatan-fungsi-kk/'.$id);
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
            $id = $this->input->post('idpenguatanfungsikk');
            $result = $client->put(constant('API_URL').'/penguatan-fungsi-kk/'.$id,[
                'multipart'=>[
                    [
                        'name' => 'judul_kerjasama',
                        'contents' => $this->input->post('judulkerjasama')
                    ],
                     [
                        'name' => 'file_pks',
                        'contents' => $this->input->post('filepks')
                    ],
                     [
                        'name' => 'peta_lokasi_kerjasama',
                        'contents' => $this->input->post('petalokasikerjasama')
                    ],
                     [
                        'name' => 'rencana_pelaksanaan_program',
                        'contents' => $this->input->post('rencanapelaksanaanprogram')
                    ],
                     [
                        'name' => 'rencana_kerja_tahunan',
                        'contents' => $this->input->post('rencanakerjatahunan')
                    ],
                     [
                        'name' => 'monitoring',
                        'contents' => $this->input->post('monitoring')
                    ],
                     [
                        'name' => 'evaluasi',
                        'contents' => $this->input->post('evaluasi')
                    ],
                     [
                        'name' => 'laporan_akhir',
                        'contents' => $this->input->post('laporanakhir')
                    ],
                    [
                        'name' => 'mitra_kerja',
                        'contents' => $this->input->post('mitrakerja')
                    ],
                    [
                        'name' => 'kategori_mitra',
                        'contents' => $this->input->post('kategorimitra')
                    ],
                    [
                        'name' => 'persetujuan',
                        'contents' => $this->input->post('persetujuan')
                    ],
                    [
                        'name' => 'perjanjian_kerjasama',
                        'contents' => $this->input->post('perjanjiankerjasama')
                    ],
                    [
                        'name' => 'nota_kesepahaman',
                        'contents' => $this->input->post('notakesepahaman')
                    ],
                    [
                        'name' => 'dari',
                        'contents' => $this->input->post('daripenguatan')
                    ],
                    [
                        'name' => 'ke',
                        'contents' => $this->input->post('kepenguatan')
                    ],
                    [
                        'name' => 'upt',
                        'contents' => $this->input->post('uptpenguatanfungsi')
                    ],
                    [
                        'name' => 'hibah',
                        'contents' => $this->input->post('hibah')
                    ],
                     [
                        'name' => 'jumlah_hibah',
                        'contents' => $this->input->post('jumlahhibah')
                    ],
                    [
                        'name' => 'keterangan',
                        'contents' => $this->input->post('keteranganpenguatan')
                    ],
                     [
                        'name' => 'nama_kawasan',
                        'contents' => $this->input->post('namakawasan')
                    ],
                ]
            ]);
        }else{
            $id = $this->input->post('idpenguatanfungsikk');
            $filepks = $_FILES['filepks']['name'];
            $petalokasikerjasama = $_FILES['petalokasikerjasama']['name'];
            $rencanapelaksanaanprogram = $_FILES['rencanapelaksanaanprogram']['name'];
            $rencanakerjatahunan = $_FILES['rencanakerjatahunan']['name'];
            $monitoring = $_FILES['monitoring']['name'];
            $evaluasi = $_FILES['evaluasi']['name'];
            $laporanakhir = $_FILES['laporanakhir']['name'];
            $result = $client->put(constant('API_URL').'/pengukuhan-kawasan/'.$id,[
                'multipart'=>[
                     [
                    'name' => 'file_pks',
                    'contents' => fopen($_FILES['filepks']['tmp_name'], 'r'),
                    'filename' => $filepks
                ],
                [
                    'name' => 'file_pks',
                    'contents' => 'dokumenpenguatanfungsikk/'.$filepks
                ],
                [
                    'name' => 'peta_lokasi_kerjasama',
                    'contents' => fopen($_FILES['petalokasikerjasama']['tmp_name'], 'r'),
                    'filename' => $petalokasikerjasama
                ],
                [
                    'name' => 'peta_lokasi_kerjasama',
                    'contents' => 'dokumenpenguatanfungsikk/'.$petalokasikerjasama
                ],
                [
                    'name' => 'rencana_pelaksanaan_program',
                    'contents' => fopen($_FILES['rencanapelaksanaanprogram']['tmp_name'], 'r'),
                    'filename' => $rencanapelaksanaanprogram
                ],
                [
                    'name' => 'rencana_pelaksanaan_program',
                    'contents' => 'dokumenpenguatanfungsikk/'.$rencanapelaksanaanprogram
                ],
                [
                    'name' => 'rencana_kerja_tahunan',
                    'contents' => fopen($_FILES['rencanakerjatahunan']['tmp_name'], 'r'),
                    'filename' => $rencanakerjatahunan
                ],
                [
                    'name' => 'rencana_kerja_tahunan',
                    'contents' => 'dokumenpenguatanfungsikk/'.$rencanakerjatahunan
                ],
                [
                    'name' => 'monitoring',
                    'contents' => fopen($_FILES['monitoring']['tmp_name'], 'r'),
                    'filename' => $monitoring
                ],
                [
                    'name' => 'monitoring',
                    'contents' => 'dokumenpenguatanfungsikk/'.$monitoring
                ],
                [
                    'name' => 'evaluasi',
                    'contents' => fopen($_FILES['evaluasi']['tmp_name'], 'r'),
                    'filename' => $evaluasi
                ],
                [
                    'name' => 'evaluasi',
                    'contents' => 'dokumenpenguatanfungsikk/'.$evaluasi
                ],
                [
                    'name' => 'laporan_akhir',
                    'contents' => fopen($_FILES['laporanakhir']['tmp_name'], 'r'),
                    'filename' => $laporanakhir
                ],
                [
                    'name' => 'laporan_akhir',
                    'contents' => 'dokumenpenguatanfungsikk/'.$laporanakhir
                ],
                [
                    'name' => 'judul_kerjasama',
                    'contents' => $this->input->post('judulkerjasama')
                ],
                [
                    'name' => 'mitra_kerja',
                    'contents' => $this->input->post('mitrakerja')
                ],
                [
                    'name' => 'kategori_mitra',
                    'contents' => $this->input->post('kategorimitra')
                ],
                [
                    'name' => 'persetujuan',
                    'contents' => $this->input->post('persetujuan')
                ],
                [
                    'name' => 'perjanjian_kerjasama',
                    'contents' => $this->input->post('perjanjiankerjasama')
                ],
                [
                    'name' => 'nota_kesepahaman',
                    'contents' => $this->input->post('notakesepahaman')
                ],
                [
                    'name' => 'dari',
                    'contents' => $this->input->post('daripenguatan')
                ],
                [
                    'name' => 'ke',
                    'contents' => $this->input->post('kepenguatan')
                ],
                [
                    'name' => 'upt',
                    'contents' => $this->input->post('uptpenguatanfungsi')
                ],
                [
                    'name' => 'hibah',
                    'contents' => $this->input->post('hibah')
                ],
                 [
                    'name' => 'jumlah_hibah',
                    'contents' => $this->input->post('jumlahhibah')
                ],
                [
                    'name' => 'keterangan',
                    'contents' => $this->input->post('keteranganpenguatan')
                ],
                 [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
            ]
            ]);
        }
    }
    public function store(){
        $client     = new GuzzleHttp\Client();
        $filepks = $_FILES['filepks']['name'];
        $petalokasikerjasama = $_FILES['petalokasikerjasama']['name'];
        $rencanapelaksanaanprogram = $_FILES['rencanapelaksanaanprogram']['name'];
        $rencanakerjatahunan = $_FILES['rencanakerjatahunan']['name'];
        $monitoring = $_FILES['monitoring']['name'];
        $evaluasi = $_FILES['evaluasi']['name'];
        $laporanakhir = $_FILES['laporanakhir']['name'];
        $result = $client->post(constant('API_URL').'/penguatan-fungsi-kk',[
            'multipart'=>[
                [
                    'name' => 'file_pks',
                    'contents' => fopen($_FILES['filepks']['tmp_name'], 'r'),
                    'filename' => $filepks
                ],
                [
                    'name' => 'file_pks',
                    'contents' => 'dokumenpenguatanfungsikk/'.$filepks
                ],
                [
                    'name' => 'peta_lokasi_kerjasama',
                    'contents' => fopen($_FILES['petalokasikerjasama']['tmp_name'], 'r'),
                    'filename' => $petalokasikerjasama
                ],
                [
                    'name' => 'peta_lokasi_kerjasama',
                    'contents' => 'dokumenpenguatanfungsikk/'.$petalokasikerjasama
                ],
                [
                    'name' => 'rencana_pelaksanaan_program',
                    'contents' => fopen($_FILES['rencanapelaksanaanprogram']['tmp_name'], 'r'),
                    'filename' => $rencanapelaksanaanprogram
                ],
                [
                    'name' => 'rencana_pelaksanaan_program',
                    'contents' => 'dokumenpenguatanfungsikk/'.$rencanapelaksanaanprogram
                ],
                [
                    'name' => 'rencana_kerja_tahunan',
                    'contents' => fopen($_FILES['rencanakerjatahunan']['tmp_name'], 'r'),
                    'filename' => $rencanakerjatahunan
                ],
                [
                    'name' => 'rencana_kerja_tahunan',
                    'contents' => 'dokumenpenguatanfungsikk/'.$rencanakerjatahunan
                ],
                [
                    'name' => 'monitoring',
                    'contents' => fopen($_FILES['monitoring']['tmp_name'], 'r'),
                    'filename' => $monitoring
                ],
                [
                    'name' => 'monitoring',
                    'contents' => 'dokumenpenguatanfungsikk/'.$monitoring
                ],
                [
                    'name' => 'evaluasi',
                    'contents' => fopen($_FILES['evaluasi']['tmp_name'], 'r'),
                    'filename' => $evaluasi
                ],
                [
                    'name' => 'evaluasi',
                    'contents' => 'dokumenpenguatanfungsikk/'.$evaluasi
                ],
                [
                    'name' => 'laporan_akhir',
                    'contents' => fopen($_FILES['laporanakhir']['tmp_name'], 'r'),
                    'filename' => $laporanakhir
                ],
                [
                    'name' => 'laporan_akhir',
                    'contents' => 'dokumenpenguatanfungsikk/'.$laporanakhir
                ],
                [
                    'name' => 'judul_kerjasama',
                    'contents' => $this->input->post('judulkerjasama')
                ],
                [
                    'name' => 'mitra_kerja',
                    'contents' => $this->input->post('mitrakerja')
                ],
                [
                    'name' => 'kategori_mitra',
                    'contents' => $this->input->post('kategorimitra')
                ],
                [
                    'name' => 'persetujuan',
                    'contents' => $this->input->post('persetujuan')
                ],
                [
                    'name' => 'perjanjian_kerjasama',
                    'contents' => $this->input->post('perjanjiankerjasama')
                ],
                [
                    'name' => 'nota_kesepahaman',
                    'contents' => $this->input->post('notakesepahaman')
                ],
                [
                    'name' => 'dari',
                    'contents' => $this->input->post('daripenguatan')
                ],
                [
                    'name' => 'ke',
                    'contents' => $this->input->post('kepenguatan')
                ],
                [
                    'name' => 'upt',
                    'contents' => $this->input->post('uptpenguatanfungsi')
                ],
                [
                    'name' => 'hibah',
                    'contents' => $this->input->post('hibah')
                ],
                 [
                    'name' => 'jumlah_hibah',
                    'contents' => $this->input->post('jumlahhibah')
                ],
                [
                    'name' => 'keterangan',
                    'contents' => $this->input->post('keteranganpenguatan')
                ],
                 [
                    'name' => 'nama_kawasan',
                    'contents' => $this->input->post('namakawasan')
                ],
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/penguatan-fungsi-kk/'.$id);
    }
}