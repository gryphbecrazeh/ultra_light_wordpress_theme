<?php
include_once(__DIR__ . '/includes/register_assets.php');
// Set up Navbar
function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}


add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )
);
