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

/* General : Custom Stylesheet
/*---------------------------------------------------------------------------*/

$setting['sections']['custom-css'] = array(
	'title'		=> 'Custom Stylesheet',
	'tab'		=> 'general'
);

//! Enable
$setting[] = array(
	'id'		=> 'custom-css',
	'label'		=> 'Enable',
	'section'	=> 'custom-css',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'custom-css' => 'Enable custom stylesheet [ <strong>style-custom.css</strong> ]',
	)
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
/* Theme Settings :: SEO
/*-------------------------------------------------------------------------- */

/* SEO: Title
/*---------------------------------------------------------*/
$setting['sections']['seo-title'] = array(
	'title'		=> 'Title',
	'tab'		=> 'seo'
);

//! Append site name to title
$setting[] = array(
	'id'		=> 'seo-title-append-sitename',
	'label'		=> 'Site Name',
	'section'	=> 'seo-title',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'seo-title-append-sitename' => 'Append site name to title'
	),
);

//! Title separator
$setting[] = array(
	'id'		=> 'seo-title-separator',
	'label'		=> 'Separator',
	'section'	=> 'seo-title',
	'type'		=> 'text',
	'class'		=> 'small-text'
);

/* SEO: Home Page
/*---------------------------------------------------------*/
$setting['sections']['seo-home'] = array(
	'title'		=> 'Home Page',
	'tab'		=> 'seo'
);

//! Home page title
$setting[] = array(
	'id'		=> 'seo-home-title',
	'label'		=> 'Title',
	'section'	=> 'seo-home',
	'type'		=> 'text',
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
	'id'		=> 'disable-tagline',
	'label'		=> 'Disable',
	'section'	=> 'header-tagline',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'disable-tagline' => 'Disable tagline (site description)'
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
	'class'		=> 'medium-text'
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
/* Theme Settings :: Sidebar
/*-------------------------------------------------------------------------- */

/* Sidebar : Widgets
/*---------------------------------------------------------*/
$setting['sections']['sidebar-widgets'] = array(
	'title'		=> 'Separate Widget Areas',
	'tab'		=> 'sidebar'
);

$setting[] = array(
	'id'		=> 'post-hide-fields',
	'label'		=> 'Enable',
	'section'	=> 'sidebar-widgets',
	'type'		=> 'checkbox',
	'choices'	=> array(
		'sidebar-widget-single'	=> 'Blog Single',
		'sidebar-widget-archive'=> 'Blog Archive',
		'sidebar-widget-page'	=> 'Page',
		'sidebar-widget-search'	=> 'Search',
		'sidebar-widget-404'	=> '404',
	)
);

/*-------------------------------------------------------------------------- */
/* Theme Settings :: Styling
/*-------------------------------------------------------------------------- */

/* Styling : Body
/*---------------------------------------------------------*/
$setting['sections']['styling-body'] = array(
	'title'		=> 'Body',
	'tab'		=> 'styling'
);

//! Body BG Color
$setting[] = array(
	'id'		=> 'styling-body-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'styling-body',
	'type'		=> 'colorpicker'
);

//! Body BG Image
$setting[] = array(
	'id'		=> 'styling-body-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'styling-body',
	'type'		=> 'image'
);

//! Body BG Image Repeat
$setting[] = array(
	'id'		=> 'styling-body-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'styling-body',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);

/* Styling : Header
/*---------------------------------------------------------*/
$setting['sections']['styling-header'] = array(
	'title'		=> 'Header',
	'tab'		=> 'styling'
);

//! Header BG Color
$setting[] = array(
	'id'		=> 'styling-header-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'styling-header',
	'type'		=> 'colorpicker'
);

//! Header BG Image
$setting[] = array(
	'id'		=> 'styling-header-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'styling-header',
	'type'		=> 'image'
);

//! Header BG Image Repeat
$setting[] = array(
	'id'		=> 'styling-header-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'styling-header',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);

/* Styling : Footer
/*---------------------------------------------------------*/
$setting['sections']['styling-footer'] = array(
	'title'		=> 'Footer',
	'tab'		=> 'styling'
);

//! Footer BG Color
$setting[] = array(
	'id'		=> 'styling-footer-bg-color',
	'label'		=> 'Background Color',
	'section'	=> 'styling-footer',
	'type'		=> 'colorpicker'
);

//! Footer BG Image
$setting[] = array(
	'id'		=> 'styling-footer-bg-image',
	'label'		=> 'Background Image',
	'section'	=> 'styling-footer',
	'type'		=> 'image'
);

//! Footer BG Image Repeat
$setting[] = array(
	'id'		=> 'styling-footer-bg-image-repeat',
	'label'		=> 'Background Image Repeat',
	'section'	=> 'styling-footer',
	'type'		=> 'select',
	'choices'	=> array(
		'no-repeat' => 'no-repeat',
		'repeat'	=> 'repeat',
		'repeat-x'	=> 'repeat-x',
		'repeat-y'	=> 'repeat-y'
	)
);