<?php

add_filter( 'category_description', 'do_shortcode' );

function myLoop($atts, $content = null) {
	extract(shortcode_atts(array(
		"pagination" => 'true',
		"query" => '',
		"category" => '',
	), $atts));
	global $wp_query,$paged,$post;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	if($pagination == 'true'){
		$query .= '&paged='.$paged;
	}
	if(!empty($category)){
		$query .= '&category_name='.urlencode($category);
	}
	if(!empty($query)){
		$query .= $query;
	}
	$wp_query->query($query);
	ob_start();
	?>
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Link auf <?php the_title_attribute(); ?>" class="homeImg"><?php the_post_thumbnail('homepage-thumb');?></a>
		<hgroup>		
		<h2 class="subtitle"><?php the_category('/') ?></h2>		
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</hgroup>		
		<?php remove_more_jump_link(the_content('mehr…'), false); ?>
		<br /><br />
	<?php endwhile; ?>
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link( '<< Ältere Beiträge'  ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Neuere Beiträge >>'  ); ?></div><br /><br />
	</div><!-- #nav-below -->
	<?php endif; ?>
	<?php $wp_query = null; $wp_query = $temp;
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode("loop", "myLoop");
