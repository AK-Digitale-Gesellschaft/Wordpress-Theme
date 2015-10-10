<?php
$options = get_option( 'column_no_options' );

if ($options['layout'] == 1) { ?>
<aside class="row rssnews">
	<div class="span12 rssblock marginfix">
		<?php dynamic_sidebar('RSS1');  ?>
	</div>
</aside>
<?php } 

if ($options['layout'] == 11) { ?>
<aside class="row rssnews">
	<div class="span6 rssblock">
		<?php dynamic_sidebar('RSS1');  ?>
	</div>
	<div class="span6 rssblock marginfix">
		<?php dynamic_sidebar('RSS2');  ?>
	</div>
</aside>
<?php } 

if ($options['layout'] == 111) { ?>
<aside class="row rssnews">
	<div class="span4 rssblock">
		<?php dynamic_sidebar('RSS1');  ?>
	</div>
	<div class="span4 rssblock">
		<?php dynamic_sidebar('RSS2');  ?>
	</div>
	<div class="span4 rssblock marginfix">
		<?php dynamic_sidebar('RSS3');  ?>
	</div>
</aside>
<?php } 

if ($options['layout'] == 22) { ?>
<aside class="row rssnews">
	<div class="span6 rssblock">
		<?php dynamic_sidebar('RSS1');  ?>
	</div>
	<div class="span6 rssblock marginfix">
		<?php dynamic_sidebar('RSS2');  ?>
	</div>
</aside>
<aside class="row rssnews">
	<div class="span6 rssblock">
		<?php dynamic_sidebar('RSS3');  ?>
	</div>
	<div class="span6 rssblock marginfix">
		<?php dynamic_sidebar('RSS4');  ?>
	</div>
</aside>
<?php } ?>
