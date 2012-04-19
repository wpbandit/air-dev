<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Filters
/*-------------------------------------------------------------------------- */

/**
	Feed Link
**/
function air_feed_link($output,$feed) {
	$feed_url = Air::get_option('feed-url');
	$feed_array = array(
		'rss'			=> $feed_url,
		'rss2'			=> $feed_url,
		'atom'			=> $feed_url,
		'rdf'			=> $feed_url,
		'comments_rss2'	=> ''
	);
	$feed_array[$feed] = $feed_url;
	return $feed_array[$feed];
}
if(Air::get_option('feed-url')) {
	add_filter('feed_link','air_feed_link',10,2);
}

/**
	Content More
**/
function air_the_content_more_link($more_link,$more_link_text) {
	return str_replace($more_link_text,Air::get_option('read-more'),$more_link );
}
if(Air::get_option('read-more')) {
	add_filter( 'the_content_more_link','air_the_content_more_link',10,2);
}

/**
	Excerpt More
**/
function air_excerpt_more($more) {
	return '...';
}
if(Air::get_option('excerpt-more')) {
	add_filter('excerpt_more','air_excerpt_more');
}

/**
	Excerpt Length
**/
function air_excerpt_length($length) {
	return Air::get_option('excerpt-length');
}
if(Air::get_option('excerpt-length')) {
	add_filter( 'excerpt_length','air_excerpt_length',999);
}