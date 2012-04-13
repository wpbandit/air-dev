<?php get_header(); ?>

<div id="content">
	<div id="content-inner" class="container-24">	
		<h1 class="heading"><span><?php bandit::archive_heading(); ?></span></h1>
		<?php get_template_part('_loop'); ?>

		<?php get_sidebar(); ?>

		<div class="clear"></div>
	</div><!--/content-inner-->
</div><!--/content-->

<?php get_footer(); ?>