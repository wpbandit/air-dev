<?php while(have_posts()): the_post(); ?>
<article id="entry-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<div class="entry-pike"></div>
	<a class="format-icon" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="icon"></i></a>
	<!--<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('post-thumbnail-large'); ?>
		</a>
	</div>--><!--/entry-thumbnail-->
	
	<header>
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
		<div class="entry-comments">
			<a class="bubble" href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?><span></span></a>
		</div>
		<!--<div class="entry-avatar"><?php echo get_avatar( get_the_author_meta('email'), '40' ); ?></div>-->
		<div class="entry-byline clearfix">	
			<?php if(is_sticky()) { echo '<div class="entry-sticky"></div>'; } ?>
			<p class="entry-author">By <?php the_author_posts_link(); ?></p>
			<p class="entry-date"><?php the_time('F jS, Y'); ?> <?php edit_post_link('&middot; Edit', '', ''); ?></p>
		</div>
		<div class="clear"></div>
	</header>
	<?php get_template_part('_post-formats'); ?>
	<div class="clear"></div>
	
	<div class="text">
		<?php the_content(); ?>
		<?php wp_link_pages(array('before'=>'<div class="entry-page-links">'.bandit::get_lang('post_page_links'),'after'=>'</div>')); ?>
	</div>
	<?php the_tags('<p class="entry-tags"><span>Tags:</span> ','','</p>'); ?>	
	<p class="entry-category"><span>Posted in:</span> <?php the_category(', '); ?></p>
	</ul>
</article>

<div class="clear"></div>
<?php if(bandit::comments_enabled() || have_comments()): ?>
	<div id="entry-comments">
		<?php comments_template(); ?>
	</div>
<?php endif; ?>

<?php endwhile;?>