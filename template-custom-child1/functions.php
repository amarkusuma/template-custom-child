<?php

function styles_css()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'styles_css');

// function my_plugin_add_stylesheet()
// {
//     wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all');
// }

// add_action('wp_enqueue_scripts', 'my_plugin_add_stylesheet');
