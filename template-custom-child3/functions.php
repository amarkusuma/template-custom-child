<?php

function styles_css()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'styles_css');

function wp_maintenance_mode()
{
    if (of_get_option('example_radio') == 'maintenance') {
        wp_die('<h1>Under Maintenance</h1><br/>Something ain tright, but were working on it! Check back later.');
    }
}
add_action('wp', 'wp_maintenance_mode');
