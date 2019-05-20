<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//AUTH
$route['registrasi']                    = 'auth/registrasi';
$route['logout']                        = 'auth/logout';
$route['login']                         = 'auth/login';
$route['verify_register/(:any)/(:any)'] = 'auth/verify_register/$1/$2';
$route['forgotPassword']                = 'auth/forgotPassword';
$route['newPassword/(:any)/(:any)']     = 'auth/newPassword/$1/$2';

//HOME
$route['rekomendasi']                   = 'home/rekomendasi';
// $route['proses-wp']                     = 'home/prosesWP';

//ADMIN
$route['admin']                         = 'admin';
$route['daftar-waralaba']               = 'admin/getAllWaralaba';
$route['detail-waralaba/(:any)']        = 'admin/getWaralaba/$1';
$route['create-waralaba']               = 'admin/createWaralaba';
$route['edit-waralaba/(:any)']          = 'admin/updateWaralaba/$1';
$route['delete-waralaba/(:any)']        = 'admin/deleteWaralaba/$1';