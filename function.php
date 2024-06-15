<?php

// load stylesheets
function load_css() {
    wp_register_style(
        'tailwind-styles', 
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style('tailwind-styles');
}

function load_js () {
    wp_enqueue_script('social-js', get_template_directory_uri() . '/assets/js/socialShare.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'load_css' );
add_action( 'wp_enqueue_scripts', 'load_js' );
add_theme_support( 'post-thumbnails' );