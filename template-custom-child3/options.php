<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name()
{
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options()
{

	$test_array = array(
		'maintenance' => __('Maintenance ', 'theme-textdomain'),
		'normal' => __('Normal', 'theme-textdomain'),

	);
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ($options_tags_obj as $tag) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}



	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'theme-textdomain'),
		'type' => 'heading'
	);


	$options[] = array(
		'name' => __('Input Radio (one)', 'theme-textdomain'),
		'desc' => __('Radio select with default options "one".', 'theme-textdomain'),
		'id' => 'example_radio',
		'std' => 'maintenance',
		'type' => 'radio',
		'options' => $test_array
	);


	$options[] = array(
		'name' => __('Uploader Logo', 'theme-textdomain'),
		'desc' => __('This creates a full size uploader that previews the image.', 'theme-textdomain'),
		'id' => 'example_uploader',
		'type' => 'upload'
	);


	return $options;
}
