<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
            $token = $this->session->userdata('token');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function index(){
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/profile',$data);
    }
    public function editprofile($id){
        $token = $this->session->userdata('token');
        $client     = new GuzzleHttp\Client();
        if(empty($_FILES['foto']['name'])){
            $result = $client->patch(constant('API_URL').'/users/'.$id,[
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ],
                'multipart' => [
                    [
                        'name' => 'email',
                        'contents' => $this->input->post('email')
                    ],
                    [
                        'name' => 'password',
                        'contents' => 'admin123'
                    ],
                    [
                        'name' => 'fullname',
                        'contents' => $this->input->post('name')
                    ],
                    [
                        'name' => 'nomor_telepon',
                        'contents' => $this->input->post('nomortelepon')
                    ],
                ]
            ]);
            $detailsData    =   $this->session->userdata('userdata');
            $detailsData['email']= $this->input->post('email');
            $detailsData['fullname']= $this->input->post('name');
            $detailsData['nomor_telepon']= $this->input->post('nomortelepon');
            $this->session->set_userdata('userdata', $detailsData); 
            redirect('/profile', 'refresh');
            //print_r($detailsData);
        }else{
            $foto = $_FILES['foto']['name'];
            $result = $client->patch(constant('API_URL').'/users/'.$id,[
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ],
                'multipart' => [
                   [
                        'name' => 'foto',
                        'contents' => fopen($_FILES['foto']['tmp_name'], 'r'),
                        'filename' => $foto
                    ],
                    [
                        'name' => 'foto',
                        'contents' => 'userfoto/'.$foto
                    ],
                    [
                        'name' => 'email',
                        'contents' => $this->input->post('email')
                    ],
                    [
                        'name' => 'password',
                        'contents' => $this->input->post('password')
                    ],
                    [
                        'name' => 'fullname',
                        'contents' => $this->input->post('name')
                    ],
                    [
                        'name' => 'nomor_telepon',
                        'contents' => $this->input->post('nomortelepon')
                    ],
                ] 
            ]);
            $detailsData    =   $this->session->userdata('userdata');
            $detailsData['email']= $this->input->post('email');
            $detailsData['fullname']= $this->input->post('name');
            $detailsData['nomor_telepon']= $this->input->post('nomortelepon');
            $detailsData['foto']= 'userfoto/'.$foto;
            $this->session->set_userdata('userdata', $detailsData); 
            redirect('/profile', 'refresh');
            //print_r($detailsData);
        }
         
    }
    public function store(){
        $client     = new GuzzleHttp\Client();
        $result = $client->post(constant('API_URL').'/roles',[
            'form_params' => [
                'roles' => strtoupper($this->input->post('roles'))
            ]
        ]);
    }
    public function destroy($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->delete(constant('API_URL').'/roles/'.$id);
        echo 'sukses';
    }
    public function show($id){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/roles/'.$id);
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
        $id = $this->input->post('id');
        $result = $client->patch(constant('API_URL').'/roles/'.$id,[
            'form_params' => [
                'roles' => $this->input->post('roles')
            ] 
        ]);
    }
}
