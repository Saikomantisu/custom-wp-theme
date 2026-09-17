<?php

function theme_setup()
{
    // Tells WordPress to automatically generate the <title> tag for you
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => 'Primary Header Menu',
    ));
}

// Hook this into 'after_setup_theme'
add_action('after_setup_theme', 'theme_setup');

function theme_enqueue_styles()
{
    // 1. Load the main style.css from the root of your theme
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    // 2. (Optional) Load an additional CSS file from a subfolder
    // wp_enqueue_style( 'custom-layout', get_template_directory_uri() . '/assets/css/layout.css' );
}

// Hook the function into WordPress
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
