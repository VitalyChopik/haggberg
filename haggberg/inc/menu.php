<?php
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'main_menu' => 'main menu',
		'footer_menu' => 'footer menu'
	] );
} );