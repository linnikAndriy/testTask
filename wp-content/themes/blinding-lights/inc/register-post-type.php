<?php
    function register_client_callback() {
        $labels = array(
            'name'               => _x( 'Clients', 'post type general name' ),
            'singular_name'      => _x( 'Client', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'Client' ),
            'add_new_item'       => __( 'Add New client' ),
            'rewrite'            =>array( 'slug' => 'client' ),
            'edit_item'          => __( 'Edit client' ),
            'new_item'           => __( 'New client' ),
            'all_items'          => __( 'All client' ),
            'view_item'          => __( 'View client' ),
            'search_items'       => __( 'Search client' ),
            'not_found'          => __( 'No client found' ),
            'not_found_in_trash' => __( 'No client found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Clients'
        );
        $args = array(
            'labels'        => $labels,
            'description'   => 'Our clients',
            'menu_icon' => 'dashicons-desktop',
            'public'        => true,
            'menu_position' => 5,
            'rewrite'       => array( 'slug' => 'client' ),
            'supports'      => array( 'title', 'thumbnail' ),
            'has_archive'   => false
        );
    register_post_type( 'client', $args );
}
add_action( 'init', 'register_client_callback' );