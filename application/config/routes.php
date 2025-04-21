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


$route['default_controller'] = 'view/index';


$route['home/stories'] = 'view/stories';
$route['home/services'] = 'view/services';

$route['About'] = 'view/about';

$route['Buy/(:any)/(:num)'] = 'view/book/$1/$2';

$route['Event/(:any)/(:num)'] = 'view/main_cat/$1/$2';

$route['Book/(:any)/(:num)'] = 'view/product/$1/$2';

$route['Signin'] = 'view/signin';

$route['Login'] = 'view/login';


$route['Signup'] = 'view/signup';
$route['Register']='view/register';

$route['Forget-Password']='view/forget';
$route['change-password']='view/change_password';


$route['Logout'] = 'view/logout';


$route['Cart'] = 'view/cart';



$route['add-to-cart/(:any)/(:any)/(:any)/(:num)'] = 'view/add_to_cart/$1/$2/$3/$4';

$route['add-to-cart2'] = 'view/add_to_cart2';


$route['remove-from-cart/(:num)'] = 'view/remove_from_cart/$1';


$route['Bookings'] = 'view/orders';

$route['Ticket/(:num)'] = 'view/ticket/$1';

$route['View-Ticket'] = 'view/view_ticket';

$route['Print-Ticket/(:num)/(:num)'] = 'view/print_ticket/$1/$2';


$route['Checkout'] = 'view/checkout';



$route['add_address'] = 'view/add_address';
$route['edit_address'] = 'view/edit_address';


$route['place_order'] = 'view/place_order';

$route['Profile'] = 'view/profile';


$route['review']='view/review';

$route['Privacy'] = 'extra/privacy';
$route['Shipping-Policy'] = 'extra/disclaimer';
$route['Return-Refund'] = 'extra/return';
$route['TermsofServices'] = 'extra/termsofServices';
$route['enquiry_form'] = 'extra/enquiry_form';

$route['Know-Your-Hair'] = 'extra/knowyourair';
$route['FAQ'] = 'extra/faq';
$route['Ingredients'] = 'extra/ingredients';

$route['Pay'] = 'payment/pay';

$route['verify'] = 'payment/verify';
$route['Pay/Success'] = 'payment/pay_success';
$route['Pay/Success2'] = 'payment/pay_success2';

$route['clear'] = 'extra/clear_cache_all';

$route['404_override'] = 'view/index';
$route['translate_uri_dashes'] = FALSE;
