
<?php
class StrukturOrganisasiController extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $userdata = $this->session->userdata('userdata');
			if(is_null($userdata)){
				redirect('/login','refresh');
			}
          
    }
    public function index(){
        $client     = new GuzzleHttp\Client();
        $result = $client->get(constant('API_URL').'/struktur-organisasi/');
        $hasil = $result->getBody()->getContents();
        $data['hasil'] =  json_decode($hasil,true);
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/strukturorganisasi',$data);
    }
    public function saveData(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idstrukturorganisasi');
        $name = $_FILES['strukturorganisasi']['name'];
        $result = $client->put(constant('API_URL').'/struktur-organisasi/'.$id,[
            'multipart'=>[
                [
                    'name' => 'strukturorganisasi',
                    'contents' => fopen($_FILES['strukturorganisasi']['tmp_name'], 'r'),
                    'filename' => $name
                ],
                [
                    'name' => 'strukturorganisasi',
                    'contents' => 'strukturorganisasi/'.$name
                ],
            ]
        ]);
    }
}