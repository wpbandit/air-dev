<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Filters
/*-------------------------------------------------------------------------- */

/**
	Excerpt More
**/
function air_excerpt_more_filter($more) {
	return '...';
}
add_filter('excerpt_more','air_excerpt_more_filter');