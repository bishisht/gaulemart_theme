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
add_action('after_setup_theme', 'gaulemart_theme_setup');
?>