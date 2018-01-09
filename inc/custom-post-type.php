<?php

/*
@package sitename

	========================
     CUSTOM POST TYPE FUNCTIONS
	========================
*/



//PROJECTS CUSTOM POST TYPE

function projects_custom_post_type (){

	$labels = array(
		'name' => 'Projekti',
		'singular_name' => 'Projekt',
		'add_new' => 'Dodaj novo',
		'all_items' => 'Vsi',
		'add_new_item' => 'Dodaj',
		'edit_item' => 'Uredi',
		'new_item' => 'Nov projekt',
		'view_item' => 'Poglej',
		'search_item' => 'Išči',
		'not_found' => 'Ni prispevkov',
		'not_found_in_trash' => 'Nič projektov v košu',
		'parent_item_colom' => 'Parent element',
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'custom-fields',
		),
		'taxonomies' => array('projekti-kategorije'),
		'menu_position' => 5,
		'exclude_from_search' => false,
		'menu_icon'   => 'dashicons-images-alt',
	);

  register_post_type('projekti', $args);

}


//SERVICES CUSTOM POST TYPE

function services_custom_post_type (){

	$labels = array(
		'name' => 'Storitve',
		'singular_name' => 'Storitev',
		'add_new' => 'Dodaj novo',
		'all_items' => 'Vsi',
		'add_new_item' => 'Dodaj',
		'edit_item' => 'Uredi',
		'new_item' => 'Nova storitev',
		'view_item' => 'Poglej',
		'search_item' => 'Išči',
		'not_found' => 'Ni prispevkov',
		'not_found_in_trash' => 'Nič storitev v košu',
		'parent_item_colom' => 'Parent element',
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false,
		'menu_icon'   => 'dashicons-admin-site',
	);

  register_post_type('storitve', $args);

}


add_action('init', 'projects_custom_post_type');
add_action('init', 'services_custom_post_type');


// RENAME POSTS TO BLOG

function litho_posts_portfolio() {
    global $menu;
    global $submenu;
    $menu[5][0] = __("Blog", 'litho');
    $submenu['edit.php'][5][0] = __("Projects", 'litho');
    $submenu['edit.php'][10][0] = __("Add new", 'litho');
    echo '';
}
function litho_posts_portfolio_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = __("Projects", 'litho');
    $labels->singular_name = __("Item", 'litho');
    $labels->add_new = __("New item", 'litho');
    $labels->add_new_item = __("New item", 'litho');
    $labels->edit_item = __("Edit", 'litho');
    $labels->new_item = __("Item", 'litho');
    $labels->view_item = __("View Item", 'litho');
    $labels->search_items = __("Search Blog", 'litho');
    $labels->not_found = __("No Item Found", 'litho');
    $labels->not_found_in_trash = __("No Item found in Trash", 'litho');
}
add_action( 'init', 'litho_posts_portfolio_label' );
add_action( 'admin_menu', 'litho_posts_portfolio' );
