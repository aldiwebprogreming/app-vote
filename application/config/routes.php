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
$route['default_controller'] = 'ebunga/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['produk/detail/(:any)'] ='ebunga/detail/$1';
$route['ebunga/kab/(:any)'] ='ebunga/kab/$1';
$route['ebunga/kec/(:any)'] ='ebunga/kec/$1';
$route['ebunga/kel/(:any)'] ='ebunga/kel/$1';
$route['ebunga/cari/(:any)'] ='ebunga/cari/$1';
$route['registrasi'] ='ebunga/registrasi';
$route['login'] ='ebunga/login';
$route['logout'] ='ebunga/logout';
$route['dashboard'] ='peserta/index';
$route['upload'] ='peserta/upload';
$route['profil'] = 'peserta/profil';
$route['listvote'] = 'peserta/listVote';


// route admin
$route['admin/login'] ='auth/index';
$route['admin/dashboard'] ='admin/index';
$route['admin/data-peserta'] ='admin/data_peserta';
$route['admin/data-produk'] ='admin/data_produk';
$route['admin/data-vote'] ='admin/data_vote';
$route['admin/data-visitor'] ='admin/data_visitor';
$route['admin/vote_tertinggi/(:any)'] = 'admin/vote_tertinggi/$1';


// route sertifikat

$route['ebunga/sertifikat/(:any)'] = 'ebunga/sertifikat/$1';
$route['ebunga/email/(:any)'] = 'admin/email/$1';






