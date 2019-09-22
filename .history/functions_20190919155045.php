<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Defines constants to help enqueue scripts and styles.
define( 'CHILD_THEME_HANDLE', sanitize_title_with_dashes( wp_get_theme()->get( 'Name' ) ) );
define( 'CHILD_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

//* Use to enqueue fonts

function jb_enqueue_style() {
	wp_enqueue_style('main_styles' , get_stylesheet_uri());
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
	wp_enqueue_style( 'google-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'google-font-montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,600', array(), CHILD_THEME_VERSION );
}

add_action( 'wp_enqueue_scripts', 'jb_enqueue_style' );

function portfolio_features(){
	add_theme_support('title-tag')
}
add_action('after_setup_theme', 'portfolio_features');


//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );



//=====================================Header==============================================

  
