<?php 
require_once(get_template_directory().'/lib/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php'); 

// Home-Icon als ersten Menüpunkt einfügen
function add_home_to_nav( $items, $args )
{
		$home = '<li><a id="homelink" href="'.home_url().'"><img src="'.get_template_directory_uri().'/img/home.png" alt="Logo der SPD" /></a></li>';
		$home .= $items;
    return $home;
}

add_filter( 'wp_nav_menu_items', 'add_home_to_nav', 10, 2 );
?>

<nav id="lg-navbar" class="navbar navbar-default">
	<div class="container-fluid">
		<?php wp_nav_menu( array(
				            'menu'              => 'primary-menu',
				            'theme_location'    => 'primary-menu',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				    				'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				            'walker'            => new wp_bootstrap_navwalker())
				        ); ?>
 </div>
</nav>

