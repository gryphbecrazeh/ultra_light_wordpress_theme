<?php
// Register Front End Assets
function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

function load_js()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('customjs');
}
// Set up Navbar
function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}


add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )
);
