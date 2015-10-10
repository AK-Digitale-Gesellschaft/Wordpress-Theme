<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
			<title>
				<?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged;

				wp_title( '|', true, 'right' );

				// Add the blog name.
				bloginfo( 'name' );

				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";

				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Seite %s', 'SPD2012' ), max( $paged, $page ) );

				?>
			</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="container visible-lg-block">
		
      <div class="row" id="lg-header">
				<div id="logo">
					<a href="<?php echo home_url(); ?>" title="Zurück zur Startseite"><img src="<?php echo get_template_directory_uri(); ?>/img/SPD-Logo.jpg" width="100" height="100" alt="Logo der SPD" /></a>
				</div>
        <div id="title" class="col-lg-offset-7 col-lg-5">
          <h1><?php bloginfo( 'name' ); ?></h1>
					<p id="slogan"><?php bloginfo( 'description' ); ?></p>
        </div>
      </div>

			<nav id="lg-navbar" class="navbar navbar-default">
				<div class="container-fluid">
						<?php include('navigation.php'); ?>
				</div>
			</nav>

			<div class="row" id="lg-main-content">
				<div class="col-lg-7" id="content">.col-md-7</div>
				<aside class="col-lg-5" id="right-sidebar">
					<?php dynamic_sidebar('right'); ?>
				</aside>
			</div>

			<footer class="row" id="lg-footer">
				<div class="col-lg-4" id="lg-footer-left">
					<h3><?php echo SPD2015_get_menu_name('secondary-menu'); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
				</div>
				<div class="col-lg-4" id="lg-footer-center">
					<h3><?php echo SPD2015_get_menu_name('tertiary-menu'); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'tertiary-menu' ) ); ?>
        </div>
				<div class="col-lg-4" id="lg-footer-right">
					<?php dynamic_sidebar('footer-sidebar'); ?>
				</div>
			</footer>

    </div>


		<div class="container hidden-lg">
			TEST
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html> 
