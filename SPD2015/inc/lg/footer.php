			<footer class="row" id="lg-footer">
				<div class="col-lg-4" id="lg-footer-left">
					<h3><?php echo SPD2015_get_menu_name('secondary-menu'); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
				</div>
				<div class="col-lg-4" id="lg-footer-center">
					<h3><?php echo SPD2015_get_menu_name('tertiary-menu'); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'tertiary-menu' ) ); ?>
        </div>
				<div class="col-lg-4" id="lg-footer-right">
					<?php dynamic_sidebar('footer-sidebar'); ?>
				</div>
			</footer>

    </div>
		
		<?php wp_footer(); ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html> 
