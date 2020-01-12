<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



define('URL',APP_URL);
define('ADMIN','admin/');
define('ADMIN_LINK',APP_URL.ADMIN);
define('PUBLIC_FILE',URL.'public/');
define('FRONT',PUBLIC_FILE.'front/');
define('FRONT_CSS',PUBLIC_FILE.'front/css/');
define('FRONT_JS',PUBLIC_FILE.'front/js/');
define('FRONT_IMG',PUBLIC_FILE.'front/images/');
define('FRONT_IMG2',PUBLIC_FILE.'front/img/');
define('JS',PUBLIC_FILE.'images/');
define('ADMIN_CSS_JS',PUBLIC_FILE.'backend/');
define('PLUGINS',PUBLIC_FILE.'plugins/');

// define('ASSETPATH', URL.'assets/');
define('MyPath', 'public/uploads/files/');
define('DEFAULT_IMG',APP_URL.'public/default.jpg');
define('IMG_SRC','public/uploads/');
define('IMG_SLIDER','public/uploads/slider/');
define('IMG_CLIENT','public/uploads/client/');
define('IMG_INDUSTRY','public/uploads/industry/');
define('IMG_COMPANY_LOGO','public/uploads/company_logo/');
define('IMG_PROFILE','public/uploads/profile/');

define('IMG_SIGNUP','public/uploads/signup/');
define('IMG_HOME','public/uploads/home/');
define('IMG_TESTIMONIAL','public/uploads/testimonial/');
define('IMG_SERVICES','public/uploads/services/');
define('IMG_OPPORTUNITY','public/uploads/opportunity/');
define('IMG_OURTEAM','public/uploads/ourteam/');
define('IMG_WORKSHOPSLIDER','public/uploads/workshop_slider/');
define('IMG_GALLERY','public/uploads/gallery/');
define('IMG_PRODUCT','public/uploads/product/');
define('IMG_PORTFOLIO','public/uploads/portfolio/');
// define('IMG_SRC_UPLOAD','public/upload/');
define('USER','user/');

define('NO','0');
define('YES','1');
define('SUCCESS','1');
define('FAIL','0');
define('ENCRYPTED','5');
define('DECRYPTED','5');
define('PREFIX','HWT_');
define('MSG_AUTH_FAIL','Authentication Token Fail');
define('LIMIT','10');
define('CURR_SYMBOL','$');
define('ALPHA_DEV','Y');
define('FROM_EMAIL','hmvadoliya.iipl2013@gmail.com');
define('SUPPORT_EMAIL','info@job.in');
define('SITE_NAME','JobAapka');
define('COPY_RIGHT_YEAR','2019');
define('DAY','182 days');



defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/**** USER DEFINED CONSTANTS **********/

define('ROLE_ADMIN',                            '1');
define('ROLE_MANAGER',                         	'2');
define('ROLE_EMPLOYEE',                         '3');

define('SEGMENT',								2);

/************************** EMAIL CONSTANTS *****************************/

define('EMAIL_FROM',                            'Your from email');		// e.g. email@example.com
define('EMAIL_BCC',                            	'Your bcc email');		// e.g. email@example.com
define('FROM_NAME',                             'CIAS Admin System');	// Your system name
define('EMAIL_PASS',                            'Your email password');	// Your email password
define('PROTOCOL',                             	'smtp');				// mail, sendmail, smtp
define('SMTP_HOST',                             'Your smtp host');		// your smtp host e.g. smtp.gmail.com
define('SMTP_PORT',                             '25');					// your smtp port e.g. 25, 587
define('SMTP_USER',                             'Your smtp user');		// your smtp user
define('SMTP_PASS',                             'Your smtp password');	// your smtp password
define('MAIL_PATH',                             '/usr/sbin/sendmail');