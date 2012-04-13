<?php get_header(); ?>

<div id="content">
	<div id="content-inner" class="container-24">	
		
		<div class="grid-18">
			<h1 class="heading"><span><?php bandit::archive_heading(); ?></span></h1>
			<?php get_template_part('_loop'); ?>
		</div>
		
		<div class="grid-6">
			<?php get_sidebar(); ?>
		</div>

		<div class="clear"></div>
	</div><!--/content-inner-->
</div><!--/content-->

<?php get_footer(); ?>