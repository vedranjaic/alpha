<?php 
function alpha_scripts() {

	// load RecikliranjeStakla style.css
	wp_enqueue_style( 'alpha-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('alpha-picturefill', get_template_directory_uri().'/includes/js/picturefill.min.js', array() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		// wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		// wp_enqueue_script( 'alpha-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'alpha_scripts' );

?>