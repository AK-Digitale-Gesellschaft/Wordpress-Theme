<?php

function SPD2012_add_new_content_node( $wp_admin_bar ) {
	$args = array(
		'parent' => 'new-content',
		'id'        => 'new-event',
		'title'     => 'Termin',
		'href'     => '/wp-admin/admin.php?page=el_admin_new',
	);

	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'SPD2012_add_new_content_node', 999 );
