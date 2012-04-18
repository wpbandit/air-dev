<?php

/**
	Social Module :: Air Framework

	The contents of this file are subject to the terms of the GNU General
	Public License Version 2.0. You may not use this file except in
	compliance with the license. Any of the license terms and conditions
	can be waived if you get permission from the copyright holder.

	Copyright (c) 2012 WPBandit
	Jermaine Marée

		@package air_social
		@version 0.1
**/

//! air_maintenance
class air_social extends AirBase {

	//@{ Module variables
	protected static
		//! Option Name
		$option_name = 'air-social',
		//! Hook
		//$hook,
		//! Option
		$option,
		//! URL
		$url,
		//! Path
		$path;
	//@}

	/**
		Initialize module
			@public
	**/
	static function init() {
		# Get Option
		self::$option = get_option(self::$option_name);
		# Set default option
		if(self::$option == FALSE) { update_option(self::$option_name,''); }
		# Set Path
		self::$path = AIR_PATH.'/modules/social';
		# Set URL
		self::$url = AIR_URL.'/modules/social';
		# Admin init
		add_action('admin_init',__CLASS__.'::admin_init');
	}


	/**
		Admin init
			@public
	**/
	static function admin_init() {
		# Register settings
		register_setting(self::$option_name.'-settings',self::$option_name,__CLASS__.'::validate_settings');

		# Enqueue admin styles and scripts
		add_action('admin_enqueue_scripts',__CLASS__.'::admin_styles_and_scripts');
	}

	/**
		Admin styles and scripts
			@public
	**/
	static function admin_styles_and_scripts($hook) {
		# Only load on theme admin pages
		if(!in_array($hook,self::$hook))
			return;

		# Only load for social module
		if(isset($_GET['section']) && ('social'==$_GET['section'])) {
			wp_enqueue_script('air-social',self::$url.'/social.js', 
				array('jquery','jquery-ui-core','jquery-ui-sortable','jquery-ui-tabs'));
		}
	}

	/**
		Validate settings
			@public
	**/
	static function validate_settings($input) {

	}

	/**
		Get icons
			@public
	**/
	static function get_icons($folder='default') {
		# Get images
		$icons = scandir(self::$path.'/icons/'.$folder);
		# Return images
		return $icons?$icons:FALSE;
	}

	/**
		Default icon list
			@public
	**/
	static function default_icon_list() {
		# Get icons
		$icons = self::get_icons();
		# Build list
		if($icons) {
			$output = '<ul class="air-social-icons">';
			# Loop through icons
			foreach($icons as $icon) {
				if($icon != "." && $icon != "..")
					$output .= '<li><img src="'.self::$url.'/icons/default/'.$icon.'" alt="'.$icon.'" title="'.$icon.'" width="16" height="16" />';
			}
			$output .= '</ul>';
			# Return list
			return $output;
		}
	}

}