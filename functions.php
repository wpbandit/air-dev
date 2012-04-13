<?php

/*-------------------------------------------------------------------------- */
/* Air Framework :: Theme Configuration
/*-------------------------------------------------------------------------- */

$airconfig = array(

	//! Theme details
	'theme_name'		=> 'Test',
	'theme_version'		=> '0.1',
	'theme_options'		=> 'bandit_air',

	//! Admin menu slug
	'admin_menu_slug'	=> 'test-options',

	//! Theme options menu
	'theme_options_menu' => array(
		'general'	=> 'General Settings',
		'blog'		=> 'Blog Options',
		'header'	=> 'Header',
		'footer'	=> 'Footer',
		'styling'	=> 'Styling',
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
		),
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