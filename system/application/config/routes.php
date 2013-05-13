<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "library";
$route['admin'] = "admin/Newcon";
$route['admin/login'] = "admin/Newcon/login";
$route['admin/logout'] = "admin/Newcon/logout";
$route['admin/request'] = "admin/Newcon/request";
$route['admin/users_search'] = "admin/Newcon/users_search";
$route['admin/users_search/(:num)'] = "admin/Newcon/users_search/$1";
$route['admin/add_books'] = "admin/Newcon/add_books";
$route['admin/add_ebooks'] = "admin/Newcon/add_ebooks";
$route['admin/journals'] = "admin/Newcon/journals";
$route['scaffolding_trigger'] = "";
$route['admin/member'] = "admin/Newcon/add_member";
$route['admin/add_member_process'] = "admin/Newcon/add_member_process";
$route['admin/home'] = "admin/Newcon/home";
$route['admin/facilities'] = "admin/Newcon/facilities";
$route['admin/hours'] = "admin/Newcon/hours";
$route['admin/rules'] = "admin/Newcon/rules";
$route['admin/fine']="admin/Newcon/fine_report";
$rout['admin/fine_search']="admin/Newcon/searchMember";







/* End of file routes.php */
/* Location: ./system/application/config/routes.php */