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
	//persian words will not supported by this version we make it to load newer one
	//wp_deregister_script( 'renita_owl.carousel.min' );	
}

function wpdocs_enqueue_scripts_general() {
	//https://github.com/bassjobsen/Bootstrap-3-Typeahead
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
	//wp_deregister_style( 'renita_owl.carousel.min' );/this css throw mess page
	wp_deregister_style( 'renita_owl.theme.default.min' );
	//wp_deregister_style( 'renita_font-awesome' );
}
function wpdocs_enqueue_styles_general() {
	//wp_enqueue_style( 'renita_owl.carousel.min',plugins_url("OwlCarousel2/dist/assets/owl.carousel.min.css",__FILE__ ), array(), '2.3.4', true);
	//wp_enqueue_style( 'renita_owl.theme.default.min',plugins_url("OwlCarousel2/dist/assets/owl.theme.default.min.css",__FILE__ ), array(), '2.3.4', true);
}


