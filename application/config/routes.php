<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['add'] = 'Welcome/adddata';
$route['delete/(:num)'] = 'Welcome/delete/$1';
$route['edit/(:num)'] = 'Welcome/edit/$1';

$route['bisa-dijual'] = 'Welcome/bisa_dijual';
$route['tidak-bisa-dijual'] = 'Welcome/tidak_bisa_dijual';