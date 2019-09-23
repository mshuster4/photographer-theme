<?php
/**
 * Photographer Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Photographer_Theme
 */

if ( ! function_exists ( 'photographer_theme_setup' ) ) {
  
    function photographer_theme_setup() {
        add_theme_support( 'automatic-feed-links' );
    }

    function My_Scripts_Enqueue() 
    {
        wp_register_style( 'css',get_template_directory_uri(),  '/css/style.css' );
	    wp_enqueue_style('css');
        wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), null, true );
        wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true );
        wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, null, 'all' );
        wp_enqueue_script( 'popper-js' );
        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_style( 'bootstrap-css' );
    }

    add_action('wp_enqueue_scripts', 'my_scripts_enqueue');

    add_theme_support('custom-background');
 
}