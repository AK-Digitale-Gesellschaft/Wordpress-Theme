<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div class="span8" id="content">
<div class="post">
<h2><?php single_cat_title(); ?></h2>
<div><?php echo category_description( $category_id ); ?></div>
</div>
	  <?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Link auf <?php the_title_attribute(); ?>" class="homeImg"><?php the_post_thumbnail('homepage-thumb');?></a>
		<hgroup>		
		<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		</hgroup>		
		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
	</div>
  <?php endwhile; ?>

</div>


<?php get_footer(); ?>
