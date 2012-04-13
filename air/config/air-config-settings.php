<?php

/*-------------------------------------------------------------------------- */
/* Theme Settings :: General
/*-------------------------------------------------------------------------- */

/* General : Theme Styles
/*---------------------------------------------------------*/

$setting['sections']['style'] = array(
	'title'		=> 'Theme Style',
	'tab'		=> 'general'
);

//! Theme Styles
$setting[] = array(
	'id'		=> 'style',
	'label'		=> 'Name',
	'section'	=> 'style',
	'type'		=> 'select',
	'choices'	=> Air::get_theme_styles()
);

/* General : Favicon
/*---------------------------------------------------------*/

$setting['sections']['favicon'] = array(
	'title'		=> 'Favicon',
	'tab'		=> 'general'
);

//! Logo URL
$setting[] = array(
	'id'		=> 'favicon',
	'label'		=> 'Favicon',
	'section'	=> 'favicon',
	'type'		=> 'image'
);

/* General : RSS Feed
/*---------------------------------------------------------*/

$setting['sections']['rss-feed'] = array(
	'title'		=> 'RSS Feed',
	'tab'		=> 'general'
);

//! Feed URL
$setting[] = array(
	'id'		=> 'feed-url',
	'label'		=> 'Feed URL',
	'section'	=> 'rss-feed',
	'type'		=> 'text',
	'class'		=> 'regular-text'
);

/* General : Analytics Script
/*---------------------------------------------------------*/

$setting['sections']['analytics'] = array(
	'title'		=> 'Analytics Script',
	'tab'		=> 'general'
);

//! Script Location
$setting[] = array(
	'id'		=> 'analytics-location',
	'label'		=> 'Script Location',
	'section'	=> 'analytics',
	'type'		=> 'radio',
	'choices'	=> array(
		'header' => 'Header',
		'footer' => 'Footer'
	),
	'vertical'	=> FALSE
);

//! Script
$setting[] = array(
	'id'		=> 'analytics-script',
	'label'		=> 'Analytics Script',
	'section'	=> 'analytics',
	'type'		=> 'textarea',
	'rows'		=> '4'
);


/*-------------------------------------------------------------------------- */
/* Theme Settings :: Header
/*-------------------------------------------------------------------------- */

/* Header : Custom Logo
/*---------------------------------------------------------*/

$setting['sections']['custom-logo'] = array(
	'title'		=> 'Custom Logo',
	'tab'		=> 'header'
);

//! Logo URL
$setting[] = array(
	'id'		=> 'custom-logo',
	'label'		=> 'Logo URL',
	'section'	=> 'custom-logo',
	'type'		=> 'image'
);

/* Header : Tagline
/*---------------------------------------------------------*/
$setting['sections']['header-tagline'] = array(
	'title'		=> 'Tagline',
	'tab'		=> 'header'
);

//! Disable Tagline
$setting[] = array(
	'id'		=> 'header-disable-tagline',
	'label'		=> 'Disable',
	'section'	=> 'header-tagline',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'header-disable-tagline' => 'Disable tagline (site description)'
	)
);


/*-------------------------------------------------------------------------- */
/* Theme Settings :: Blog
/*-------------------------------------------------------------------------- */

/* Blog : General
/*---------------------------------------------------------*/
$setting['sections']['blog-general'] = array(
	'title'		=> 'General',
	'tab'		=> 'blog'
);

//! Read More
$setting[] = array(
	'id'		=> 'read-more',
	'label'		=> 'Read More Text',
	'section'	=> 'blog-general',
	'type'		=> 'text'
);

//! Excerpt More
$setting[] = array(
	'id'		=> 'excerpt-more',
	'label'		=> 'Excerpt Ending',
	'section'	=> 'blog-general',
	'type'		=> 'text',
	'class'		=> 'small-text'
);

//! Excerpt Length
$setting[] = array(
	'id'		=> 'excerpt-length',
	'label'		=> 'Excerpt Length',
	'section'	=> 'blog-general',
	'type'		=> 'text',
	'class'		=> 'small-text'
);

/* Blog : Post Content
/*---------------------------------------------------------*/
$setting['sections']['post-content'] = array(
	'title'		=> 'Post Content',
	'tab'		=> 'blog'
);

//! Home
$setting[] = array(
	'id'		=> 'post-content-home',
	'label'		=> 'Home',
	'section'	=> 'post-content',
	'type'		=> 'radio',
	'choices'	=> array(
		'0' => 'Excerpt',
		'1' => 'Full Post',
	),
	'vertical'	=> FALSE
);

//! Archive
$setting[] = array(
	'id'		=> 'post-content-archive',
	'label'		=> 'Archive',
	'section'	=> 'post-content',
	'type'		=> 'radio',
	'choices'	=> array(
		'0' => 'Excerpt',
		'1' => 'Full Post',
	),
	'vertical'	=> FALSE
);

//! Search
$setting[] = array(
	'id'		=> 'post-content-search',
	'label'		=> 'Search',
	'section'	=> 'post-content',
	'type'		=> 'radio',
	'choices'	=> array(
		'0' => 'Excerpt',
		'1' => 'Full Post',
	),
	'vertical'	=> FALSE
);

/* Blog : Post Details
/*---------------------------------------------------------*/
$setting['sections']['post-details'] = array(
	'title'		=> 'Post Details',
	'tab'		=> 'blog'
);

//! Hide Post Details
$setting[] = array(
	'id'		=> 'post-hide-fields',
	'label'		=> 'Hide Post Details',
	'section'	=> 'post-details',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'post-hide-author'		=> 'Hide post author',
		'post-hide-date'		=> 'Hide post date',
		'post-hide-categories'	=> 'Hide post categories',
		'post-hide-tags'		=> 'Hide post tags',
	)
);
		
/* Blog : Comments
/*---------------------------------------------------------*/
$setting['sections']['comments'] = array(
	'title'		=> 'Comments',
	'tab'		=> 'blog'
);

//! Comments Form Location
$setting[] = array(
	'id'		=> 'comments-form-location',
	'label'		=> 'Comments Form Location',
	'section'	=> 'comments',
	'type'		=> 'radio',
	'choices'	=> array(
		'top'		=> 'Display above comments',
		'bottom'	=> 'Display below comments',
	)
);

//! Disable Comments
$setting[] = array(
	'id'		=> 'disable-comments',
	'label'		=> 'Disable Comments',
	'section'	=> 'comments',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'comments-pages-disable' => 'Disable comments on pages',
		'comments-posts-disable' => 'Disable comments on posts'
	)
);


/*-------------------------------------------------------------------------- */
/* Theme Settings :: Footer
/*-------------------------------------------------------------------------- */

/* Footer : Footer Text
/*---------------------------------------------------------*/
$setting['sections']['footer-text'] = array(
	'title'		=> 'Footer Text',
	'tab'		=> 'footer'
);

//! Text
$setting[] = array(
	'id'		=> 'footer-text',
	'label'		=> 'Text',
	'section'	=> 'footer-text',
	'type'		=> 'textarea',
	'rows'		=> '2',
	'cols'		=> '10'
);

/* Footer : Footer Widgets
/*---------------------------------------------------------*/
$setting['sections']['footer-widgets'] = array(
	'title'		=> 'Footer Widgets',
	'tab'		=> 'footer'
);

//! Footer Widgets
$setting[] = array(
	'id'		=> 'footer-widgets',
	'label'		=> 'Enable',
	'section'	=> 'footer-widgets',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'footer-widgets' => 'Enable footer widgets'
	)
);

/*-------------------------------------------------------------------------- */
/* Theme Settings :: Design
/*-------------------------------------------------------------------------- */

/* Design : Body
/*---------------------------------------------------------*/
$setting['sections']['design-body'] = array(
	'title'		=> 'Body',
	'tab'		=> 'design'
);

//! Body BG Color
$setting[] = array(
	'id'		=> 'design-body-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'design-body',
	'type'		=> 'colorpicker'
);

//! Body BG Image
$setting[] = array(
	'id'		=> 'design-body-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'design-body',
	'type'		=> 'image'
);

//! Body BG Image Repeat
$setting[] = array(
	'id'		=> 'design-body-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'design-body',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);

/* Design : Header
/*---------------------------------------------------------*/
$setting['sections']['design-header'] = array(
	'title'		=> 'Header',
	'tab'		=> 'design'
);

//! Header BG Color
$setting[] = array(
	'id'		=> 'design-header-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'design-header',
	'type'		=> 'colorpicker'
);

//! Header BG Image
$setting[] = array(
	'id'		=> 'design-header-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'design-header',
	'type'		=> 'image'
);

//! Header BG Image Repeat
$setting[] = array(
	'id'		=> 'design-header-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'design-header',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);

/* Design : Footer
/*---------------------------------------------------------*/
$setting['sections']['design-footer'] = array(
	'title'		=> 'Footer',
	'tab'		=> 'design'
);

//! Footer BG Color
$setting[] = array(
	'id'		=> 'design-footer-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'design-footer',
	'type'		=> 'colorpicker'
);

//! Footer BG Image
$setting[] = array(
	'id'		=> 'design-footer-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'design-footer',
	'type'		=> 'image'
);

//! Footer BG Image Repeat
$setting[] = array(
	'id'		=> 'design-footer-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'design-footer',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);