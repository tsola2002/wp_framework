<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 11/03/15
 * Time: 13:02
 *
 * functions.php
 * The themes functions and definitions
 */

//1.0 DEFINE CONSTANTS
define( 'FRAMEWORK', get_template_directory() . '/framework' );

//constant for stylesheet
define( 'THEMEROOT', get_stylesheet_directory_uri() );

//constant for images
define( 'IMAGES', THEMEROOT . '/images' );

//constant for javascript
define( 'SCRIPTS', THEMEROOT . '/js' );

//2.0 LOAD THE FRAMEWORK
require_once( FRAMEWORK . '/init.php' );

//3.0 SETUP THE CONTENT WIDTH VALUE BASED ON THEME DESIGN
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


//4.0 - Set up theme default and register various supported features.

if ( ! function_exists( 'alpha_setup' ) ) {
	function alpha_setup() {
		/**
		 * Make the theme available for translation.
		 * place translation files in languages folder and in $landir variable
		 * load translation files in theme
		 */
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );

		/**
		 * Add support for post formats.
		 * list an array of all formats that should be supported
		 */
		add_theme_support( 'post-formats',
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);

		/**
		 * Add support for automatic feed links.
		 * adds rss feed links to top of site
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for post thumbnails.
		 * which is featured images you can attach to a post
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Register nav menus.
		 * pass in array with slug & title
		 * mark function with double underscore for translation
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'alpha' )
			)
		);
	}

	//add hook to hook into after theme setup & tell it to run alpha setup from above
	add_action( 'after_setup_theme', 'alpha_setup' );
}

