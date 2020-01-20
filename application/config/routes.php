<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Login'] = 'Login_controller/Acreditar';
$route['Logout'] = 'Login_controller/Salir';


$route['Demo'] = 'Demo_controller';

$route['tusencuestas'] = 'Encuesta_controller/tusencuestas';
$route['resolverencuesta/(:any)'] = 'Encuesta_controller/resolverencuesta/$1';
$route['guardarEncuesta'] = 'Encuesta_controller/guardarEncuesta';
$route['nuevaencuesta'] = 'Encuesta_controller/nuevaencuesta';
$route['guardarEncuestaNueva'] = 'Encuesta_controller/guardarEncuestaNueva';
