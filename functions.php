<?php

/////////////////////
// Include Scripts //
/////////////////////

function awesome_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery');
	
}

///////////
// Menus //
///////////

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

////////////////////////////
// Theme Features Support //
////////////////////////////

add_action('init', 'awesome_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/////////////
// Sidebar //
/////////////

function awesome_widget_setup() {
	register_sidebar(array(
		'name'			=> 'Sidebar',
		'id'			=> 'sidebar-1',
		'class'			=> 'custom',
		'description'	=> 'Standard Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => "</aside>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	));
}

add_action('widgets_init','awesome_widget_setup');
































