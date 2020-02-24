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
		'name' => __('Footer Copyright', 'theme-textdomain'),
		'desc' => __('A text input field.', 'theme-textdomain'),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __('Blog Description', 'theme-textdomain'),
		'desc' => __('Textarea description.', 'theme-textdomain'),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea'
	);


	$options[] = array(
		'name' => __('Uploader Logo', 'theme-textdomain'),
		'desc' => __('This creates a full size uploader that previews the image.', 'theme-textdomain'),
		'id' => 'example_uploader',
		'type' => 'upload'
	);



	return $options;
}
