<?php

/*
@package sitename
	
	========================
     CUSTOM POST TYPE FUNCTIONS
	========================
*/



//TRY OUT CUSTOM POST TYPE

function tryout_custom_post_type (){

	$labels = array(
		'name' => 'Try Out',
		'singular_name' => 'Try Out',
		'add_new' => 'Dodaj novo',
		'all_items' => 'Vsi',
		'add_new_item' => 'Dodaj',
		'edit_item' => 'Uredi',
		'new_item' => 'Nov prispevek',
		'view_item' => 'Poglej',
		'search_item' => 'Išči',
		'not_found' => 'Ni prispevkov',
		'not_found_in_trash' => 'Nič postov v košu',
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
			'revisions',
		),
		/*'taxonomies' => array('category', 'post_tag'),*/
		'menu_position' => 5,
		'exclude_from_search' => false,
	);

  register_post_type('tryout', $args);

}


//GALLERY CUSTOM POST TYPE
	
function gallery_custom_post_type (){

	$labels = array(
		'name' => 'Gallery',
		'singular_name' => 'Gallery',
		'add_new' => 'Dodaj novo',
		'all_items' => 'Vsi',
		'add_new_item' => 'Dodaj',
		'edit_item' => 'Uredi',
		'new_item' => 'Nov prispevek',
		'view_item' => 'Poglej',
		'search_item' => 'Išči',
		'not_found' => 'Ni prispevkov',
		'not_found_in_trash' => 'Nič postov v košu',
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
			'revisions',
		),
		/*'taxonomies' => array('category', 'post_tag'),*/
		'menu_position' => 5,
		'exclude_from_search' => false,
	);

  register_post_type('gallery', $args);

}



add_action('init', 'tryout_custom_post_type');
add_action('init', 'gallery_custom_post_type');