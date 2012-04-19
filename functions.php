<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Theme Configuration
/*-------------------------------------------------------------------------- */

$airconfig = array(

	//! Theme details
	'theme_name'		=> 'Theme Name',
	'theme_version'		=> '1.0',
	'theme_options'		=> 'bandit_air',

	//! Theme options menu
	'theme-options-menu' => array(
		'general'	=> 'General',
		'blog'		=> 'Blog',
		'header'	=> 'Header',
		'sidebar'	=> 'Sidebar',
		'footer'	=> 'Footer',
		'styling'	=> 'Styling',
		'typography'=> 'Typography',
	),

	//! Theme modules menu
	'theme-modules-menu' => array(
		'social'	=> 'Social',
		'test'		=> 'Test'
	),

	//! Text domain
	'text_domain'		=> 'air',

	//! Content width
	'content_width'		=> 560,

	//! Theme features
	'theme_features' => array(
		'automatic-feed-links'	=> TRUE,
		'post-thumbnails'		=> TRUE,
		'post-formats'			=> TRUE
	),

	//! Navigation menus
	'nav_menus' => array(
		'nav_header' => 'Header',
		'nav_footer' => 'Footer'
	),

	//! Sidebars
	'sidebars' => array(
		array(
			'id'			=> 'sidebar',
			'name'			=> 'Sidebar',
			'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</li>',
			'before_title'	=> '<h3 class="widget-title"><span>',
			'after_title'	=> '</span></h3>',
		)
	),

	//! Image sizes
	'image_sizes' => array (
		array(
			'name'		=> 'post-format',
			'width'		=> 620,
			'height'	=> 0,
			'crop'		=> FALSE
		),
	),

	//! Javascript
	'javascript' => array(
		array(
			'handle'	=> 'theme',
			'src'		=> get_template_directory_uri().'/js/jquery.theme.js',
			'deps'		=> array('jquery'),
			'ver'		=> '1.0'
		),
	),

);

# Load Air Framework
require('air/air.php');