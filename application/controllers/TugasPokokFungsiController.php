
<?php
class TugasPokokFungsiController extends CI_Controller {
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
        $result = $client->get(constant('API_URL').'/tugas-pokok-fungsi/');
        $hasil = $result->getBody()->getContents();
        $data['hasil'] =  json_decode($hasil,true);
        $data['userdata'] = $this->session->userdata('userdata');
        return $this->load->view('pages/tugaspokokfungsi',$data);
    }
    public function saveData(){
        $client     = new GuzzleHttp\Client();
        $id = $this->input->post('idperaturan');
        $result = $client->put(constant('API_URL').'/tugas-pokok-fungsi/'.$id,[
            'form_params'=>[
                'tugas' => $this->input->post('tugas'),
                'peraturan' => $this->input->post('peraturan'),
                'fungsi' => $this->input->post('fungsi'),
            ]
        ]);
    }
}