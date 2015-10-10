<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"> 
<title><?php
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

	?></title>
    <?php
    require "lib/lessphp/lessc.inc.php";
		$less = new lessc;
		$less->checkedCompile(get_template_directory()."/css/style.less", get_template_directory()."/css/style.css");
		?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
<style>
<?php  
  $url = parse_url(get_header_image());
  $url = $url['path'];
?>
#person {
	background: url('<?php echo($url); ?>') no-repeat scroll 0 0 transparent;
}
</style>
<?php wp_head(); ?> 
<?php if ( !has_post_thumbnail() ) { ?><meta property="og:image" content="<?php echo($url); ?>"/><?php } ?>
  </head>
<body>
    <?php $options = get_option( 'SPD2012_options' ); ?>
    <div class="container" id="main">
    <div class="row">	

	<div class="span12" id="person">
	  <?php if ( is_active_sidebar('banner') ) {get_template_part( 'widget', 'banner' );} ?>					
		<div id="introduction">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<p id="slogan"><?php bloginfo( 'description' ); ?></p>
		</div>	
    <a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="SPD Logo"></a>
</div>

    </div>  
	<div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>          
          <div class="nav-collapse">                       
              <a href="<?php echo home_url(); ?>"><img id="homeicon" src="<?php echo get_template_directory_uri(); ?>/img/icons/home.png" alt="Startseite"></a><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>    
    <div class="row">
    
