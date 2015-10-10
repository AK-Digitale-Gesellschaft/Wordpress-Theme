<?php get_header(); ?>
<?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="span8" id="content">
<div class="wp-about-author-containter-top" style="background-color:#fff0b9;">
  <div class="wp-about-author-pic">
    <?php echo get_avatar( $curauth->user_email, 100, $default, $curauth->display_name ); ?>
  </div>
  <div class="wp-about-author-text">
  <h2><a href="https://akdigitalegesellschaft.de/author/adminsteffen/"><?php echo $curauth->display_name; ?></a></h2>
  <p><?php echo $curauth->description; ?></p>
  </div>
 </div>
 <h2>Beiträge von <?php echo $curauth->display_name; ?></h2>
 <?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Link auf <?php the_title_attribute(); ?>" class="homeImg"><?php the_post_thumbnail('homepage-thumb');?></a>
		<hgroup>		
		<h2 class="subtitle"><?php the_category('/') ?></h2>		
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</hgroup>		
		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
	</div>
  <?php endwhile; ?>
  <?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( '<< Ältere Beiträge'  ); ?></div>
					<div class="nav-next"><?php previous_posts_link( 'Neuere Beiträge >>'  ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
 </div><?php get_footer(); ?>
