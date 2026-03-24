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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-galaxy'] = 'welcome/about';
$route['about-parkx'] = 'welcome/about_parkx';
$route['case-study'] = 'welcome/casestudy';
$route['gallery'] = 'welcome/gallery';
$route['join-us'] = 'welcome/coming';
$route['our-blog'] = 'welcome/blog';
$route['contact-us'] = 'welcome/contact';

// Career Page Routes
$route['careers'] = 'welcome/careers';
$route['jobs/(:any)'] = 'welcome/job_detail/$1'; 
$route['apply/(:any)'] = 'welcome/apply/$1';

$route['service/(:any)'] = 'product/view/$1';

$route['casestudy-detail'] = 'welcome/casestudy_detail';
$route['blog-detail'] = 'welcome/blog_detail';

$route['admin'] = 'admin/index';
$route['general-setting'] = 'admin/general';
$route['manage-product'] = 'admin/product';
$route['manage-blog'] = 'admin/blog';
$route['manage-career'] = 'admin/career';
$route['manage-gallery'] = 'admin/gallery';
$route['manage-casestudy'] = 'admin/casestudy';
$route['login'] = 'admin/login';



