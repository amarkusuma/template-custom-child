<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name()
{
	// Change this to use your theme slug
	return 'options-framework-theme';
}

function optionsframework_options()
{


	$options[] = array(
		'name' => __('Basic Settings', 'theme-textdomain'),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('Limit Options', 'theme-textdomain'),
		'desc' => __('A mini text input field.', 'theme-textdomain'),
		'id' => 'limit_options',
		'std' => '5',
		'class' => 'mini',
		'type' => 'text'
	);




	$options[] = array(
		'name' => __('Display Sidebar', 'theme-textdomain'),
		'desc' => __('Example checkbox, defaults to true.', 'theme-textdomain'),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __('Uploader Logo', 'theme-textdomain'),
		'desc' => __('This creates a full size uploader that previews the image.', 'theme-textdomain'),
		'id' => 'example_uploader',
		'type' => 'upload'
	);

	return $options;
}
