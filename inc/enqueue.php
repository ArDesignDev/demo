<?php

/*
@package sitename

	========================
		ENQUEUE FUNCTIONS
	========================
*/

function sitename_script_enqueue() {

	//css
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=latin-ext'); // Roboto font
		wp_enqueue_style('Railway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700&amp;subset=latin-ext'); // Railway font
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0.', 'all'); //custom style;

	//js
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.12.3', true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);  // custom js, (true --> footer)

}

add_action( 'wp_enqueue_scripts', 'sitename_script_enqueue' );
