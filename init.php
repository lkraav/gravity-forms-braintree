<?php
/*
Plugin Name: Gravity Forms Braintree
Plugin URI: http://plugify.io/plugin/gravity-forms-braintree
Description: Allows you to accept credit card payments using Gravity Forms and Braintree Payments
Author: Luke Rollans
Version: 0.1
Author URI: http://www.lukerollans.me
*/

// Ensure WordPress has been bootstrapped
if( !defined( 'ABSPATH' ) )
	exit;

$path = trailingslashit( dirname( __FILE__ ) );

// Ensure Gravity Forms is installed and good to go
if( class_exists( 'GFForms' ) ) {

	GFForms::include_feed_addon_framework();

	// Require Braintree Payments core
	require_once $path . 'lib/Braintree.php';

	// Require plugin entry point
	require_once $path . 'lib/class.plugify-gform-braintree.php';

	// Fire off entry point
	new Plugify_GForm_Braintree();

}

?>