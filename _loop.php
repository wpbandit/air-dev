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
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
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
		<?php the_content('Read more...'); ?>
	</div>
</article>
<?php endwhile;?>

<?php get_template_part('_nav-posts'); ?>