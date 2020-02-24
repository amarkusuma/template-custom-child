<?php

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/');
require_once('inc/options-framework.php');

$optionsfile = locate_template('options.php');
load_template($optionsfile);



function bootstrap()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('bootstrapstarter-style', get_stylesheet_uri(), $dependencies);

    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', $dependencies, '3.3.6', true);

    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'bootstrap');



function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Primary Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<aside id="%1$s" class="di-widget %2$s">',
            'after_widget'  => '</aside>',
        )
    );
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');
add_action('widgets_init', 'my_register_sidebars');
