<?php get_header(); ?>
<div id="content">
	<div id="content-inner" class="container-24">
		
		<div class="grid-18">
			<h1 class="heading"><span><?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> Search results for "<strong><?php echo esc_attr($_GET['s']); ?></strong>"</span></h1>	
			<?php if(!have_posts()): ?>
			<article class="entry">
				<header>
					<h2 class="entry-title">No search results</h2>
				</header>
				<div class="text">
					<p>The good news is you can try again.</p>
					<form role="search" method="get" action="<?php echo home_url(); ?>">
						<div class="clearfix">
							<input type="text" value="" name="s" id="s" />
							<input type="submit" id="searchsubmit" value="Search" />
						</div>
					</form>
				</div>
			</article>
			<?php endif; ?>
			<?php get_template_part('_loop'); ?>
		</div>
		
		<div class="grid-6">
			<?php get_sidebar(); ?>
		</div>
		
		<div class="clear"></div>
	</div><!--/content-inner-->
</div><!--/content-->
<?php get_footer(); ?>