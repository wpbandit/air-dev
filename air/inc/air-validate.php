<?php

/**
	Validation Library :: Air Framework

	The contents of this file are subject to the terms of the GNU General
	Public License Version 2.0. You may not use this file except in
	compliance with the license. Any of the license terms and conditions
	can be waived if you get permission from the copyright holder.

	Copyright (c) 2011 WPBandit
	Jermaine Maree

		@package AirValidate
		@version 1.0
**/

//! BanditValidate
class AirValidate extends AirBase {

	protected static
		$error = FALSE;

	/**
		Initialize
	**/
	static function init($input) {
		# Get current options
		$valid = self::$option;

		# Get section
		$section = esc_attr($input['section']);
		unset($input['section']);

		# Validate section
		switch ($section) {
			case 'general':
				$valid = self::general($input,$valid);
				break;
			case 'blog':
				$valid = self::blog($input,$valid);
				break;
		}

		# Check for errors
		/*if(!self::$error) {
			// Add settings notice
			add_settings_error('feather_setting_notices',
				'feather-updated',__('Settings saved.','sprout'),'updated');
		}*/

		# Return validated options
		return $valid;
	}

	/**
		General
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function general(array $input, $valid) {
		# Theme style
		$valid['style'] = esc_attr($input['style']);
		# Feed URL
		$valid['feed-url'] = esc_url($input['feed-url']);
		# Analytics Location
		$valid['analytics-location'] = ('header'===$input['analytics-location'])?'header':'footer';
		# Analytics Script
		$valid['analytics-script'] = $input['analytics-script'];
		
		# Return validated options
		return $valid;
	}

	/**
		Blog
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function blog(array $input, array $valid) {
	}

}