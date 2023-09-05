<?php
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
			'name'            => 'slider',
            'title'             => __('slider'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'content-image',
            'title'             => __('content image'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));
        acf_register_block_type(array(
            'name'            => 'case-section',
            'title'             => __('Case Section'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));
        acf_register_block_type(array(
            'name'            => 'about',
            'title'             => __('About'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));
        acf_register_block_type(array(
            'name'            => 'contact-section',
            'title'             => __('Contact Section'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));  
        acf_register_block_type(array(
            'name'            => 'cta',
            'title'             => __('cta'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            )); 
        acf_register_block_type(array(
            'name'            => 'service-block',
            'title'             => __('Service Block'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));   
        acf_register_block_type(array(
            'name'            => 'service-section',
            'title'             => __('Service Section'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
            ));   
    }
}

function my_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/template-parts/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/block-{$name}.php" ) );
	}
}


