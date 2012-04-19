<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Filters
/*-------------------------------------------------------------------------- */

/**
	Feed Link
**/
function air_filter_feedlink($output,$feed) {
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
	add_filter('feed_link','air_filter_feedlink',10,2);
}

/**
	Excerpt More
**/
function air_excerpt_more_filter($more) {
	return '...';
}
if(Air::get_option('excerpt-more')) {
	add_filter('excerpt_more','air_excerpt_more_filter');
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