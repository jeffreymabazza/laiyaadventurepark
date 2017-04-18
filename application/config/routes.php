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
|	example.com/class/method/id/
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['admin/generate-admin-user'] = 'adminLogin/generate_admin_user';

$route['admin'] = 'adminLogin/redirect_to_login';
$route['admin/login'] = 'adminLogin/login';
$route['admin/logout'] = 'adminLogin/logout';
$route['admin/authenticate'] = 'adminLogin/authenticate';
$route['admin/dashboard'] = 'adminLogin/dashboard';

$route['admin/sliders'] = 'adminSlider/index';
$route['admin/sliders/create'] = 'adminSlider/create';
$route['admin/sliders/update/(:num)'] = 'adminSlider/update/$1';
$route['admin/sliders/delete/(:num)'] = 'adminSlider/delete/$1';

$route['admin/rates/packages'] = 'adminRates/packages_index';
$route['admin/rates/packages/create'] = 'adminRates/create_package';
$route['admin/rates/packages/update/(:num)'] = 'adminRates/update_package/$1';
$route['admin/rates/packages/delete/(:num)'] = 'adminRates/delete_package/$1';

$route['admin/rates'] = 'adminRates/rates_index';
$route['admin/rates/create'] = 'adminRates/rates_create';
$route['admin/rates/update/(:num)'] = 'adminRates/rates_update/$1';
$route['admin/rates/delete/(:num)'] = 'adminRates/rates_delete/$1';

$route['admin/rates/settings'] = 'adminSettings/index';
$route['admin/rates/settings/update'] = 'adminSettings/update';


/* End of file routes.php */
/* Location: ./application/config/routes.php */