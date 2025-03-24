<?php
function gaulemart_theme_setup() {
    // Add support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('woocommerce');

    // Register a main navigation menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'gaulemart_theme')
    ]);
}

function gaulemart_enqueue_assets() {
  wp_enqueue_style('gaulemart-style', get_stylesheet_uri());
  wp_enqueue_script('gaulemart-main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'gaulemart_enqueue_assets');

add_action('after_setup_theme', 'gaulemart_theme_setup');
?>