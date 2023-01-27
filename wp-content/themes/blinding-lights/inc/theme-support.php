<?php

function blinding_lights_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menu
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ) );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'blinding_lights_setup' );

function foundation_widgets_init() {
    /* Sidebar Right */
    register_sidebar( array(
        'id'            => 'foundation_sidebar_right',
        'name'          => __( 'Sidebar Right' ),
        'description'   => __( 'This sidebar is located on the right-hand side of each page.' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5 class="widget__title">',
        'after_title'   => '</h5>',
    ) );

}

add_action( 'widgets_init', 'foundation_widgets_init' );





