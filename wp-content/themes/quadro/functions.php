<?php

// Setup


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'General',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false,
        'icon_url'        => 'dashicons-admin-multisite',
        'position'         => 7
    ));


}


// Includes

include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );


// Hooks

add_action( 'wp_enqueue_scripts', 'ql_enqueue' );
add_action( 'after_setup_theme', 'ql_setup_theme' );
