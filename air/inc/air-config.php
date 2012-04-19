<?php

/**
	Config Library :: Air Framework

	The contents of this file are subject to the terms of the GNU General
	Public License Version 2.0. You may not use this file except in
	compliance with the license. Any of the license terms and conditions
	can be waived if you get permission from the copyright holder.

	Copyright (c) 2012 WPBandit
	Jermaine Marée

		@package AirConfig
		@version 0.1
**/

//! Modifies theme configuration
class AirConfig extends AirBase {

	private static
		$init = FALSE;

	/**
		Init
			@public
	**/
	static function init() {
		if(self::$init)
			return;

		self::$init = TRUE;

		# Sidebars
		self::sidebars();
	}

	/**
		Sidebars
			@private
	**/
	private static function sidebars() {
		# Single
		if(self::get_option('sidebar-widget-single')) {
			self::$config['sidebars'][] = array(
				'id'			=> 'sidebar-single',
				'name'			=> 'Sidebar: Blog Single',
				'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</li>',
				'before_title'	=> '<h3 class="widget-title"><span>',
				'after_title'	=> '</span></h3>',
			);
		}

		# Archive
		if(self::get_option('sidebar-widget-archive')) {
			self::$config['sidebars'][] = array(
				'id'			=> 'sidebar-archive',
				'name'			=> 'Sidebar: Blog Archive',
				'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</li>',
				'before_title'	=> '<h3 class="widget-title"><span>',
				'after_title'	=> '</span></h3>',
			);
		}

		# Page
		if(self::get_option('sidebar-widget-page')) {
			self::$config['sidebars'][] = array(
				'id'			=> 'sidebar-page',
				'name'			=> 'Sidebar: Page',
				'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</li>',
				'before_title'	=> '<h3 class="widget-title"><span>',
				'after_title'	=> '</span></h3>',
			);
		}

		# Search
		if(self::get_option('sidebar-widget-search')) {
			self::$config['sidebars'][] = array(
				'id'			=> 'sidebar-search',
				'name'			=> 'Sidebar: Search',
				'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</li>',
				'before_title'	=> '<h3 class="widget-title"><span>',
				'after_title'	=> '</span></h3>',
			);
		}

		# 404
		if(self::get_option('sidebar-widget-404')) {
			self::$config['sidebars'][] = array(
				'id'			=> 'sidebar-404',
				'name'			=> 'Sidebar: 404',
				'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</li>',
				'before_title'	=> '<h3 class="widget-title"><span>',
				'after_title'	=> '</span></h3>',
			);
		}
	}

}

// Quietly initialize library
AirConfig::init();