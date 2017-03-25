<?php

/*
@package sitename
	
	========================
     CUSTOM TAXONOMIES FUNCTIONS
	========================
*/


function madco_custom_taxonomies() {

	//Category -> Tryout

	$labels = array(
		'name' => 'Tryout-category',
		'singular_name' => 'Tryout-category',
		'search_items' => 'Išči kategorije',
		'all_items' => 'Vse kategorije',
		'parent_item' => 'Parent kategorija',
		'parent_item_colom' => 'Parent kategorije:',
		'edit_item' => 'Uredi kategorijo',
		'update_item' => 'Posodobi kategorijo',
		'add_new_item' => 'Dodaj novo kategorijo',
		'new_item_name' => 'Novo ime kategorije',
		'menu_name' => 'Kategorije',
	);

	$args = array(

		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'tryout-category'),
	);

	register_taxonomy('tryout-category', array('tryout'), $args);


	//Category -> Gallery

	$labels = array(
		'name' => 'Gallery-category',
		'singular_name' => 'Gallery-category',
		'search_items' => 'Išči kategorije',
		'all_items' => 'Vse kategorije',
		'parent_item' => 'Parent kategorija',
		'parent_item_colom' => 'Parent kategorije:',
		'edit_item' => 'Uredi kategorijo',
		'update_item' => 'Posodobi kategorijo',
		'add_new_item' => 'Dodaj novo kategorijo',
		'new_item_name' => 'Novo ime kategorije',
		'menu_name' => 'Kategorije',
	);

	$args = array(

		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'gallery-category'),
	);

	register_taxonomy('gallery-category', array('gallery'), $args);

}

add_action( 'init', 'madco_custom_taxonomies' );



// CUSTOM TERM FUNCTION 

function madco_get_terms ( $postID, $term){

	$term_list = wp_get_post_terms($postID, $term);
	$output = '';

	$i= 0;

	foreach( $term_list as $term ){ $i++;
		if( $i > 1){ $output .= ', ';}
		$output .= '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';

	}

	return $output;
}
