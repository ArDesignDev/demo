<?php

/*
@package sitename
	
	========================
		ENQUEUE FUNCTIONS
	========================
*/

function sitename_script_enqueue() {
	
	//css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0.', 'all'); //custom style;
	wp_enqueue_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext'); //font

	//js
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.12.3', true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);  // custom js, (true --> footer)
	
}

add_action( 'wp_enqueue_scripts', 'sitename_script_enqueue' );