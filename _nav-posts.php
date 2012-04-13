<?php if(function_exists('wp_pagenavi')): ?>
		<nav class="entry-nav clearfix">
			<?php wp_pagenavi(); ?>
		</nav>
<?php else: ?>
		<nav class="entry-nav">
			<ul class="clearfix">
				<li class="prev left"><?php previous_posts_link(__('&larr; Previous','sprout')); ?></li>
				<li class="next right"><?php next_posts_link(__('Next &rarr;','sprout')); ?></li>
			</ul>
		</nav>
<?php endif; ?>
