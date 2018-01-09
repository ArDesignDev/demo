<?php

/*
@package sitename

	========================
     THEME SUPPORT FUNCTIONS
	========================
*/


// ACTIVATE MENUS
function sitename_theme_setup(){

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Menu');
	register_nav_menu('secondary', 'Secondary Menu');
	register_nav_menu('footer_one', 'First Footer Menu');
	register_nav_menu('footer_two', 'Second Footer Menu');
	register_nav_menu('projects_cat', 'Project Category Menu');
}

add_action('init', 'sitename_theme_setup');



// CUSTOM LOGO
add_theme_support('custom-header');



// ADD FEATURED IMAGE SUPPORT
function sitename_image_setup() {

	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 250, 150);
	add_image_size('large-image', 728, 300);
	add_image_size('small', 200, 220);
}

add_action('after_setup_theme', 'sitename_image_setup');



// EXCERCPT WORD COUNT LENGHT
function sitename_excerpt_length(){
	return 20;
}

add_filter('excerpt_length', 'sitename_excerpt_length' );



// ADD WIDGETS
 function ourWidgetsInit() {

 	register_sidebar( array(
 		'name' => 'Sidebar',
 		'id' => 'sidebar1',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));

 	register_sidebar( array(
 		'name' => 'Footer Area 1',
 		'id' => 'footer1',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));

 	register_sidebar( array(
 		'name' => 'Footer Area 2',
 		'id' => 'footer2',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));

 	register_sidebar( array(
 		'name' => 'Footer Area 3',
 		'id' => 'footer3',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));

 	register_sidebar( array(
 		'name' => 'Footer Area 4',
 		'id' => 'footer4',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));

    register_sidebar( array(
 		'name' => 'Single-side',
 		'id' => 'single-side',
 		'before_widget' => '<div class="widget-item">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="widget-title">',
 		'after_title' => '</h2>',
 		));
 }

add_action('widgets_init', 'ourWidgetsInit');

// CUSTOM POST TYPE ACTIVE

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

	function add_current_nav_class($classes, $item) {

		// Getting the current post details
		global $post;

		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite['slug'];

		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));

		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {

		   $classes[] = 'current-menu-item';

		}

		// Return the corrected set of classes to be added to the menu item
		return $classes;

	}

// SEARCH ONLY POST
function SearchFilter($query)
{
    if (($query->is_search)&&(!is_admin())) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');
