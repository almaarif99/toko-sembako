<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/delet/(:any)']   = 'admin/delet/$1';
$route['admin/update/(:any)']  = 'admin/update/$1';
$route['admin/create']         = 'admin/create';
$route['default_controller']   = 'news/view';
$route['view/news']            = 'view/news';
$route['view/news/(:any)']     = 'view/news/$1';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
