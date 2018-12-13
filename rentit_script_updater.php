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
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_scripts_general', 400 );
add_action( 'wp_enqueue_scripts', 'wpdocs_enqueue_scripts_general', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'wpdocs_dequeue_scripts_general', 400 );
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_scripts_general', 400 );
/******************************************/
//Updating scripts
/******************************************/
function wpdocs_dequeue_scripts_general() {
	wp_deregister_script( 'renita_moment-with-locales' );
	//wp_deregister_script( 'renita_bootstrap-datetimepicker' );
	//persian words will not supported by this version we make it to load newer one
	wp_deregister_script( 'renita_bootstrap-typeahead' );
	//wp_deregister_script( 'renita_owl.carousel.min' );	
}

function wpdocs_enqueue_scripts_general() {
	//https://github.com/moment/moment
	wp_enqueue_script( 'renita_moment-with-locales',plugins_url("moment/min/moment-with-locales.min.js",__FILE__ ),array(), '2.22.2', true );
	//https://github.com/tempusdominus/bootstrap-4
	//wp_enqueue_script( 'renita_bootstrap-datetimepicker',plugins_url("bootstrap-4-datetime-picker/build/js/tempusdominus-bootstrap-4.min.js",__FILE__ ), array( 'jquery' ), '5.1.2', true);//throw erorr
	//https://github.com/bassjobsen/Bootstrap-3-Typeahead
	wp_enqueue_script( 'renita_bootstrap-typeahead',plugins_url("Bootstrap-3-Typeahead/bootstrap3-typeahead-MYEDIT.js",__FILE__ ), array( 'jquery' ), '4.0.2', true);
	//https://github.com/OwlCarousel2/OwlCarousel2
	//wp_enqueue_script( 'renita_owl.carousel.min', plugins_url("OwlCarousel2/dist/owl.carousel.min.js",__FILE__ ), array( 'jquery' ), '2.3.4', true);
}
/******************************************/
//Updating styles
/******************************************/
add_action( 'admin_enqueue_scripts', 'wpdocs_dequeue_styles_general', 400 );
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_styles_general', 400 );
/* add forntend */
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_styles_general', 400 );
add_action( 'wp_enqueue_scripts', 'wpdocs_enqueue_styles_general', 400 );
function wpdocs_dequeue_styles_general() {
	//renita_mb
	//wp_deregister_style( 'renita_bootstrap-datetimepicker');	
	//wp_deregister_style( 'renita_owl.carousel.min' );/this css throw mess page
	wp_deregister_style( 'renita_owl.theme.default.min' );
	//wp_deregister_style( 'renita_font-awesome' );
}
function wpdocs_enqueue_styles_general() {
	//wp_enqueue_style( 'renita_bootstrap-datetimepicker',plugins_url("bootstrap-4-datetime-picker/build/css/tempusdominus-bootstrap-4.min.css",__FILE__ ), array(), '5.1.2', true);
	//wp_enqueue_style( 'renita_owl.carousel.min',plugins_url("OwlCarousel2/dist/assets/owl.carousel.min.css",__FILE__ ), array(), '2.3.4', true);
	//wp_enqueue_style( 'renita_owl.theme.default.min',plugins_url("OwlCarousel2/dist/assets/owl.theme.default.min.css",__FILE__ ), array(), '2.3.4', true);
	//wp_enqueue_style( 'renita_font-awesome',plugins_url("Font-Awesome/css/fontawesome.min.css",__FILE__ ), array(), '5.6.0', true);
}


