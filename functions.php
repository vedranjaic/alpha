<?php 
// Define constants
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/includes/images' );
define( 'SCRIPTS', THEMEROOT . 'includes/js' );
define( 'FRAMEWORK', get_template_directory() . '/framework' );



// Load framework
require_once( FRAMEWORK . '/init.php');



// Setup content width value
if ( ! isset( $content_width ) ) {
	$content_width = 750;
}



// Setup theme defaults
if ( ! function_exists( 'alpha_setup') ) {
	function alpha_setup() {

		// Make the theme available for translation
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'video', 'audio') );

		// Add support for automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Support for post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Register the nav menus
		register_nav_menus( 
			array(
				'main_menu' => __( 'Main menu', 'alpha' )
			)
		);

	}

	add_action( 'after_setup_theme', 'alpha_setup' );
}



// Display meta information
require get_template_directory() . '/includes/meta-tags.php';

// Display post navigation
require get_template_directory() . '/includes/paging-navigation.php';

// Register widget areas
require get_template_directory() . '/includes/widget-areas.php';

// Enqueue scripts
require get_template_directory() . '/includes/enqueue-scripts.php';







?>