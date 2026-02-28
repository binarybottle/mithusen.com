<?php

/** 
 * 
 * Basic setup
 * Registers nav menus, adds theme support and enqueues scripts and styles.
 * 
*/

if (!defined('_VERSION')) {

    define( '_VERSION', 's0maq2' );
}
function setup() {

    //load_theme_textdomain( '_rndexe_', get_template_directory() . '/languages' );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    remove_theme_support('block-templates');   

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
        'html5',
        array(
            'style',
            'script',
        )
    );
}
add_action('after_setup_theme', 'setup');


/**
 * Enqueue scripts and styles.
 */
function add_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), _VERSION);
    //wp_enqueue_script('script', get_template_directory_uri() . '/js/script.min.js', array(), _VERSION, true);
}
add_action('wp_enqueue_scripts', 'add_scripts');
