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
$route['default_controller'] = 'Home';
$route['policy'] = 'Home/policy';
$route['terms'] = 'Home/terms';
$route['signup/(:any)'] = 'Home/signup/$1';
$route['choose_signup'] = 'Home/choose_signup';
$route['login'] = 'Home/login';
$route['about'] = 'Home/about';
$route['whyus'] = 'Home/whyus';
$route['jobseeker/(:any)'] = 'Home/jobseeker/$1';
$route['employer/(:any)'] = 'Home/employer/$1';
$route['employer/(:any)/(:any)'] = 'Home/employer/$1/$2';
$route['contact'] = 'Home/contact';
$route['404_override'] = 'MyCustom404Ctrl';
$route['translate_uri_dashes'] = FALSE;
$route['confirm_registration/(:any)/(:any)'] = 'Home/confirm_registration/$1/$2';
$route['set-new-password/(:any)/(:any)'] = 'Home/set_new_password/$1/$2';
$route['logout'] = 'Home/logout';
$route['forgot_password'] = 'Home/forgot_password';
/* User start */
$route['job_list'] = 'Home/job_list';
$route['job_list/(:any)'] = 'Home/job_list/$1';
$route['view_job/(:any)'] = 'Home/view_job/$1';
$route['view_jobseeker/(:any)'] = 'Home/view_jobseeker/$1';
$route['apply_without_registration/(:any)'] = 'Home/apply_without_registration/$1';
$route['employer/employer_profile_view/(:any)'] = 'Home/employer/$1';

/*ajax*/

// $route['get_result_shortlist'] = 'JobSeeker_Porcess/get_result_shortlist';


$route['admin'] = 'admin/login';

/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'admin/login/loginMe';
$route['admin/dashboard'] = 'admin/user';
$route['admin/logout'] = 'admin/user/logout';

$route['admin/loadChangePass'] = "admin/user/loadChangePass";
$route['admin/changePassword'] = "admin/user/changePassword";
$route['admin/pageNotFound'] = "admin/user/pageNotFound";

$route['admin/forgotPassword'] = "admin/login/forgotPassword";
$route['admin/resetPasswordUser'] = "admin/login/resetPasswordUser";
$route['admin/resetPasswordConfirmUser'] = "admin/login/resetPasswordConfirmUser";
$route['admin/resetPasswordConfirmUser/(:any)'] = "admin/login/resetPasswordConfirmUser/$1";
$route['admin/resetPasswordConfirmUser/(:any)/(:any)'] = "admin/login/resetPasswordConfirmUser/$1/$2";
$route['admin/createPasswordUser'] = "admin/login/createPasswordUser";
/* End of file routes.php */

/*Category */
/*$route[ADMIN.'category'] = ADMIN."CategoryController";
$route[ADMIN.'category/add'] = ADMIN."CategoryController/showForm";
$route[ADMIN.'category/edit/(:any)'] = ADMIN."CategoryController/showForm/$1";
$route[ADMIN.'category/save'] = ADMIN."CategoryController/save";
*/

/*User */
$route[ADMIN.'user'] = ADMIN."HWT_User";
$route[ADMIN.'user/add'] = ADMIN."HWT_User/showForm";
$route[ADMIN.'user/edit/(:any)'] = ADMIN."HWT_User/showForm/$1";
$route[ADMIN.'user/save'] = ADMIN."HWT_User/save";
$route[ADMIN.'user/view/(:any)'] = ADMIN."HWT_User/view/$1";


/*$route[ADMIN.'home_content/(:any)'] = ADMIN."Content/content/1";
$route[ADMIN.'home_content/(:any)/save'] = ADMIN."Content/save_content";
*/

/*$route[ADMIN.'home_header/(:any)'] = ADMIN."CMS/about/1";
$route[ADMIN.'home_header/(:any)/save'] = ADMIN."CMS/save_about";*/

$route[ADMIN.'whyus/(:any)'] = ADMIN."CMS/about/1";
$route[ADMIN.'whyus/(:any)/save'] = ADMIN."CMS/save_about";


$route[ADMIN.'about/(:any)'] = ADMIN."CMS/about/2";
$route[ADMIN.'about/(:any)/save'] = ADMIN."CMS/save_about";

$route[ADMIN.'privacy-policy/(:any)'] = ADMIN."CMS/about/3";
$route[ADMIN.'privacy-policy/(:any)/save'] = ADMIN."CMS/save_about";

$route[ADMIN.'terms/(:any)'] = ADMIN."CMS/about/4";
$route[ADMIN.'terms/(:any)/save'] = ADMIN."CMS/save_about";

/*Our Clients */
$route[ADMIN.'our_clients'] = ADMIN."OurClients";
$route[ADMIN.'our_clients/add'] = ADMIN."OurClients/showForm";
$route[ADMIN.'our_clients/edit/(:any)'] = ADMIN."OurClients/showForm/$1";
$route[ADMIN.'our_clients/save'] = ADMIN."OurClients/save";

/*Slider */
$route[ADMIN.'slider'] = ADMIN."Slider";
$route[ADMIN.'slider/add'] = ADMIN."Slider/showForm";
$route[ADMIN.'slider/edit/(:any)'] = ADMIN."Slider/showForm/$1";
$route[ADMIN.'slider/save'] = ADMIN."Slider/save";

/*Slider */
$route[ADMIN.'industry'] = ADMIN."Industry";
$route[ADMIN.'industry/add'] = ADMIN."Industry/showForm";
$route[ADMIN.'industry/edit/(:any)'] = ADMIN."Industry/showForm/$1";
$route[ADMIN.'industry/save'] = ADMIN."Industry/save";

/*Testimonial */
$route[ADMIN.'testimonial'] = ADMIN."Testimonial";
$route[ADMIN.'testimonial/add'] = ADMIN."Testimonial/showForm";
$route[ADMIN.'testimonial/edit/(:any)'] = ADMIN."Testimonial/showForm/$1";
$route[ADMIN.'testimonial/save'] = ADMIN."Testimonial/save";

/*Job Function */
$route[ADMIN.'job_function'] = ADMIN."Job_Function";
$route[ADMIN.'job_function/add'] = ADMIN."Job_Function/showForm";
$route[ADMIN.'job_function/edit/(:any)'] = ADMIN."Job_Function/showForm/$1";
$route[ADMIN.'job_function/save'] = ADMIN."Job_Function/save";

/*Location */
$route[ADMIN.'location'] = ADMIN."Location";
$route[ADMIN.'location/add'] = ADMIN."Location/showForm";
$route[ADMIN.'location/edit/(:any)'] = ADMIN."Location/showForm/$1";
$route[ADMIN.'location/save'] = ADMIN."Location/save";

/*Education */
$route[ADMIN.'education'] = ADMIN."Education";
$route[ADMIN.'education/add'] = ADMIN."Education/showForm";
$route[ADMIN.'education/edit/(:any)'] = ADMIN."Education/showForm/$1";
$route[ADMIN.'education/save'] = ADMIN."Education/save";

/*Designation Level */
$route[ADMIN.'designation_level'] = ADMIN."Designation_Level";
$route[ADMIN.'designation_level/add'] = ADMIN."Designation_Level/showForm";
$route[ADMIN.'designation_level/edit/(:any)'] = ADMIN."Designation_Level/showForm/$1";
$route[ADMIN.'designation_level/save'] = ADMIN."Designation_Level/save";

/*JobType */
$route[ADMIN.'jobtype'] = ADMIN."JobType";
$route[ADMIN.'jobtype/add'] = ADMIN."JobType/showForm";
$route[ADMIN.'jobtype/edit/(:any)'] = ADMIN."JobType/showForm/$1";
$route[ADMIN.'jobtype/save'] = ADMIN."JobType/save";

/*Salary */
$route[ADMIN.'salary'] = ADMIN."Salary";
$route[ADMIN.'salary/add'] = ADMIN."Salary/showForm";
$route[ADMIN.'salary/edit/(:any)'] = ADMIN."Salary/showForm/$1";
$route[ADMIN.'salary/save'] = ADMIN."Salary/save";

/*Category */
$route[ADMIN.'category'] = ADMIN."Category";
$route[ADMIN.'category/add'] = ADMIN."Category/showForm";
$route[ADMIN.'category/edit/(:any)'] = ADMIN."Category/showForm/$1";
$route[ADMIN.'category/save'] = ADMIN."Category/save";

/*$route[ADMIN.'terms/(:any)'] = ADMIN."CMS/about/3";
$route[ADMIN.'terms/(:any)/save'] = ADMIN."CMS/save_about";

$route[ADMIN.'services_contain/(:any)'] = ADMIN."CMS/about/4";
$route[ADMIN.'services_contain/(:any)/save'] = ADMIN."CMS/save_about";
*/