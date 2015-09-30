<?php get_header(); ?>

<?php if ( is_active_sidebar('welcome') ) {if (is_home()) { get_template_part( 'widget', 'welcome' );}} ?>
    <div class="span8" id="content">
	  <?php include_once('loop.php') ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_posts_link( '<< Neuere Beiträge'  ); ?></div>
        <div class="nav-next"><?php next_posts_link( 'Ältere Beiträge >>'  ); ?></div>
	</div><!-- #nav-below -->
<?php endif; ?>
    </div>

<?php get_footer(); ?>
