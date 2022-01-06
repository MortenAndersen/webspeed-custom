<?php 
/*
Plugin Name: Webspeed custom
Version: 1.0
Plugin URI: https://www.web.dk
Description: Custom Plugin. Requirements: Advanced Custom Fields PRO
Author: Morten Andersen
Text Domain: webspeed-custom-domain
Author URI: https://www.web.dk.dk
*/

// Files
if( function_exists('acf_add_local_field_group') ):
	require_once ('files/type.php');
	require_once ('files/functions.php');
	require_once ('files/posttype.php');
	require_once ('files/shortcode.php');
endif;