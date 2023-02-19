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

/* MAIN ROUTES */
$route['default_controller'] = 'homepage/Homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/**
 * ==========================
 *
 * LANDING PAGE ROUTES
 *
 * ==========================
 */

/* fe routes*/
$route['homepage'] 							= 'homepage/Homepage';
$route['submit-email-fed']					= 'homepage/Homepage/emailSubmit';
$route['about'] 							= 'homepage/AboutUs';
$route['article'] 							= 'homepage/Article';
$route['articles/(:num)'] 					= 'homepage/Article';
$route['article/search']					= 'homepage/Article/search';
$route['article/search/(:any)']				= 'homepage/Article/search/$1';
$route['article/search/(:any)/(:num)']		= 'homepage/Article/search/$1/$2';
$route['article/read/(:any)']				= 'homepage/Article/details/$1';
$route['contact'] 							= 'homepage/ContactUs';
$route['mitra']								= 'homepage/MitraFeducation';
$route['presensi']							= 'homepage/presensiIntern';
$route['presensi/save']						= 'homepage/presensiIntern/save';
$route['presensi/(:any)']					= 'homepage/presensiIntern/saveFeedback/$1';
/* end of fe routes*/

/**
 * ==========================
 *
 * AUTHENTICATION ROUTES
 *
 * ==========================
 */

// Admin Auth
$route['admin/login']							= 'authentication/AdminAuth/login';
$route['admin/authentication']					= 'authentication/AdminAuth/authentication';
$route['admin/verify']							= 'authentication/AdminAuth/verify';
$route['admin/logout']							= 'authentication/AdminAuth/logout';
$route['admin/profile/password']					= 'authentication/AdminAuth/password';
$route['admin/profile/password/update']			= 'authentication/AdminAuth/passwordUpdate';
$route['admin/notification/setStatus/(:num)'] 	= 'authentication/AdminAuth/setNotificationOpened/$1';

// Member Auth
$route['member/login']						= 'authentication/MemberAuth/login';
$route['member/authentication']				= 'authentication/MemberAuth/authentication';
$route['member/register']					= 'authentication/MemberAuth/register';
$route['member/verify']						= 'authentication/MemberAuth/verify';
$route['member/logout']						= 'authentication/MemberAuth/logout';
$route['member/profile/password']			= 'authentication/MemberAuth/password';
$route['member/profile/password/update']	= 'authentication/MemberAuth/passwordUpdate';
$route['member/notification/setStatus/(:num)'] 	= 'authentication/MemberAuth/setNotificationOpened/$1';

/**
 * ==========================
 *
 * ADMIN ROUTES
 *
 * ==========================
 */

/* Admin */
$route['admin/dashboard'] 	= 'admin/Admin/index';

/* ./end of Admin routes */


/**
 * ==========================
 *
 * MEMBER ROUTES
 *
 * ==========================
 */

/* Member */
$route['member/dashboard'] 			= 'member/Member/index';

/* ./end oF Member Routes*/

/* /Member Testing Routes*/
$route['cronJobs/index'] 						= 'cronJobs/Jobs/index';
$route['cronJobs/imbal-jasa/simpanan/jobs']		= 'CronJobs/Jobs/doJobsSimpananMemberImbalJasa';
$route['cronJobs/imbal-jasa/tabungan/jobs'] 	= 'cronJobs/Jobs/doJobsTabunganImbalJasa';
$route['cronJobs/simpanan/expired-tenor/jobs']	= 'CronJobs/Jobs/doJobsSimpananExpiredTenor';
