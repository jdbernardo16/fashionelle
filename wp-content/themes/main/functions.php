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

	wp_register_script('animate', get_template_directory_uri() . '/js/animate.js', 'animate', false, true);

	wp_enqueue_script('animate');

}

@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
	array(
		'top-left' => 'Top Left Location',
		'top-right' => 'Top Right Location',
		'footer-menu' => 'Footer Location',
		'mobile-menu' => 'Mobile Menu',
	)
);

//To Remove Default Editor of Wordpress

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'page';
    remove_post_type_support( $post_type, 'editor');
}


// Header Footer
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
