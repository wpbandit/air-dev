<?php if((comments_open() && bandit::comments_enabled()) || have_comments()): ?>
<div id="comments">

<?php if (have_comments()): ?>
	<h2 class="heading"><span><?php printf( _n('%1$s Comment','%1$s Comments',get_comments_number(),'sprout'), number_format_i18n(get_comments_number()) ); ?></span></h2>

	<ol class="commentlist clearfix">
		<?php wp_list_comments('avatar_size=30'); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<div class="navigation">
			<div class="nav-previous"><?php previous_comments_link(); ?></div>
			<div class="nav-next"><?php next_comments_link(); ?></div>
			<div class="clear"></div>
		</div><!--/navigation -->
	<?php endif; // check for comment navigation ?>
<?php endif; ?>

<?php if (comments_open() && bandit::comments_enabled()): ?>
	<div id="commentform" class="noI">
		<?php get_template_part('comment-form'); ?>
	</div>
<?php endif; ?>

</div>
<?php endif; ?>
