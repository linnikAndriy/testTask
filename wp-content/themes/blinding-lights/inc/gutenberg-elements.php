<?php

// Show Style in Gutenberg
function tabor_setup() {
	add_theme_support( 'editor-styles' );
  	add_editor_style( '/dist/css/main.min.css' );
}
add_action( 'after_setup_theme', 'tabor_setup' );
add_action('acf/init', 'my_acf_init');


// Add align option
add_theme_support( 'align-wide' );

function my_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg-blocks/block-{$slug}/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/gutenberg-blocks/block-{$slug}/block-{$slug}.php") );
	}
	
}

function slugify($string){
	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}


function my_acf_init() {

	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'page banner' ),
		));

        acf_register_block(array(
            'name'				=> 'news',
            'title'				=> __('Hot news'),
            'description'		=> __('Hot news'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'icon'				=> 'media-text',
            'keywords'			=> array( 'page hot news' ),
        ));

        acf_register_block(array(
            'name'				=> 'about',
            'title'				=> __('About us'),
            'description'		=> __('About us'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'icon'				=> 'book',
            'keywords'			=> array( 'about us' ),
        ));

        acf_register_block(array(
            'name'				=> 'clients',
            'title'				=> __('Clients'),
            'description'		=> __('Clients'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'icon'				=> 'book',
            'keywords'			=> array( 'buddicons-buddypress-logo' ),
        ));

        acf_register_block(array(
            'name'				=> 'slider',
            'title'				=> __('Slider block'),
            'description'		=> __('Slider block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'icon'				=> 'format-gallery',
            'keywords'			=> array( 'buddicons-buddypress-logo' ),
        ));

        acf_register_block(array(
            'name'				=> 'recent-category',
            'title'				=> __('Widget recent post sidebar'),
            'description'		=> __('Widget recent post sidebar'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'icon'				=> 'format-gallery',
            'keywords'			=> array( 'buddicons-buddypress-logo' ),
        ));
	}

}