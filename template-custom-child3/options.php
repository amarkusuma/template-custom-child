<?php

function optionsframework_option_name()
{
	return 'options-framework-theme';
}

function optionsframework_options()
{

	$test_array = array(
		'maintenance' => __('Maintenance ', 'theme-textdomain'),
		'normal' => __('Normal', 'theme-textdomain'),

	);

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
