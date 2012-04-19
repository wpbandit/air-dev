<?php

/**
	Air Framework

	The contents of this file are subject to the terms of the GNU General
	Public License Version 2.0. You may not use this file except in
	compliance with the license. Any of the license terms and conditions
	can be waived if you get permission from the copyright holder.

	Copyright (c) 2012 WPBandit
	Jermaine Maree

		@package Air
		@version 0.1
**/

class AirBase {

	//@{ Framework details
	const
		TEXT_Name = 'Air Framework',
		TEXT_Version = '0.1';
	//@}
		
	//@{ Global variables
	protected static
		//! Theme configuration
		$config,
		//! Admin menu slug
		$menu_slug,
		//! Theme option name
		$option_name,
		//! Theme options
		$option,
		//! Admin page hook
		$hook;
	//@}

	/**
		Compiles an array of HTML attributes into an attribute string
			@return string
			@param $attrs array
			@protected
	**/
	protected static function attributes(array $attrs) {
		if(!empty($attrs)) {
			$result = '';
			foreach($attrs as $key=>$val)
				$result .= ' '.$key.'="'.$val.'"';
			return $result;
		}
	}

	/**
		Get theme option
			@return mixed
			@param $key string
			@public
	**/
	static function get_option($key) {
		return isset(self::$option[$key])?self::$option[$key]:FALSE;
	}

	/**
		Get configuration option
			@param $key string
			@protected
	**/
	protected static function get_config($key) {
		return isset(self::$config[$key])?self::$config[$key]:FALSE;
	}

}

class Air extends AirBase {

	/**
		Initialize framework
	**/
	static function init() {
		# Check if framework has been initialized
		if(defined('AIR_PATH'))
			return;

		# Define constants
		define('AIR_PATH',get_template_directory().'/air');
		define('AIR_URL',get_template_directory_uri().'/air');

		# Load theme configuration
		global $airconfig;
		self::$config = $airconfig;
		unset($airconfig);

		# Set option name
		self::$option_name = self::get_config('theme_options')?self::$config['theme_options']:'air-options';

		# Load theme options
		if(self::get_config('theme_options')) {
			self::$option = get_option(self::$config['theme_options']);
		}

		# Admin
		if(is_admin()) {
			# Admin init
			add_action('admin_init',__CLASS__.'::admin_init');
			# Admin menu
			add_action('admin_menu',__CLASS__.'::admin_menu');
		}

		# Initialize modules
		self::modules_init();
		
		# Set content width
		global $content_width;
		if(!isset($content_width) && isset(self::$config['content_width'])) {
			$content_width = self::get_config('content_width');
		}

		# Register nav menus
		self::register_nav_menus();
		
		# Register sidebars
		self::register_sidebars();

		# Load theme's translated strings
		add_action('after_setup_theme',__CLASS__.'::text_domain');

		# Theme features
		add_action('after_setup_theme',__CLASS__.'::theme_features');

		# Register scripts
		add_action('wp_enqueue_scripts',__CLASS__.'::register_scripts');

		# Filters
		if(is_file(AIR_PATH.'/inc/air-filters.php')) {
			require(AIR_PATH.'/inc/air-filters.php');
		}

		# Shortcodes
		if(is_file(AIR_PATH.'/air-shortcodes.php')) {
			require(AIR_PATH.'/air-shortcodes.php');
		}
	}

	/**
		Admin init
			@public
	**/
	static function admin_init() {
		# Set page hooks
		self::$hook = array();
		self::$hook[] = get_plugin_page_hook('theme-options','admin.php');
		self::$hook[] = get_plugin_page_hook('theme-modules','admin.php');

		# Load validation library
		require(AIR_PATH.'/inc/air-validate.php');

		# Register settings
		register_setting('air-settings',self::$option_name,'AirValidate::init');

		# Enqueue admin styles and scripts
		add_action('admin_enqueue_scripts',__CLASS__.'::admin_styles_and_scripts');

		# Action to create settings
		add_action('load-'.self::$hook[0],__CLASS__.'::admin_settings');
	}

	/**
		Admin styles and scripts
			@public
	**/
	static function admin_styles_and_scripts($hook) {
		# Only load on theme admin pages
		if(!in_array($hook,self::$hook))
			return;

		# Set assets URL
		$url = AIR_URL.'/assets';

		# Set dependencies
		$css_dep = array('thickbox');
		$js_dep = array('media-upload','thickbox','jquery');

		# If design section, add colorpicker css/js
		if(isset($_GET['section']) && ('styling' === esc_attr($_GET['section']))) {
			# Register colorpicker.css
			wp_register_style('air-colorpicker',$url.'/colorpicker.css');
			# Add colorpicker.css to air.css dependencies
			$css_dep[] = 'air-colorpicker';
			# Register colorpicker.js
			wp_register_script('air-colorpicker',$url.'/colorpicker.js',array('jquery'));
			# Add colorpicker.js to air.js dependencies
			$js_dep[] = 'air-colorpicker';
		}

		# Enqueue stylesheet
		wp_enqueue_style('air',$url.'/air.css',$css_dep,'0.1');

		# Enqueue script
		wp_enqueue_script('air',$url.'/air.js',$js_dep,'0.1');
	}

	/**
		Admin menu
			@public
	**/
	static function admin_menu() {
		# Set page and menu title
		$title = isset(self::$config['theme_name'])?self::$config['theme_name']:'Air Framework';

		# Create top-level menu
		add_menu_page($title,$title,'manage_options','theme-options',__CLASS__.'::admin_page');

		# Create sub menu pages
		add_submenu_page('theme-options','Theme Options','Theme Options',
			'manage_options','theme-options',__CLASS__.'::admin_page');
		add_submenu_page('theme-options','Theme Modules','Theme Modules',
			'manage_options','theme-modules',__CLASS__.'::admin_page');
		add_submenu_page('theme-options','WPBandit Themes','More Themes',
			'manage_options','wpbandit-themes',__CLASS__.'::admin_page');
	}

	/**
		Admin options page
			@public
	**/
	static function admin_page() {
		# Get page
		$page = esc_attr($_GET['page']);

		# Set section
		if('theme-options' === $page) {
			$section = isset($_GET['section'])?esc_attr($_GET['section']):'general';
		} else {
			$section = isset($_GET['section'])?esc_attr($_GET['section']):'social';
		}


		# Load options page
		require(AIR_PATH.'/gui/air-'.$page.'-page.php');
	}

	/**
		Admin settings
			@public
	**/
	static function admin_settings() {
		# Load settings library
		require(AIR_PATH.'/inc/air-settings.php');

		# Load settings
		require(AIR_PATH.'/config/air-config-settings.php');

		# Create settings
		AirSettings::init(self::$option_name,$setting);
	}

	/**
		Print theme admin menu
			@public
	**/
	static function print_theme_admin_menu() {
		# Get page
		$page = esc_attr($_GET['page']);

		$menu = self::get_config($page.'-menu');
		if($menu) {
			# Set current section
			$current = isset($_GET['section'])?esc_attr($_GET['section']):key($menu);

			# Build menu
			$output = '';
			foreach($menu as $key=>$value) {
				# Set menu item url
				$url = admin_url('/admin.php?page='.$page.'&section='.$key);

				# Set current class ?
				$output .= ($current === $key)?'<li class="current">':'<li>'; 

				# Create menu item
				$output .= '<a href="'.$url.'"><i class="air-icon air-icon-'.$key.'"></i>'.$value.'</a></li>';
			}

			# Print menu
			echo $output;
		}
	}

	/**
		Modules init
			@private
	**/
	static function modules_init() {
		$modules = self::get_config('theme-modules-menu');
		if($modules) {
			foreach ($modules as $key=>$value) {
				$module = AIR_PATH.'/modules/'.$key.'/'.$key.'.php';
				if(is_file($module)) {
					require($module);
					call_user_func(array('air_'.$key,'init'));
				}
			}
		}
	}

	/**
		Register nav menus
			@private
	**/
	private static function register_nav_menus() {
		$menus = self::get_config('nav_menus');
		if($menus) {
			register_nav_menus($menus);
		}
	}

	/**
		Register sidebars
			@private
	**/
	private static function register_sidebars() {
		$sidebars = self::get_config('sidebars');
		if($sidebars) {
			foreach($sidebars as $sidebar) {
				# Single Sidebar
				if(!isset($sidebar['count'])) {
					register_sidebar($sidebar);
				}

				# Multiple Sidebars
				if(isset($sidebar['count'])) {
					$count = $sidebar['count'];
					unset($sidebar['count']);
					register_sidebars($count,$sidebar);
				}
			}
		}
	}

	/**
		Text domain
			@public
	**/
	static function text_domain() {
		$domain = self::get_config('text_domain');
		if($domain) {
			load_theme_textdomain($domain,get_template_directory().'/languages');
		}
	}

	/**
		Theme features
			@public
	**/
	static function theme_features() {
		$features = self::get_config('theme_features');
		if($features) {
			foreach($features as $key=>$value) {
				if($value && is_bool($value)) {
					add_theme_support($key);
				} elseif($value && is_array($value)) {
					add_theme_support($key,$value);
				}
			}

			# Add image sizes
			$image_sizes = self::get_config('image_sizes');
			if(isset($features['post-thumbnails']) && $image_sizes) {
				foreach($image_sizes as $size) {
					if(!isset($size['crop'])) { $size['crop'] = FALSE; }
					extract($size);
					add_image_size($name,$width,$height,$crop);
				}
			}
		}
	}

	/**
		Register scripts
			@public
	**/
	static function register_scripts() {
		$scripts = self::get_config('javascript');
		if($scripts) {
			# Script Defaults
			$defaults = array(
				'deps'		=> FALSE,
				'ver'		=> '1.0',
				'footer'	=> FALSE
			);

			# Loop through scripts and register
			foreach($scripts as $script) {
				# Parse script and merge with $defaults
				$args = wp_parse_args($script,$defaults);
				extract($args);
				# Register script
				wp_register_script($handle,$src,$deps,$ver,$footer);
			}
		}
	}

	/**
		Theme styles
			@public
	**/
	static function get_theme_styles() {
		# Styles directory
		$styles_dir = get_template_directory().'/styles';

		# Default style
		$default = array('0'=>'Default');

		# Loop through styles
		if(is_dir($styles_dir) && $handle=opendir($styles_dir)) {
			while(false !== ($file=readdir($handle))) {
				if($file != "." && $file != ".." && is_file($styles_dir.'/'.$file)) {
					$tmp = new \SplFileObject($styles_dir.'/'.$file);
					$tmp->seek(1);
					$name = substr(esc_html($tmp->current()),7);
					$styles[$file]=$name;
				}
			}
			closedir($handle);

			# Combine arrays
			if($styles) {
				asort($styles);
				$styles = $default+$styles;
			}
		}
		return isset($styles)?$styles:$default;
	}

}

// Quietly initialize framework
Air::init();