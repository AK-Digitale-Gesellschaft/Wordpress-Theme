<?php require_once(get_template_directory().'/lib/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php'); ?>
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

