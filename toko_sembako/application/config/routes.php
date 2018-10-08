<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//barang
$route['Admin/show_barang']           = 'Admin/show_barang';
$route['Admin/delet_barang/(:any)']   = 'Admin/delet_barang/$1';
$route['Admin/update_barang/(:any)']  = 'Admin/update_barang/$1';
$route['Admin/create_barang']         = 'Admin/create_barang';
//kategori
$route['Admin/show_kategori']         = 'Admin/show_kategori';
$route['Admin/delet_kategori/(:any)'] = 'Admin/delet_kategori/$1';
$route['Admin/update_kategori/(:any)']= 'Admin/update_kategori/$1';
$route['Admin/create_kategori']       = 'Admin/create_kategori';
//galeri
$route['default_controller']          = 'news';
$route['view/news']                   = 'view/news';
$route['view/news/(:any)']            = 'view/news/$1';
//Login
$route['login']                       = 'news/view';

//
$route['404_override']                = '';
$route['translate_uri_dashes']        = FALSE;
