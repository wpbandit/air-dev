<?php

/**
	Validation Library :: Air Framework

	The contents of this file are subject to the terms of the GNU General
	Public License Version 2.0. You may not use this file except in
	compliance with the license. Any of the license terms and conditions
	can be waived if you get permission from the copyright holder.

	Copyright (c) 2012 WPBandit
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
			case 'header':
				$valid = self::header($input,$valid);
				break;
			case 'footer':
				$valid = self::footer($input,$valid);
				break;
			case 'styling':
				$valid = self::styling($input,$valid);
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
		# Theme Style
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
	private static function blog(array $input, $valid) {
		# Read More Text
		$valid['read-more'] = esc_attr($input['read-more']);
		# Excerpt More Text
		$valid['excerpt-more'] = esc_attr($input['excerpt-more']);
		# Excerpt Length
		$valid['excerpt-length'] = absint($input['excerpt-length']);

		# Post Content Home
		$valid['post-content-home'] = ('1'===$input['post-content-home'])?'1':'0';
		# Post Content Archive
		$valid['post-content-archive'] = ('1'===$input['post-content-archive'])?'1':'0';
		# Post Content Search
		$valid['post-content-search'] = ('1'===$input['post-content-search'])?'1':'0';

		# Post Hide Author
		$valid['post-hide-author'] = isset($input['post-hide-author'])?'1':'0';
		# Post Hide Date
		$valid['post-hide-date'] = isset($input['post-hide-date'])?'1':'0';
		# Post Hide Categories
		$valid['post-hide-categories'] = isset($input['post-hide-categories'])?'1':'0';
		# Post Hide Tags
		$valid['post-hide-tags'] = isset($input['post-hide-tags'])?'1':'0';

		# Comments Form Location
		$valid['comments-form-location'] = ('top'===$input['comments-form-location'])?'top':'bottom';
		# Disable Comments Pages
		$valid['comments-pages-disable'] = isset($input['comments-pages-disable'])?'1':'0';
		# Disable Comments Posts
		$valid['comments-posts-disable'] = isset($input['comments-posts-disable'])?'1':'0';

		# Return validated options
		return $valid;
	}

	/**
		Header
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function header(array $input, $valid) {
		# Custom Logo
		$valid['custom-logo'] = esc_url($input['custom-logo']);
		# Tagline
		$valid['disable-tagline'] = isset($input['disable-tagline'])?'1':'0';

		# Return validated options
		return $valid;
	}

	/**
		Sidebar
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function sidebar(array $input, $valid) {
		# Return validated options
		return $valid;
	}

	/**
		Footer
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function footer(array $input, $valid) {
		# Footer Text
		$valid['footer-text'] = esc_textarea($input['footer-text']);
		# Footer Widgets
		$valid['footer-widgets'] = isset($input['footer-widgets'])?'1':'0';

		# Return validated options
		return $valid;
	}

	/**
		Styling
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function styling(array $input, $valid) {
		# Body Background Color
		$valid['styling-body-bg-color'] = esc_attr($input['styling-body-bg-color']);
		# Body Background Image
		$valid['styling-body-bg-image'] = esc_url($input['styling-body-bg-image']);
		# Body Background Image Repeat
		$valid['styling-body-bg-image-repeat'] = esc_attr($input['styling-body-bg-image-repeat']);

		# Header Background Color
		$valid['styling-header-bg-color'] = esc_attr($input['styling-header-bg-color']);
		# Header Background Image
		$valid['styling-header-bg-image'] = esc_url($input['styling-header-bg-image']);
		# Header Background Image Repeat
		$valid['styling-header-bg-image-repeat'] = esc_attr($input['styling-header-bg-image-repeat']);

		# Footer Background Color
		$valid['styling-footer-bg-color'] = esc_attr($input['styling-footer-bg-color']);
		# Footer Background Image
		$valid['styling-footer-bg-image'] = esc_url($input['styling-footer-bg-image']);
		# Footer Background Image Repeat
		$valid['styling-footer-bg-image-repeat'] = esc_attr($input['styling-footer-bg-image-repeat']);

		# Return validated options
		return $valid;
	}

	/**
		Typography
			@return array
			@param $input array
			@param $valid array
			@private
	**/
	private static function typography(array $input, $valid) {
		# Return validated options
		return $valid;
	}

}