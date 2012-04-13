<?php get_header(); ?>

<div id="content">
	<div id="content-inner" class="container-24">	

		<?php get_template_part('_loop-single'); ?>
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
	</div><!--/content-inner-->
</div><!--/content-->

<?php get_footer(); ?>