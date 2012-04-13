<?php get_header(); ?>

<div id="content">
	<div id="content-inner" class="container-24">			
		
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail('page-header'); ?>
			<?php the_post_thumbnail_caption(); ?>
		<?php endif; ?>		
			
		<?php while(have_posts()): the_post(); ?>
			<h1 class="entry-heading"><?php the_title(); ?></h1>
			<div class="text"><?php the_content(); ?></div>
			<div class="clear"></div>
			<?php edit_post_link('&middot; Edit', '', ''); ?>
		<?php endwhile;?>
			
		<?php get_sidebar(); ?>

		<div class="clear"></div>
	</div><!--/content-inner-->
</div><!--/content-->

<?php get_footer(); ?>