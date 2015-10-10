<?php get_header(); ?>


    <div class="span8" id="content">
    <div class="post">
    <?php if (have_posts()) : ?>
    <h2>Suchergebnisse</h2>
         <p class="info">Ihre Suchergebnisse f&uuml;r "<strong><?php echo $s ?></strong>":</p>
 
         <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
               <?php the_content(); ?>
            </div>
         <?php endwhile; ?>
 
         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
 
      <?php else : ?>
         <h2>Leider nichts gefunden</h2>
 
      <?php endif; ?>
    </div></div>


<?php get_footer(); ?>
