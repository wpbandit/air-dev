<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">

<title><?php wp_title(); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,600italic,600,400italic,300italic,300">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="wrap">
	
	<div id="topbar">
		<div id="topbar-inner" class="container-24">
			<p>test</p>
		</div><!--/topbar-inner-->
	</div><!--/topbar-->
	
	<div id="header">
		<div id="header-inner" class="container-24">
			<div class="clear"></div>
			<?php wp_nav_menu(array('container'=>'nav','container_id'=>'nav-header','theme_location'=>'bandit_nav_header','menu_id'=>'nav','fallback_cb'=>FALSE)); ?>
		</div><!--/header-inner-->
	</div><!--/header-->