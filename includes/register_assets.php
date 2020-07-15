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
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_js');
