<?php

// Declare variables

global $publicDir;
global $includesDir;

$publicDir = get_stylesheet_directory_uri() . '/public/';
$includesDir = get_stylesheet_directory_uri() . '/includes/';


// Includes 

require_once(__DIR__ .'/includes/custompost-functions.php');
require_once(__DIR__ .'/includes/acf-functions.php');


// Inherit parent styles

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Deregister WP JQuery and add latest JQuery

function jquery_script() {
   
    global $publicDir;
    
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', $publicDir . 'js/jquery.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'jquery_script');


// Register custom css, enqueue any css you want here.

function customcss_styles(){
	
	global $publicDir;

	wp_enqueue_style( 'bootstrap-css', $publicDir . 'css/bootstrap.css', array(), false, 'all' );
	wp_enqueue_style( 'app-css', $publicDir . 'css/app.css' , array(), false, 'all' );
	wp_enqueue_style( 'neuroexam-css', $publicDir . 'css/neuroexam.css' , array(), false, 'all' );
	wp_enqueue_style( 'homepage-css', $publicDir . 'css/homepage.css' , array(), false, 'all' );
	
}
add_action('wp_enqueue_scripts','customcss_styles');

// Register custom js, enqueue any js you want here.

function customjs_scripts(){
	
	global $publicDir;

	wp_enqueue_script('bootstrap-js', $publicDir . 'js/bootstrap.js', array('jquery'), null, true);
	wp_enqueue_script( 'app-js', $publicDir . 'js/app.js' , array(), false, 'all' );
	wp_enqueue_script( 'neuroexam-js', $publicDir . 'js/neuroexam.js' , array('jquery'), false, 'all');
}
add_action('wp_enqueue_scripts','customjs_scripts');


