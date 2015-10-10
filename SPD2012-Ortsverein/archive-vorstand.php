<?php get_header(); ?>
  <div class="span8" id="content">
  <div class="group post">
  <h2>Vorstand</h2>
    <?php $args = array( 'post_type' => 'vorstand', 'posts_per_page' => 99 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();?>
	    <h3 class="vorstand" style="clear:right;"><?php the_title(); ?></h3>	    
	    <?php if ( has_post_thumbnail() ) { ?>
			  <?php the_post_thumbnail('thumbnail', array('class' => 'alignright'));?>
      <?php  }	 ?>	
      <p><strong><?php $position = get_post_meta($post->ID, 'Funktion', true); echo $position; ?> </strong></p>
	    <div class="entry-content">
	    <?php the_content(); ?>
	    </div>
    <?php endwhile; ?>
  </div>  
  </div>
<?php get_footer(); ?>
