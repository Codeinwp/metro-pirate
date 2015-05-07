<?php
// add any new or customised functions here
add_action( 'wp_enqueue_scripts', 'metro_pirate_enqueue_styles' );
function metro_pirate_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	// Loads our main stylesheet.
	wp_enqueue_style( 'metro_pirate-child-style', get_stylesheet_uri() );
}	