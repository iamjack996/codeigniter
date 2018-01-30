<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['memories'] = 'memories/view';
$route['GetCreate'] = 'memories/createMemo';
$route['createPost'] = 'memories/createPost';

$route['(:any)'] = 'memories/view/$1';
$route['memories/(:any)'] = 'memories/viewOne/$1';
$route['updatePost/(:any)'] = 'memories/updatePost/$1';
$route['delete/(:any)'] = 'memories/delete/$1';
$route['memories/update/(:any)'] = 'memories/updateMemo/$1';
