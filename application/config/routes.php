<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['favourites/create']    = 'favourites/create';
$route['favourites/(:any)']	   = 'favourites/view/$1';
$route['favourites'] 		   = 'favourites/index';
$route['mathafaka']			   = 'mathafaka/index';
$route['logout'] 			   = 'auth/logout';
$route['login'] 			   = 'auth/login';
$route['default_controller']   = 'pages/view';
$route['(:any)'] 			   = 'pages/view/$1';
$route['404_override'] 		   = '';
$route['translate_uri_dashes'] = FALSE;
