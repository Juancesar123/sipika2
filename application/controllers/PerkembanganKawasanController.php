<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerkembanganKawasanController extends CI_Controller {
    public function index(){
        return $this->load->view('pages/perkembangankawasan');
    }
}