<?php include(get_template_directory().'/inc/lg/header.php'); ?>

			<div class="row" id="lg-main-content">
				<div class="col-lg-7" id="content">
					<?php include(get_template_directory().'/inc/lg/loop.php') ?>					
				</div>

				<aside class="col-lg-5" id="right-sidebar">
					<?php dynamic_sidebar('right'); ?>
				</aside>
			</div>

<?php include(get_template_directory().'/inc/lg/footer.php'); ?>			
