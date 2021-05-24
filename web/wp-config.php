<?php

// Include the Composer autoload.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'wordpress' );
define( 'DB_HOST', 'mysql' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

// Handle updates via Composer.
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_AUTO_UPDATE_CORE', false );

// We have wp-content outside the core directory.
define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );

if ( defined( 'WP_HOME' ) && WP_HOME ) {
	define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );
}

$table_prefix = 'wp_'; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

require_once( ABSPATH . 'wp-settings.php' );
