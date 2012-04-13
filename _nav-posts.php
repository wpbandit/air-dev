<?php if(bandit::show_post_nav()): ?>
<?php if(function_exists('wp_pagenavi')): ?>
		<nav class="entry-nav clearfix">
			<?php wp_pagenavi(); ?>
		</nav>
<?php else: ?>
		<nav class="entry-nav">
			<ul class="clearfix">
				<li class="prev left"><?php previous_posts_link(bandit::get_lang('post_nav_prev',__('&larr; Previous','sprout'))); ?></li>
				<li class="next right"><?php next_posts_link(bandit::get_lang('post_nav_next',__('Next &rarr;','sprout'))); ?></li>
			</ul>
		</nav>
<?php endif; ?>
<?php endif; ?>
