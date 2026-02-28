<?php

/**
 * 
 * Helper Functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rndexe-starter
 */



//Disable Gutenberg Editor (use Classic Editor)
add_filter('gutenberg_can_edit_post', '__return_false', 5);
add_filter('use_block_editor_for_post', '__return_false', 5);

// Disable auto-update emails.
add_filter('auto_core_update_send_email', '__return_false');

// Disable auto-update emails for plugins.
add_filter('auto_plugin_update_send_email', '__return_false');

// Disable auto-update emails for themes.
add_filter('auto_theme_update_send_email', '__return_false');

// Disable WordPress Admin Bar for all users
add_filter('show_admin_bar', '__return_false');

// Disable core auto-updates
add_filter('auto_update_core', '__return_false');
// Disable auto-updates for plugins.
add_filter('auto_update_plugin', '__return_false');
// Disable auto-updates for themes.
add_filter('auto_update_theme', '__return_false');

//Hide the Attachment/Attachments pages on the frontend from all visitors.
add_action(
    'template_redirect',
    function () {
        global $post;
        if (!is_attachment() || !isset($post->post_parent) || !is_numeric($post->post_parent)) {
            return;
        }

        // Does the attachment have a parent post?
        // If the post is trashed, fallback to redirect to homepage.
        if (0 !== $post->post_parent && 'trash' !== get_post_status($post->post_parent)) {
            // Redirect to the attachment parent.
            wp_safe_redirect(get_permalink($post->post_parent), 301);
        } else {
            // For attachment without a parent redirect to homepage.
            wp_safe_redirect(get_bloginfo('wpurl'), 302);
        }
        exit;
    },
    1
);

add_filter(
    'rest_authentication_errors',
    function ($access) {
        return new WP_Error(
            'rest_disabled',
            __('The WordPress REST API has been disabled.'),
            array(
                'status' => rest_authorization_required_code(),
            )
        );
    }
);

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        //wp_safe_redirect(admin_url());
        //exit;
    }

    // Remove comments metabox from dashboard
    //remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            //remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
//add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
//add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
//add_action('admin_menu', function () {
    //remove_menu_page('edit-comments.php');
//});

// Remove comments links from admin bar
//add_action('admin_bar_menu', function () {
//    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
//}, 0);

/**
 * Display a custom message instead of the RSS Feeds.
 *
 * @return void
 */
function disable_feed() {
    wp_die(
        sprintf(
            // Translators: Placeholders for the homepage link.
            esc_html__('No feed available, please visit our %1$shomepage%2$s!'),
            ' <a href="' . esc_url(home_url('/')) . '">',
            '</a>'
        )
    );
}

// Replace all feeds with the message above.
add_action('do_feed_rdf', 'disable_feed', 1);
add_action('do_feed_rss', 'disable_feed', 1);
add_action('do_feed_rss2', 'disable_feed', 1);
add_action('do_feed_atom', 'disable_feed', 1);
add_action('do_feed_rss2_comments', 'disable_feed', 1);
add_action('do_feed_atom_comments', 'disable_feed', 1);

// Remove links to feed from the header.
//remove_action('wp_head', 'feed_links_extra', 3);
//remove_action('wp_head', 'feed_links', 2);

// Prevent search queries.
add_action(
    'parse_query',
    function ($query, $error = true) {
        if (is_search() && !is_admin()) {
            $query->is_search       = false;
            $query->query_vars['s'] = false;
            $query->query['s']      = false;
            if (true === $error) {
                $query->is_404 = true;
            }
        }
    },
    15,
    2
);

// Remove the Search Widget.
add_action(
    'widgets_init',
    function () {
        unregister_widget('WP_Widget_Search');
    }
);

// Remove the search form.
add_filter('get_search_form', '__return_empty_string', 999);

// Remove the core search block.
add_action(
    'init',
    function () {
        if (!function_exists('unregister_block_type') || !class_exists('WP_Block_Type_Registry')) {
            return;
        }
        $block = 'core/search';
        if (WP_Block_Type_Registry::get_instance()->is_registered($block)) {
            unregister_block_type($block);
        }
    }
);

// Remove admin bar menu search box.
add_action(
    'admin_bar_menu',
    function ($wp_admin_bar) {
        $wp_admin_bar->remove_menu('search');
    },
    11
);

/**
 * Disable all embeds in WordPress.
 */
add_action('init', function () {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    add_filter('embed_oembed_discover', '__return_false');

    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('tiny_mce_plugins', function ($plugins) {
        return array_diff($plugins, array('wpembed'));
    });

    // Remove all embeds rewrite rules.
    add_filter('rewrite_rules_array', function ($rules) {
        foreach ($rules as $rule => $rewrite) {
            if (false !== strpos($rewrite, 'embed=true')) {
                unset($rules[$rule]);
            }
        }

        return $rules;
    });

    // Remove filter of the oEmbed result before any HTTP requests are made.
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}, 9999);

