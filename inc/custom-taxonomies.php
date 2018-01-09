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
		'name' => 'Kategorije projektov',
		'singular_name' => 'Kategorija projekta',
		'search_items' => 'Išči kategorije',
		'all_items' => 'Vse kategorije',
		'parent_item' => 'Parent kategorija',
		'parent_item_colom' => 'Parent kategorije:',
		'edit_item' => 'Uredi kategorijo',
		'update_item' => 'Posodobi kategorijo',
		'add_new_item' => 'Dodaj novo kategorijo',
		'new_item_name' => 'Novo ime kategorije',
		'menu_name' => 'Kategorije projektov',
	);

	$args = array(

		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'projekti-kategorije'),
	);

	register_taxonomy('projekti-kategorije', array('projekti'), $args);




}
add_action( 'init', 'madco_custom_taxonomies' );




// CUSTOM TERM FUNCTION
/*
function madco_get_terms ( $postID, $term){

	$term_list = wp_get_post_terms($postID, $term);
	$output = '';

	$i= 0;

	foreach( $term_list as $term ){ $i++;
		if( $i > 1){ $output .= ', ';}
		$output .= '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';

	}

	return $output;
}*/
