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
