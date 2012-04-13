<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Shortcodes
/*-------------------------------------------------------------------------- */

/**
	Alert
**/
function air_alert_shortcode($atts,$content=NULL) {
	extract( shortcode_atts( array(
		'type'=>'white',
	), $atts) );
	if(!in_array($type,array('white','green','red','blue','yellow')))
		$type = 'white';
	$output = '<div class="alert '.$type.'">'.$content.'</div>';
	return $output;
}
add_shortcode('alert','air_alert_shortcode');

/**
	Dropcap
**/
function air_dropcap_shortcode($atts,$content=NULL) {
	$output = '<span class="dropcap">'.strip_tags($content).'</span>';
	return $output;
}
add_shortcode('dropcap','air_dropcap_shortcode');

/**
	Pullquote
**/
function air_pullquote_shortcode($atts,$content=NULL) {
	extract( shortcode_atts( array(
		'align'=>'left',
	), $atts) );
	if(!in_array($align,array('left','right')))
		$align = 'left';
	$output = '<span class="pullquote-'.$align.'">'.strip_tags($content).'</span>';
	return $output;
}
add_shortcode('pullquote','air_pullquote_shortcode');