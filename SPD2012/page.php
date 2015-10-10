<?php get_header(); ?>

    <div class="span8" id="content">
	  <?php while (have_posts()) : the_post(); ?>
	<div class="post">				
		<h2>		
		<span class="entry-title"><?php the_title(); ?></span></h2>
		
<?php if ( has_post_thumbnail() ) { ?>
		<dl id="postImg">
			<dt><?php the_post_thumbnail('article');?></dt>
			<dd><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></dd>
		</dl>
<?php  }	 ?>	

		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
		<p class="meta"><?php echo get_the_tag_list( 'Schlagwörter: ', ', ', '' ); ?>
		</p> 
	</div>
  <?php endwhile; ?>
    </div>

<?php get_footer(); ?>
