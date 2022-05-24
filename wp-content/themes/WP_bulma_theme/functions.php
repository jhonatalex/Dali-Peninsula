<?php

// theme supports
add_image_size( 'thumbnail_300', 300, 300, true );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));



// titlebar & breadcrumb
function bt_get_titlebar($title, $breadcrumb_array=[])
{
	include 'templates/titlebar.php';
}


// enqueue theme styles
function my_theme_enqueue_styles() {

	wp_enqueue_style( 'bulma', get_template_directory_uri() . '/assets/styles/main.min.css' ); 
    wp_enqueue_style( 'wpbulma', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/styles/slick-theme.css' ); //se llama al archivo minificado
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/styles/slick.css' ); //se llama al archivo minificado

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// register topbar menu
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'topbar_menu' => 'Topbar Navigation Menu',
		'top_button_links' => 'Top Right Button Links',
        'footer_menu' => 'Footer Navigation Menu',
	) );
}


// includes
include 'includes/customizer.php';
include 'includes/create-topbar-menu.php';
include 'includes/breadcrumb.php';
include 'includes/comment-walker.php';
include 'includes/block-post-type.php';
include 'includes/footer-widgets.php';
include 'includes/sidebar-widgets.php';
include 'includes/wpbulma-pagination.php';


// nuevo codigo
function custom_scripts_jquery() {
	wp_enqueue_script('jquery351', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array ('jquery') );
}
add_action( 'wp_footer', 'custom_scripts_jquery' );

function custom_scripts_jquery_m() {
	wp_enqueue_script('jquery-m', 'https://code.jquery.com/jquery-migrate-3.3.1.min.js', array ('jquery') );
}

function custom_scripts_main() {
	wp_enqueue_script('funciones-defer', get_stylesheet_directory_uri() . '/assets/scripts/main.js', array ('javascript') );
}
add_action( 'wp_footer', 'custom_scripts_main' );

function custom_scripts_function() {
	wp_enqueue_script('funciones', get_stylesheet_directory_uri() . '/assets/scripts/function.js', array ('jquery') );
}
add_action( 'wp_footer', 'custom_scripts_function' );


function custom_scripts_slick() {
	wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array ('jquery') );
}
add_action( 'wp_footer', 'custom_scripts_slick' );

function fancybox() {
	wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array ('jquery') );
}
add_action( 'wp_footer', 'fancybox' );

function validate_js() {
	wp_enqueue_script('jquery_validate', get_stylesheet_directory_uri() . '/assets/scripts/jquery.validate.js', array ('jquery') );
}
add_action( 'wp_footer', 'validate_js' );