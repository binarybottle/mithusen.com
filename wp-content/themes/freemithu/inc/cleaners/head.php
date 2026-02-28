<?php

/**
 * 
 * Clean HTML head
 * @package rndexe-starter
 * 
 */


//Remove WordPress Version Number
add_filter('the_generator', '__return_empty_string');

//Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');

// Disable wlwmanifest link
remove_action('wp_head', 'wlwmanifest_link');

// Remove REST API link from head
remove_action('wp_head','rest_output_link_wp_head');


//Remove Gutenberg Block Library CSS from loading on the frontend
function remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css');

/**
 * Disable the emojis in WordPress.
 */
add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE.
    add_filter('tiny_mce_plugins', function ($plugins) {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        } else {
            return array();
        }
    });

    // Remove from dns-prefetch.
    add_filter('wp_resource_hints', function ($urls, $relation_type) {
        if ('dns-prefetch' === $relation_type) {
            $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
            $urls          = array_diff($urls, array($emoji_svg_url));
        }

        return $urls;
    }, 10, 2);
});
