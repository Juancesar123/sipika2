
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
}