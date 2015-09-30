<?php get_header(); ?>


    <div class="span8" id="content">
	  <?php while (have_posts()) : the_post(); ?>
	<div class="post">
			<p class="date">
			<?php the_date(); ?>
		</p>		
		<h2><span class="subtitle inpost"><?php the_category('/') ?></span><br>		
		<span class="entry-title"><?php the_title(); ?></span></h2>
		
<?php if ( has_post_thumbnail() ) { ?>
		<dl id="postImg">
			<dt><?php the_post_thumbnail('article');?></dt>
			<dd><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></dd>
		</dl>
<?php  }	 ?>	

		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
		<p class="meta"><span class="tags"><?php echo get_the_tag_list( 'Schlagwörter: ', ', ', '' ); ?></span>
		</p> 
	</div>
  <?php endwhile; ?>
	<div class="comments-template">
                <?php comments_template(); ?>
            </div>
    </div>


<?php get_footer(); ?>
