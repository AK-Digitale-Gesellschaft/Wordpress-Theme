<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Link auf <?php the_title_attribute(); ?>" class="homeImg"><?php the_post_thumbnail('homepage-thumb');?></a>
		<?php  }	 ?>
		<h2><small><?php the_category('/') ?><span class="hidden">: </span></small><br>		
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
	</div>
<?php endwhile; ?>
