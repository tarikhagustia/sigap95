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
$route['default_controller'] = 'maintenance/tampil';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['demo'] = 'maintenance/demo';
// $route['backoffice'] = 'backoffice';
// $route['sitemaps\.xml'] = 'sitemaps';
// $route['teras-nasional'] = 'kanal/show_kanal/teras-nasional';
// $route['teras-nusantara'] = 'kanal/show_kanal/teras-nusantara';
// $route['teras-hukrim'] = 'kanal/show_kanal/teras-hukrim';
// $route['sosok'] = 'kanal/show_kanal/sosok';
// $route['wisata-kuliner'] = 'kanal/show_kanal/wisata-kuliner';
// $route['teras-tkp'] = 'kanal/show_kanal/teras-tkp';
// $route['teras-otonomi'] = 'kanal/show_kanal/teras-otonomi';
// $route['search'] = 'search';
// $route['teras-peristiwa/(:any)'] = 'peristiwa/index/$1';
// $route['(:any)'] = 'artikel/view_detail/$1';
// $route['teras-cianjur'] = 'FrontEnd/terasCianjur';
// $route['teras-kriminal'] = 'FrontEnd/terasKriminal';
// $route['teras-nasional'] = 'FrontEnd/terasNasional';
// $route['teras-ekonomi'] = 'FrontEnd/terasEkonomi';
// $route['teras-sehat'] = 'FrontEnd/terasSehat';
// $route['teras-islami'] = 'IslamicPage/terasIslami';
// $route['backoffice'] = 'Backoffice';
// $route['example'] = 'Example';
// $route['search'] = 'FrontEnd/secureSearch';
// $route['fokus'] = 'FrontEnd/fokus';
// $route['populer'] = 'FrontEnd/populer';
// $route['populer/(:any)'] = 'FrontEnd/populer/$1';
// $route['arsip'] = 'FrontEnd/indeks_mobile';
// $route['arsip/cari'] = 'FrontEnd/indeks_mobile/cari';
// $route['awesome'] = 'FrontEnd/customOnly';
// $route['(:any)'] = 'FrontEnd/viewMyArticle/$1';
