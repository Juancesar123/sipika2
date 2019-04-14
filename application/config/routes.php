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
$route['getDataKonservasi'] = 'perkembanganKawasanController/get';
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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
