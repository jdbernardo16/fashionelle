<?php

function load_css()
{
	wp_register_style('styles', get_template_directory_uri() . '/app.css', array(), false, 'all');

	wp_enqueue_style('styles');

}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
	wp_register_script('jq', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', 'jq', false, true);

	wp_enqueue_script('jq');

	wp_register_script('jq1', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', 'jq1', false, true);

	wp_enqueue_script('jq1');

	wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', 'slick', false, true);

	wp_enqueue_script('slick');

	wp_register_script('main', get_template_directory_uri() . '/js/script.js', 'main', false, true);

	wp_enqueue_script('main');

}

add_action('wp_enqueue_scripts', 'load_js');