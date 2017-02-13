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

/* =================== MYADMIN ========================= */
$route['myadmin']['get'] = 'admin_dashboard/default_page';
$route['myadmin/signin']['get'] = 'auth/login';
$route['myadmin/signin']['post'] = 'auth/login_do';
$route['myadmin/materi']['get'] = 'admin_materi/view';
$route['myadmin/materi/edit']['post'] = 'admin_materi/edit_save';
$route['myadmin/materi/hapus/(:num)'] = 'admin_materi/delete/$1';
$route['myadmin/materi/edit/(:num)']['get'] = 'admin_materi/edit/$1';
$route['myadmin/materi/upload']['get'] = 'admin_upload/upload';
$route['myadmin/materi/upload']['post'] = 'admin_upload/upload/save';
$route['myadmin/user/list']['get'] = 'admin_user/show';
$route['myadmin/user/new']['get'] = 'admin_user/new_form';
$route['myadmin/user/new']['post'] = 'admin_user/new_save';
$route['myadmin/user/delete/(:num)'] = 'admin_user/delete/$1';
$route['myadmin/user/edit/(:num)']['get'] = 'admin_user/edit_form/$1';
$route['myadmin/user/edit']['post'] = 'admin_user/edit_save';
$route['myadmin/category'] = 'admin_category/index';
$route['myadmin/category/new']['get'] = 'admin_category/new_';
$route['myadmin/category/new']['post'] = 'admin_category/save_category';
$route['myadmin/category/delete/(:num)'] = 'admin_category/hapus/$1';
$route['myadmin/category/edit/(:num)'] = 'admin_category/edit_form/$1';
$route['myadmin/category/edit/save'] = 'admin_category/edit_save';
$route['myadmin/author/edit']['get'] = 'admin_author/edit_profile';
$route['myadmin/author/edit']['post'] = 'admin_author/edit_save';
$route['myadmin/article/new']['get'] = 'admin_article/new_article';
$route['myadmin/article/new']['post'] = 'admin_article/save_article';
$route['myadmin/article/list']['get'] = 'admin_article/list_';
$route['myadmin/article/delete/(:num)']['get'] = 'admin_article/hapus/$1';
$route['myadmin/article/edit/(:num)']['get'] = 'admin_article/edit_view/$1';
$route['myadmin/article/edit']['post'] = 'admin_article/edit_save';
$route['myadmin/article/get/(:any)']['get'] = 'admin_article/get_artilce/$1';
$route['myadmin/headline/home']['get'] = 'admin_headline/home_headline';
$route['myadmin/headline/home']['post'] = 'admin_headline/home_headline_add';
$route['myadmin/featured/home/video']['get'] = 'admin_featured/index';
$route['myadmin/featured/home/video']['post'] = 'admin_featured/simpan';
$route['myadmin/ads/leaderboard']['get'] = 'admin_ads/leaderboard';
$route['myadmin/ads/leaderboard']['post'] = 'admin_ads/leaderboard_post';
$route['myadmin/ads/home']['get'] = 'admin_ads/home_ads';
$route['myadmin/ads/home']['post'] = 'admin_ads/home_ads_post';
$route['myadmin/ads/kanal']['get'] = 'admin_ads/kanal_ads';
$route['myadmin/ads/kanal']['post'] = 'admin_ads/kanal_post';
$route['myadmin/ads/article']['get'] = 'admin_ads/article_ads';
$route['myadmin/ads/article']['post'] = 'admin_ads/article_ads_post';

/*================ Kanal ======================== */
$route['sigap-sosial']['get'] = 'kanal/show_kanal/sigap-sosial';
$route['sigap-24']['get'] = 'kanal/show_kanal/sigap-24';
$route['sigap-lantas']['get'] = 'kanal/show_kanal/sigap-lantas';
$route['info-publik']['get'] = 'kanal/show_kanal/info-publik';
$route['promotor']['get'] = 'kanal/show_kanal/promotor';
$route['news-video']['get'] = 'kanal/show_kanal/news-video';
$route['wisata-kuliner']['get'] = 'kanal/show_kanal/wisata-kuliner';

/*================ Article ======================== */
$route['news/read/(:any)\.html']['get'] = 'article/news_read/$1';
