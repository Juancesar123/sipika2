<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadtemplateController extends CI_Controller {
    public function __construct()
    {
     //   $this->load->helper('download');
        parent::__construct();
          
    }
    public function pengelolaankawasan(){
        force_download('filetemplate/unitpengelolaankawasan.xlsx', NULL);
        return redirect('unit-pengelolaan-kawasan');
    }
    public function provinsi(){
        force_download('filetemplate/provinsitemplate.xlsx',NULL);
        return redirect('master-provinsi');
    }
    public function potensipiaps(){
        force_download('filetemplate/potensipiapstemplate.xlsx',NULL);
        return redirect('potensi-piaps');
    }
    public function sketsasejarah(){
        force_download('filetemplate/sketsa_sejarah.xlsx',NULL);
        return redirect('sketsa-sejarah');
    }
    public function kphktn(){
        force_download('filetemplate/kphk_tntemplate.xlsx',NULL);
        return redirect('kphk-tn');
    }
    public function kphknontn(){
        force_download('filetemplate/kphknon_tn.xlsx',NULL);
        return redirect('kphk-nontn');
    }
    public function usulantahura(){
        force_download('filetemplate/usulan-tahura.xlsx',NULL);
        return redirect('usulan-tahura');
    }
    public function kawasankonsevarsi(){
        force_download('filetemplate/kawasan_konservarsi.xlsx',NULL);
        return redirect('perkembangan-kawasan');
    }
    public function pengukuhankawasan(){
        force_download('filetemplate/pengukuhankawasan.xlsx',NULL);
        //return redirect('us');
    }
    public function ekflapangan(){
        force_download('filetemplate/ekflapangan.xlsx',NULL);
        //return redirect('us');
    }
    public function evaluasideskstudy(){
        force_download('filetemplate/evaluasideskstudy.xlsx',NULL);
    }
    public function indikasitora(){
        force_download('filetemplate/indikasitora.xlsx',NULL);
    }
    public function hutanadatdalamkk(){
        force_download('filetemplate/hutanadatdalamkk.xlsx',NULL);
    }
    public function desasekitarkk(){
        force_download('filetemplate/desasekitarkk.xlsx',NULL);
    }
    public function wilayahadat(){
        force_download('filetemplate/wilayahadat.xlsx',NULL);
    }
    public function permasalahanpengelolaankk(){
        force_download('filetemplate/permasalahanpengelolaankk.xlsx',NULL);
    }
    public function potensikawasankonservarsi(){
        force_download('filetemplate/potensikawasankonservarsi.xlsx',NULL);
    }
    public function keanekaragamanhayati(){
        force_download('filetemplate/keanekaragamanhayati.xlsx',NULL);
    }
    public function sosekbud(){
        force_download('filetemplate/sosekbud.xlsx',NULL);
    }
    public function penutupanlahanperkawasan(){
        force_download('filetemplate/penutupanlahanperkawasan.xlsx',NULL);
    }
    public function openareaperkawasan(){
        force_download('filetemplate/openareaperkawasan.xlsx',NULL);
    }
    public function petakawasankonsevarsi(){
        force_download('filetemplate/petakawasankonsevarsi.xlsx',NULL);
    }
    public function fotokawasankonservarsi(){
        force_download('filetemplate/fotokawasankonservarsi.xlsx',NULL);
    }
    public function penguatanfungsikk(){
        force_download('filetemplate/penguatanfungsikk.xlsx',NULL);
    }
    public function pembangunanstrategis(){
        force_download('filetemplate/pembangunanstrategis.xlsx',NULL);
    }
    public function kemitraankonservarsi(){
        force_download('filetemplate/kemitraankawasankonservarsi.xlsx',NULL);
    }
    public function perkembanganzonasitn(){
        force_download('filetemplate/perkembanganzonasitn.xlsx',NULL);
    }
    public function perkembanganbloktn(){
        force_download('filetemplate/perkembanganblokTn.xlsx',NULL);
    }
}

?>