<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'vorstand',
		array(
			'labels' => array(
				'name' => __( 'Vorstand' ),
				'singular_name' => __( 'Vorstandsmitglied' ),
  			'all_items' => __( 'Vorstandsmitglieder' ),
				'add_new' => __( 'Neues Vorstandsmitglied' ),
				'add_new_item' => __( 'Vorstandsmitglied hinzufügen' ),	
  			'edit_item' => __( 'Vorstandsmitglieder bearbeiten' ),
				'new_item' => __( 'Neues Vorstandsmitglied' ),
				'view_item' => __( 'Vorstandsmitglied anschauen' ),	
				'search_items' => __( 'Vorstandsmitglied suchen'),
				'not_found' => __( 'Kein Vorstandsmitglied gefunden' )										  			
			),
		'public' => true,
		'rewrite' => array('slug' => 'vorstand'),
    'menu_position' => 5,
    'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
		)
	);
	register_post_type( 'fraktion',
		array(
			'labels' => array(
				'name' => __( 'Fraktion' ),
				'singular_name' => __( 'Fraktionsmitglied' ),
  			'all_items' => __( 'Fraktionsmitglieder' ),
				'add_new' => __( 'Neues Fraktionsmitglied' ),
				'add_new_item' => __( 'Fraktionsmitglied hinzufügen' ),	
  			'edit_item' => __( 'Fraktionsmitglieder bearbeiten' ),
				'new_item' => __( 'Neues Fraktionsmitglied' ),
				'view_item' => __( 'Fraktionsmitglied anschauen' ),	
				'search_items' => __( 'Fraktionsmitglied suchen'),
				'not_found' => __( 'Kein Vorstandsmitglied gefunden' )										  			
			),
		'public' => true,
		'rewrite' => array('slug' => 'fraktion'),
    'menu_position' => 5,
    'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
		)
	);  
}
