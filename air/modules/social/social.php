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

	/**
		Validate settings
			@public
	**/
	static function validate($input) {

	}

	/**
		Get icons
			@public
	**/
	static function get_icons($folder='default') {
		$path = get_template_directory().'/air/modules/social/';
		// Get images
		$icons = scandir($path.'icons/'.$folder);
		// Return images
		if($icons)
			return $icons;
		else
			return FALSE;
	}

	/**
		Default icon list
			@public
	**/
	static function default_icon_list() {
		$url = get_template_directory_uri().'/air/modules/social/';
		// Get icons
		$icons = self::get_icons();
		// Build list
		if($icons) {
			$output = '<ul class="air-social-icons">';
			// Loop through icons
			foreach($icons as $icon) {
				if($icon != "." && $icon != "..")
					$output .= '<li><img src="'.$url.'icons/default/'.$icon.'" alt="'.$icon.'" title="'.$icon.'" width="16" height="16" />';
			}
			$output .= '</ul>';
			// Return list
			return $output;
		}
	}

}