<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
//Route untuk perkembangan kawasan
$route['perkembangan-kawasan'] ='perkembanganKawasanController';
$route['savedDatakawasan'] = 'perkembanganKawasanController/store';
$route['getDataKonservasi/(:any)'] = 'perkembanganKawasanController/get/$1';
$route['DeletedDataKonservasi/(:any)'] = 'perkembanganKawasanController/destroy/$1';
$route['ubahDataKawasan'] = 'perkembanganKawasanController/update';
$route['getsingleDataKonservasi/(:any)']='perkembanganKawasanController/show/$1';
//end routenya
//routeuntukkphktn
$route['kphk-tn'] ='KphktnController';
$route['getDatakphkTn'] ='KphktnController/get';
$route['savedDatakphktn'] ='KphktnController/store';
$route['updateDataKphkTn'] ='KphktnController/update';
$route['deleteDatakphkTn/(:any)']='KphktnController/destroy/$1';
$route['showDatakphkTn/(:any)']='KphktnController/show/$1';
//endroutenya
//Route KPHK non TN
$route['kphk-nontn'] ='KphknontnController';
$route['getDatakphkNonTn'] ='KphknontnController/get';
$route['savedDatakphkNonTn'] ='KphknontnController/store';
$route['updateDataKphkNonTn'] ='KphknontnController/update';
$route['deleteDatakphkNonTn/(:any)']='KphknontnController/destroy/$1';
$route['showDatakphkNonTn/(:any)']='KphknontnController/show/$1';
//Endroute
//ROute untuk Usulan Tahura
$route['usulan-tahura'] ='UsulantahuraController';
$route['getDataUsulanTahura'] ='UsulantahuraController/get';
$route['savedDataUsulanTahura'] ='UsulantahuraController/store';
$route['updateDataUsulanTahura'] ='UsulantahuraController/update';
$route['deleteDataUsulanTahura/(:any)']='UsulantahuraController/destroy/$1';
$route['showDataUsulanTahura/(:any)']='UsulantahuraController/show/$1';
//endroute
//ROute untuk Sketsa Sejarah
$route['sketsa-sejarah'] ='SketsasejarahController';
$route['getDataSketsaSejarah'] ='SketsasejarahController/get';
$route['savedDataSketsaSejarah'] ='SketsasejarahController/store';
$route['updateDataSketsaSejarah'] ='SketsasejarahController/update';
$route['destroyDataSketsaSejarah/(:any)']='SketsasejarahController/destroy/$1';
$route['showDataSketsaSejarah/(:any)']='SketsasejarahController/show/$1';
//endroute
//Route untuk master provinsi
$route['master-provinsi'] ='MasterProvinsiController';
$route['getDataMasterProvinsi'] ='MasterProvinsiController/get';
$route['getDataMasterProvinsikecamatan'] ='MasterProvinsiController/getkecamatan';
$route['getDataMasterProvinsikabupaten'] ='MasterProvinsiController/getkabupaten';
$route['getDataMasterProvinsiKota/(:any)'] ='MasterProvinsiController/getKabupatenKota/$1';
$route['getDataKabupaten'] ='MasterProvinsiController/getKabupaten';
$route['savedDataMasterProvinsi'] ='MasterProvinsiController/store';
$route['updateDataMasterProvinsi'] ='MasterProvinsiController/update';
$route['showDataMasterProvinsi/(:any)'] ='MasterProvinsiController/show/$1';
$route['deleteDataMasterProvinsi/(:any)'] ='MasterProvinsiController/destroy/$1';
//endroute
//Route untuk master peraturan
$route['peraturan'] ='PeraturanController';
$route['getDataPeraturan'] ='PeraturanController/get';
$route['savedDataPeraturan'] ='PeraturanController/store';
$route['updateDataPeraturan'] ='PeraturanController/update';
$route['showDataPeraturan/(:any)'] ='PeraturanController/show/$1';
$route['deleteDataPeraturan/(:any)'] ='PeraturanController/destroy/$1';
//endroute
//Route untuk Perkembangan Zonasi TN
$route['perkembangan-zonasi-tn'] ='PerkembanganZonasiTnController';
$route['getDataPerkembanganzonasiTn'] ='PerkembanganZonasiTnController/get';
$route['savedDataperkembanganzonasitn'] ='PerkembanganZonasiTnController/store';
$route['updateDataPerkembanganzonasitn'] ='PerkembanganZonasiTnController/update';
$route['showDataPerkembanganzonasiTn/(:any)'] ='PerkembanganZonasiTnController/show/$1';
$route['deletePerkembanganZonasiTn/(:any)'] ='PerkembanganZonasiTnController/destroy/$1';
//endroute
//Route untuk Roles
$route['roles'] ='RolesController';
$route['getDataRoles'] ='RolesController/get';
$route['savedDataRoles'] ='RolesController/store';
$route['updateDataRoles'] ='RolesController/update';
$route['showDataRoles/(:any)'] ='RolesController/show/$1';
$route['destroyDataRoles/(:any)'] ='RolesController/destroy/$1';
//endroute
//Route untuk Users
$route['users'] ='UsersController';
$route['getDataUsers'] ='UsersController/get';
$route['savedDataUsers'] ='UsersController/store';
$route['updateDataUsers'] ='UsersController/update';
$route['showDataUsers/(:any)'] ='UsersController/show/$1';
$route['destroyDataUsers/(:any)'] ='UsersController/destroy/$1';
//endroute
//route untuk login
$route['login'] = 'AuthtenticationController/login';
$route['process_login'] = 'AuthtenticationController/processlogin';
$route['register'] = 'AuthtenticationController/register';
$route['logout'] = 'AuthtenticationController/logout';
//endroute
//route untuk login
$route['perkembangan-kawasan/managekawasan/(:any)'] = 'ManagekawasankonservasiController/show/$1';
$route['updatedatakawasan'] = 'ManagekawasankonservasiController/update';
//endroute
//routeuntukpengukuhankawasan
$route['getDataPengukuhanKawasan/(:any)'] ='PengukuhanKawasanController/getData/$1';
$route['savedDataPengukuhanKawasan'] ='PengukuhanKawasanController/store';
$route['updateDataPengukuhanKawasan'] ='PengukuhanKawasanController/update';
$route['showDataPengukuhanKawasan/(:any)'] ='PengukuhanKawasanController/show/$1';
$route['deleteDataPengukuhanKawasan/(:any)'] ='PengukuhanKawasanController/destroy/$1';
//endroute
//routeuntukevaluasifungsiDeskStudy
$route['getDataEvaluasiFungsiDeskStudy/(:any)'] ='EvaluasiFungsiDeskStudyController/getData/$1';
$route['savedDataEvaluasiFungsiDeskStudy'] ='EvaluasiFungsiDeskStudyController/store';
$route['updateDataEvaluasiFungsiDeskStudy'] ='EvaluasiFungsiDeskStudyController/update';
$route['showDataEvaluasiFungsiDeskStudy/(:any)'] ='EvaluasiFungsiDeskStudyController/show/$1';
$route['deleteEvaluasiFungsiDeskStudy/(:any)'] ='EvaluasiFungsiDeskStudyController/destroy/$1';
//endroute
//route untuk Evaluasi Ekf Lapangan
$route['getDataEvaluasiFungsiEkfLapangan/(:any)'] ='EvaluasiFungsiEkfLapanganController/getData/$1';
$route['savedDataEvaluasiFungsiEkfLapangan'] ='EvaluasiFungsiEkfLapanganController/store';
$route['updateDataEvaluasiFungsiEkfLapangan'] ='EvaluasiFungsiEkfLapanganController/update';
$route['showDataEvaluasiFungsiEkfLapangan/(:any)'] ='EvaluasiFungsiEkfLapanganController/show/$1';
$route['deleteEvaluasiFungsiEkfLapangan/(:any)'] ='EvaluasiFungsiEkfLapanganController/destroy/$1';
//endroute
//route untuk Evaluasi Ekf Lapangan
$route['getDataIndikasiTora/(:any)'] ='IndikasiToraController/getData/$1';
$route['savedDataIndikasiTora'] ='IndikasiToraController/store';
$route['updateDataIndikasiTora'] ='IndikasiToraController/update';
$route['showDataIndikasiTora/(:any)'] ='IndikasiToraController/show/$1';
$route['deleteIndikasiTora/(:any)'] ='IndikasiToraController/destroy/$1';
//endroute
//route untuk Hutan Adat dalam KK
$route['getDataHutanadat/(:any)'] ='HutanadatController/getData/$1';
$route['savedDataHutanadat'] ='HutanadatController/store';
$route['updateDataHutanadat'] ='HutanadatController/update';
$route['showDataHutanadat/(:any)'] ='HutanadatController/show/$1';
$route['deleteHutanadat/(:any)'] ='HutanadatController/destroy/$1';
//endroute
//route untuk Hutan Adat dalam KK
$route['getTugasPokokFungsi'] ='TugasPokokFungsiController/getData';
$route['tugas-pokok-fungsi'] ='TugasPokokFungsiController';
$route['SaveDataTugasPokokFungsi']='TugasPokokFungsiController/saveData';
//endroute
//route untuk Struktur Organisasi
$route['getStrukturOrganisasi'] ='StrukturOrganisasiController/getData';
$route['struktur-organisasi'] ='StrukturOrganisasiController';
$route['SaveDataStrukturOrganisasi']='StrukturOrganisasiController/saveData';
//endroute
//route untuk Website Terkait
$route['getwebsiteterkait'] ='WebsiteTerkaitController/get';
$route['website-terkait'] ='WebsiteTerkaitController';
$route['SaveDataWebsiteTerkait']='WebsiteTerkaitController/store';
$route['updateDataWebsiteTerkait'] ='WebsiteTerkaitController/update';
$route['showDataWebsiteTerkait/(:any)'] ='WebsiteTerkaitController/show/$1';
$route['deleteDataWebsiteTerkait/(:any)'] ='WebsiteTerkaitController/destroy/$1';
//endroute
//route untuk Unit Pengelolaan Kawasan
$route['getUnitPengelolaanKawasan'] ='UnitPengelolaanKawasanController/get';
$route['unit-pengelolaan-kawasan'] ='UnitPengelolaanKawasanController';
$route['SaveDataUnitPengelolaanKawasan']='UnitPengelolaanKawasanController/store';
$route['updateDataUnitPengelolaanKawasan'] ='UnitPengelolaanKawasanController/update';
$route['showDataUnitPengelolaanKawasan/(:any)'] ='UnitPengelolaanKawasanController/show/$1';
$route['deleteDataUnitPengelolaanKawasan/(:any)'] ='UnitPengelolaanKawasanController/destroy/$1';
//endroute
//route untuk kondisi kawasan
$route['saveKondisiKawasan'] = "KondisiKawasanController/SaveData";
$route['updateKondisiKawasan'] = "KondisiKawasanController/UpdateData";
//endroute
//route potensi kawasan konservarsi
$route['saveDataPotensiKawasanKonservarsi'] = "PotensiKawasanKonservarsiController/store";
$route['updateDataPotensiKawasanKonservarsi'] = "PotensiKawasanKonservarsiController/update";
$route['getDataPotensiKawasanKonservarsi/(:any)'] = "PotensiKawasanKonservarsiController/get/$1";
$route['showDataPotensiKawasanKonservarsi/(:any)'] = "PotensiKawasanKonservarsiController/show/$1";
$route['deleteDataPotensiKawasanKonservarsi/(:any)'] = "PotensiKawasanKonservarsiController/destroy/$1";
//endroute
//route Desa Sekitar KK
$route['saveDataDesaKK'] = "DesaSekitarKKController/store";
$route['updateDataDesaKK'] = "DesaSekitarKKController/update";
$route['getDataDesaKK/(:any)'] = "DesaSekitarKKController/getData/$1";
$route['showDataDesaKK/(:any)'] = "DesaSekitarKKController/show/$1";
$route['deleteDataDesaKK/(:any)'] = "DesaSekitarKKController/destroy/$1";
//endroute
//route Wilayah Adat
$route['saveDataWilayahAdat'] = "WilayahAdatController/store";
$route['updateDataWilayahAdat'] = "WilayahAdatController/update";
$route['getDataWilayahAdat/(:any)'] = "WilayahAdatController/getData/$1";
$route['showDataWilayahAdat/(:any)'] = "WilayahAdatController/show/$1";
$route['deleteDataWilayahAdat/(:any)'] = "WilayahAdatController/destroy/$1";
//endroute
//route Permasalahan KK
$route['saveDataPermasalahanKK'] = "PermasalahanKKController/store";
$route['updateDataPermasalahanKK'] = "PermasalahanKKController/update";
$route['getDataPermasalahanKK/(:any)'] = "PermasalahanKKController/getData/$1";
$route['showDataPermasalahanKK/(:any)'] = "PermasalahanKKController/show/$1";
$route['deleteDataPermasalahanKK/(:any)'] = "PermasalahanKKController/destroy/$1";
//endroute
//route Permasalahan KK
$route['saveDataSosekbud'] = "SosekbudController/store";
$route['updateDataSosekbud'] = "SosekbudController/update";
$route['getDataSosekbud/(:any)'] = "SosekbudController/getData/$1";
$route['showDataSosekbud/(:any)'] = "SosekbudController/show/$1";
$route['deleteDataSosekbud/(:any)'] = "SosekbudController/destroy/$1";
//endroute
//route Penutupan Lahan
$route['saveDataKawasan'] = "PenutupanLahanController/store";
$route['updateDataKawasan'] = "PenutupanLahanController/update";
$route['getDataKawasan/(:any)'] = "PenutupanLahanController/getData/$1";
$route['showDataKawasan/(:any)'] = "PenutupanLahanController/show/$1";
$route['deleteDataKawasan/(:any)'] = "PenutupanLahanController/destroy/$1";
//endroute
//route Open Area Kawasan
$route['saveDataOpenKawasan'] = "OpenAreaKawasanController/store";
$route['updateDataOpenKawasan'] = "OpenAreaKawasanController/update";
$route['getDataOpenKawasan/(:any)'] = "OpenAreaKawasanController/getData/$1";
$route['showDataOpenKawasan/(:any)'] = "OpenAreaKawasanController/show/$1";
$route['deleteDataOpenKawasan/(:any)'] = "OpenAreaKawasanController/destroy/$1";
//endroute
//route Kemitraan Konservasi
$route['saveDataKemitraanKonservasi'] = "KemitraanKonservasiController/store";
$route['updateDataKemitraanKonservasi'] = "KemitraanKonservasiController/update";
$route['getDataKemitraanKonservasi/(:any)'] = "KemitraanKonservasiController/getData/$1";
$route['showDataKemitraanKonservasi/(:any)'] = "KemitraanKonservasiController/show/$1";
$route['deleteDataKemitraanKonservasi/(:any)'] = "KemitraanKonservasiController/destroy/$1";
//endroute
//route Penguatan KK
$route['saveDataPenguatanKK'] = "PenguatanFungsiKKController/store";
$route['updateDataPenguatanKK'] = "PenguatanFungsiKKController/update";
$route['getDataPenguatanKK/(:any)'] = "PenguatanFungsiKKController/getData/$1";
$route['showDataPenguatanKK/(:any)'] = "PenguatanFungsiKKController/show/$1";
$route['deleteDataPenguatanKK/(:any)'] = "PenguatanFungsiKKController/destroy/$1";
//endroute
//route Pembangunan Strategis
$route['saveDataPembangunanStrategis'] = "PembangunanStrategisController/store";
$route['ubahDataPembangunanStrategis'] = "PembangunanStrategisController/update";
$route['getDataPembangunanStrategis/(:any)'] = "PembangunanStrategisController/getData/$1";
$route['showDataPembangunanStrategis/(:any)'] = "PembangunanStrategisController/show/$1";
$route['deleteDataPembangunanStrategis/(:any)'] = "PembangunanStrategisController/destroy/$1";
//endroute

//route potensi keaneka ragaman hayati
$route['simpanDataKeanekaRagamanHayatiTumbuhan'] = "KeanekaragamHayatiController/Savetumbuhan";
$route['showDataKeanekaragamHayatiTumbuhan/(:any)'] = "KeanekaragamHayatiController/Showtumbuhan/$1";
$route['ubahDataKeanekaRagamanHayatiTumbuhan'] = "KeanekaragamHayatiController/Ubahtumbuhan";
$route['getDataKeanekaragamHayatiTumbuhan/(:any)'] = "KeanekaragamHayatiController/tumbuhan/$1";
$route['deleteDataKeanekaragamHayatiTumbuhan/(:any)'] = "KeanekaragamHayatiController/Deletetumbuhan/$1";
$route['simpanDataKeanekaRagamanHayatiSatwa'] = "KeanekaragamHayatiController/Savesatwa";
$route['showDataKeanekaragamHayatiSatwa/(:any)'] = "KeanekaragamHayatiController/Showsatwa/$1";
$route['ubahDataKeanekaRagamanHayatiSatwa'] = "KeanekaragamHayatiController/Ubahsatwa";
$route['getDataKeanekaragamHayatiSatwa/(:any)'] = "KeanekaragamHayatiController/satwa/$1";
$route['deleteDataKeanekaragamHayatiSatwa/(:any)'] = "KeanekaragamHayatiController/Deletetumbuhan/$1";
$route['simpanDataKeanekaRagamanHayatiSpesiesKunci'] = "KeanekaragamHayatiController/Savespesieskunci";
$route['showDataKeanekaragamHayatiSpesiesKunci/(:any)'] = "KeanekaragamHayatiController/Showspesieskunci/$1";
$route['ubahDataKeanekaRagamanHayatiSpesiesKunci'] = "KeanekaragamHayatiController/Ubahspesieskunci";
$route['getDataKeanekaragamHayatiSpesiesKunci/(:any)'] = "KeanekaragamHayatiController/spesieskunci/$1";
$route['deleteDataKeanekaragamHayatiSpesiesKunci/(:any)'] = "KeanekaragamHayatiController/Deletespesieskunci/$1";
$route['simpanDataKeanekaRagamanHayatiTumbuhanDiLindungi'] = "KeanekaragamHayatiController/Savetumbuhandilindungi";
$route['showDataKeanekaragamHayatiTumbuhanDiLindungi/(:any)'] = "KeanekaragamHayatiController/Showtumbuhandilindungi/$1";
$route['ubahDataKeanekaRagamanHayatiTumbuhanDiLindungi'] = "KeanekaragamHayatiController/Ubahtumbuhandilindungi";
$route['getDataKeanekaragamHayatiTumbuhanDiLindungi/(:any)'] = "KeanekaragamHayatiController/tumbuhandilindungi/$1";
$route['deleteDataKeanekaragamHayatiTumbuhanDiLindungi/(:any)'] = "KeanekaragamHayatiController/Deletetumbuhandilindungi/$1";
$route['simpanDataKeanekaRagamanHayatiSatwaDiLindungi'] = "KeanekaragamHayatiController/Savesatwadilindungi";
$route['showDataKeanekaragamHayatiSatwaDiLindungi/(:any)'] = "KeanekaragamHayatiController/Showsatwadilindungi/$1";
$route['ubahDataKeanekaRagamanHayatiSatwaDiLindungi'] = "KeanekaragamHayatiController/Ubahsatwadilindungi";
$route['getDataKeanekaragamHayatiSatwaDiLindungi/(:any)'] = "KeanekaragamHayatiController/satwadilindungi/$1";
$route['deleteDataKeanekaragamHayatiSatwaDiLindungi/(:any)'] = "KeanekaragamHayatiController/Deletesatwadilindungi/$1";
$route['simpanDataKeanekaRagamanHayatiHabitatSatwa'] = "KeanekaragamHayatiController/Savehabitatsatwa";
$route['showDataKeanekaragamHayatiHabitatSatwa/(:any)'] = "KeanekaragamHayatiController/Showhabitatsatwa/$1";
$route['ubahDataKeanekaRagamanHayatiHabitatSatwa'] = "KeanekaragamHayatiController/Ubahhabitatsatwa";
$route['getDataKeanekaragamHayatiHabitatSatwa/(:any)'] = "KeanekaragamHayatiController/habitatsatwa/$1";
$route['deleteDataKeanekaragamHayatiHabitatSatwa/(:any)'] = "KeanekaragamHayatiController/Deletehabitatsatwa/$1";
$route['simpanDataKeanekaRagamanHayatiTumbuhanLiar'] = "KeanekaragamHayatiController/Savetumbuhanliar";
$route['showDataKeanekaragamHayatiTumbuhanLiar/(:any)'] = "KeanekaragamHayatiController/Showtumbuhanliar/$1";
$route['ubahDataKeanekaRagamanHayatiTumbuhanLiar'] = "KeanekaragamHayatiController/Ubahtumbuhanliar";
$route['getDataKeanekaragamHayatiTumbuhanLiar/(:any)'] = "KeanekaragamHayatiController/tumbuhanliar/$1";
$route['deleteDataKeanekaragamHayatiTumbuhanLiar/(:any)'] = "KeanekaragamHayatiController/Deletetumbuhanliar/$1";
$route['simpanDataKeanekaRagamanHayatiPotensi'] = "KeanekaragamHayatiController/Savepotensi";
$route['showDataKeanekaragamHayatiPotensi/(:any)'] = "KeanekaragamHayatiController/Showpotensi/$1";
$route['ubahDataKeanekaRagamanHayatiPotensi'] = "KeanekaragamHayatiController/Ubahpotensi";
$route['getDataKeanekaragamHayatiPotensi/(:any)'] = "KeanekaragamHayatiController/potensi/$1";
$route['deleteDataKeanekaragamHayatiPotensi/(:any)'] = "KeanekaragamHayatiController/Deletepotensi/$1";
$route['getDataSatwaEndemik/(:any)'] = "KeanekaragamHayatiController/getSatwaEndemik/$1";
$route['getDataTumbuhanEndemik/(:any)'] = "KeanekaragamHayatiController/getTumbuhanEndemik/$1";
$route['setDataSatwaEndemik'] = "KeanekaragamHayatiController/setSatwaEndemik";
$route['updateDataSatwaEndemik'] = "KeanekaragamHayatiController/updateSatwaEndemik";
$route['setDataTumbuhanEndemik'] = "KeanekaragamHayatiController/setTumbuhanEndemik";
$route['updateDataTumbuhanEndemik'] = "KeanekaragamHayatiController/updateTumbuhanEndemik";
$route['getDataSatwaPrioritas/(:any)'] = "KeanekaragamHayatiController/getSatwaPrioritas/$1";
$route['setDataSatwaPrioritas'] = "KeanekaragamHayatiController/setSatwaPrioritas";
$route['updateDataSatwaPrioritas'] = "KeanekaragamHayatiController/updateSatwaPrioritas";
//endroute
//Route Pencarian
$route['pencarian'] = "PencarianController";
$route['pencarian/cari/(:any)'] = "PencarianController/cari/$1";
//end Route
//route Peta Kawasan Konsevarsi
$route['saveDataPetaKawasanKonsevarsi'] = "PetaKawasanKonsevarsiController/store";
$route['updateDataPetaKawasanKonservarsi'] = "PetaKawasanKonsevarsiController/update";
$route['getDataPetaKawasanKonsevarsi/(:any)'] = "PetaKawasanKonsevarsiController/getData/$1";
$route['showDataPetaKawasanKonsevarsi/(:any)'] = "PetaKawasanKonsevarsiController/show/$1";
$route['deleteDataPetaKawasanKonsevarsi/(:any)'] = "PetaKawasanKonsevarsiController/destroy/$1";
$route['getAllImagesKawasanKonsevarsi/(:any)'] = "PetaKawasanKonsevarsiController/getimages/$1";
//endroute
//route Dashboard
$route['getDataDashboard/(:any)'] = "DashboardController/getCountData/$1";
$route['getDataAllDashboard'] = "DashboardController/getAllData/$1";
//endroute
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
