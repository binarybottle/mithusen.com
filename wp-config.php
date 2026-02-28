<?php
/**
 * WordPress Multisite Configuration
 * Main site: mithusen.in
 * Subdomain: freemithu.mithusen.in
 */

// Load secrets (DB credentials + salts) from a file not tracked by git
if ( file_exists( __DIR__ . '/wp-config-secrets.php' ) ) {
    require_once __DIR__ . '/wp-config-secrets.php';
} else {
    die( 'Missing wp-config-secrets.php — copy wp-config-secrets.example.php and fill in your credentials.' );
}

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

$table_prefix = 'wp_';

/* ── WordPress Multisite ── */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE',          true );
define( 'SUBDOMAIN_INSTALL',  true );
define( 'DOMAIN_CURRENT_SITE', 'mithusen.in' );
define( 'PATH_CURRENT_SITE',   '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* ── Performance & limits ── */
define( 'WP_MEMORY_LIMIT',     '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/* ── Debugging (disable in production) ── */
define( 'WP_DEBUG',     false );
define( 'WP_DEBUG_LOG', false );

/* ── Filesystem ── */
define( 'DISALLOW_FILE_EDIT', true );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
