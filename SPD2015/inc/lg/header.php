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
		<style>
		<?php  
			$url = parse_url(get_header_image());
			$url = $url['path'];
		?>
		#lg-header {
			background: url('<?php echo($url); ?>') no-repeat scroll 0 0 transparent;
		}
		</style>
		<?php wp_head(); ?>
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

			<?php include(get_template_directory().'/inc/lg/navigation.php'); ?>
