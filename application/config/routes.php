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

$route['default_controller'] = 'home_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] =  FALSE;

$route['maestro/delete/(:any)'] = 'maestro_controller/delete/$1';
$route['maestro/create'] = 'maestro_controller/create';
$route['maestro/(:any)'] = 'maestro_controller/edit/$1';
$route['maestro'] = 'maestro_controller';

$route['home']= 'home_controller';
$route['alumno/delete/(:any)'] = 'alumno_controller/delete/$1';
$route['alumno/create'] = 'alumno_controller/create';
$route['alumno/(:any)'] = 'alumno_controller/edit/$1';
$route['alumno']= 'alumno_controller';

$route['grupo/delete/(:any)'] = 'grupo_controller/delete/$1';
$route['grupo/create'] = 'grupo_controller/create';
$route['grupo/(:any)'] = 'grupo_controller/edit/$1';
$route['grupo']= 'grupo_controller';

$route['materia/delete/(:any)'] = 'materia_controller/delete/$1';
$route['materia/create'] = 'materia_controller/create';
$route['materia/(:any)'] = 'materia_controller/edit/$1';
$route['materia']= 'materia_controller';


$route['calificacion/delete/(:any)'] = 'calificacion_controller/delete/$1';
$route['calificacion/create'] = 'calificacion_controller/create';
$route['calificacion/(:any)'] = 'calificacion_controller/edit/$1';
$route['calificacion']= 'calificacion_controller';

$route['clase/delete/(:any)'] = 'clase_controller/delete/$1';
$route['clase/create'] = 'clase_controller/create';
$route['clase/(:any)'] = 'clase_controller/edit/$1';
$route['clase']= 'clase_controller';

$route['carrera/delete/(:any)'] = 'carrera_controller/delete/$1';
$route['carrera/create'] = 'carrera_controller/create';
$route['carrera/(:any)'] = 'carrera_controller/edit/$1';
$route['carrera']= 'carrera_controller';


