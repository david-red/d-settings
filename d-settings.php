<?php
/*
Plugin Name: D Settings
Plugin URI: http://ducdoan.com
Description: Settings Manager
Version: 1.0
Author: Duc Doan
Author URI: http://ducdoan.com
License: GPL2
*/

defined( 'ABSPATH' ) || exit;

define( 'DS_URL', plugin_dir_url( __FILE__ ) );
define( 'DS_DIR', plugin_dir_path( __FILE__ ) );

require_once DS_DIR . '/inc/common.php';

if ( is_admin() )
{
	require_once DS_DIR . '/inc/backend.php';
	require_once DS_DIR . '/inc/form.php';
}