<?php

/*
@package sitename
	
	========================
     SHORTCODES FUNCTIONS
	========================
*/


// SHORTCODES

function sitename_content($atts, $content = null){

	extract(shortcode_atts(array(
			'class' => ' '
		), $atts));

	return '<div class="content">' . do_shortcode($content) . '</div>';
}



// REGISTER SHORTCODES

function sitename_register_shortcode(){

	add_shortcode('content', 'madco_content');

}

add_action('init', 'sitename_register_shortcode');