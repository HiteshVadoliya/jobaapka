<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


$CI =& get_instance();
$CI->load->database();
$langs_query = $CI->db->query('SELECT paypal_username,paypal_password,paypal_sign FROM `site_settings` WHERE `id` = 1');
$result = $langs_query->result_array() ;

$pap_user = $result[0]["paypal_username"];
$pap_pass = $result[0]["paypal_password"];
$pap_sign = $result[0]["paypal_sign"];

// ------------------------------------------------------------------------
// Paypal library configuration
// ------------------------------------------------------------------------

// Use PayPal on Sandbox or Live
$config['sandbox'] = TRUE; // FALSE for live environment

// PayPal Business Email
$config['business'] = 'crazycoder08@gmail.com';

// If (and where) to log ipn to file
$config['paypal_lib_ipn_log_file'] = BASEPATH . 'logs/paypal_ipn.log';
$config['paypal_lib_ipn_log'] = TRUE;

// Where are the buttons located at 
$config['paypal_lib_button_path'] = 'buttons';

// What is the default currency?
$config['paypal_lib_currency_code'] = 'USD';



// Use for refund 
// Get Credential from following link :
// https://www.sandbox.paypal.com/businessprofile/mytools/apiaccess/firstparty/signature
/*$config['paypal_username'] = 'crazycoder08_api1.gmail.com';
$config['paypal_password'] = '3QHTKRZ349C2RP26';
$config['paypal_sign'] = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AMpj3My2eV3oX2kxeehXwKvcYYRn';
*/

$config['paypal_username'] =  $pap_user;
$config['paypal_password'] = $pap_pass;
$config['paypal_sign'] = $pap_sign;