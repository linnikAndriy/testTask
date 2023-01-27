<?php
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('blinding-lights', get_stylesheet_directory_uri() . '/dist/css/main.min.css', [], THEME_FILES_VERSION);


    wp_register_script('blinding-lights', get_stylesheet_directory_uri() . '/dist/js/main.min.js', array(), THEME_FILES_VERSION, true);

    wp_enqueue_script('blinding-lights');

    $theme_vars = array(
        'home'   => get_home_url(),
        'ajaxUrl' => site_url() . '/wp-admin/admin-ajax.php',
    );
    wp_localize_script( 'blinding-lights', 'themeVars', $theme_vars );
});

