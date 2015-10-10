	<aside class="span4">
		<div id="leftBlocks">
		<?php dynamic_sidebar('left'); // sidebar 1 ?>
		</div>
	</aside>
</div>
<?php if (is_front_page()) {  
	include_once("rss-news.php"); 
} ?>
<footer class="row">
    	<div class="span3 first">
	<h3><?php echo SPD2012_get_menu_name('secondary-menu'); ?></h3>
	<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
	</div>
    	<div class="span3">
	<h3><?php echo SPD2012_get_menu_name('tertiary-menu'); ?></h3>
	<?php wp_nav_menu( array( 'theme_location' => 'tertiary-menu' ) ); ?>
        </div>
    	<div class="span6"><?php get_sidebar('footer-sidebar'); ?>
    	<p id="creator">Technik: <a href="https://sites.akdigitalegesellschaft.de/">AK Digitale Gesellschaft</a></p>
	</div>
    </footer>
    </div> <!-- /container -->
    
    <?php wp_footer(); ?>     
  </body>
</html>
