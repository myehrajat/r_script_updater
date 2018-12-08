<?php
/**
 * @package Rentit_Script_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Script Updater
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme js and css file up to date
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Script_Updater
*/
/* add forntend */
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_scripts_general', 600 );
add_action( 'wp_enqueue_scripts', 'wpdocs_enqueue_scripts_general', 600 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'wpdocs_dequeue_scripts_general', 600 );
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_scripts_general', 600 );
/******************************************/
//Updating scripts
/******************************************/
function wpdocs_dequeue_scripts_general() {
	wp_deregister_script( 'renita_moment-with-locales' );
	wp_deregister_script( 'renita_bootstrap-datetimepicker' );
	
}

function wpdocs_enqueue_scripts_general() {
	wp_enqueue_script( 'renita_moment-with-locales', 
					  plugins_url("moment/min/moment-with-locales.min.js",__FILE__ ),array(), '2.22.2', true );
	wp_enqueue_script( 'renita_bootstrap-datetimepicker', 
					  plugins_url("bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",__FILE__ ), array( 'jquery' ), '4.17.47', true);
}
/******************************************/
//Updating styles
/******************************************/
add_action( 'admin_enqueue_scripts', 'wpdocs_dequeue_styles_general', 999 );
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_styles_general', 999 );

function wpdocs_dequeue_styles_general() {
	wp_deregister_style('renita_bootstrap-datetimepicker');	
}
function wpdocs_enqueue_styles_general() {
	wp_enqueue_style( 'renita_bootstrap-datetimepicker', 
					 plugins_url("bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",__FILE__ ), array(), '4.17.47', true);
}


