<?php
// Enqueue scripts and styles.
function px_site_scripts()
{
	// Load our main stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.min.css' );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/app.min.js', array(), null, true );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'px_site_scripts' );





