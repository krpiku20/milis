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
$route['default_controller'] = 'mili_controller';
$route['product_details'] = 'mili_controller/product_details';
$route['visit'] = 'mili_controller/visit';
$route['display_data'] = 'mili_controller/display_data';

$route['limit_change'] = 'mili_controller/limit_change';
$route['load_more'] = 'mili_controller/load_more';
$route['about_milis'] = 'mili_controller/about_milis';
$route['contact'] = 'mili_controller/contact';
$route['feed'] = 'mili_controller/feed';
$route['customer_reviews'] = 'mili_controller/customer_reviews';
$route['send_contact'] = 'mili_controller/send_contact';
$route['privacy_policy'] = 'mili_controller/privacy_policy';
$route['terms_conditions'] = 'mili_controller/terms_conditions';
$route['exchange_policy'] = 'mili_controller/exchange_policy';
$route['feedback'] = 'mili_controller/feedback';
$route['feedback_post'] = 'mili_controller/feedback_post';

$route['add_wishlist'] = 'mili_controller/add_wishlist';
$route['wishlist_fetch'] = 'mili_controller/wishlist_fetch';
$route['wishlist_update'] = 'mili_controller/wishlist_update';
$route['remove_cart'] = 'mili_controller/remove_cart';
$route['check_cart'] = 'mili_controller/check_cart';
$route['post_reviews'] = 'mili_controller/post_reviews';
$route['fetch_reviews'] = 'mili_controller/fetch_reviews';
$route['product_like'] = 'mili_controller/product_like';
$route['filter_tag'] = 'mili_controller/filter_tag';
$route['404_override'] = 'not_found';
$route['translate_uri_dashes'] = FALSE;
