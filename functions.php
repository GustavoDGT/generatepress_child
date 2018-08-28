<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function generatepress_child_enqueue_scripts() {
	$theme_url = get_template_directory_uri();
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( $theme_url ) . 'rtl.css' );
	}	
}
add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );