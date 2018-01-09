<?php

// Remove emoji js and css
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Remove Contact Form 7 styles unless we're on the contact page
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );

function ac_remove_cf7_scripts() {
	if ( !is_page('contact') ) {
		wp_deregister_style( 'contact-form-7' );
	}
}

add_filter( 'wpcf7_load_css', '__return_false' );

// Remove wp-embend
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


// Remove version string from js and css
function sunset_remove_wp_version_strings( $src ){

  global $wp_version;
  parse_str( parse_url($src, PHP_URL_QUERY), $query );
  if ( !empty( $query['ver']) && $query['ver'] === $wp_version){
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}

add_filter( 'script_loader_src', 'sunset_remove_wp_version_strings');
add_filter( 'style_loader_src', 'sunset_remove_wp_version_strings');

// Remove metatag generator from header */
function sunset_remove_meta_version(){
  return '';
}

add_filter( 'the_generator', 'sunset_remove_meta_version');
