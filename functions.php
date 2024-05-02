<?php
/**
 * Theme Functions.
 *
 * @package Wordpress_Starter
 */


if ( ! defined( 'WORDPRESS_STARTER_DIR_PATH' ) ) {
	define( 'WORDPRESS_STARTER_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'WORDPRESS_STARTER_DIR_URI' ) ) {
	define( 'WORDPRESS_STARTER_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'WORDPRESS_STARTER_BUILD_CSS_URI' ) ) {
	define( 'WORDPRESS_STARTER_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}

if ( ! defined( 'WORDPRESS_STARTER_BUILD_CSS_DIR_PATH' ) ) {
	define( 'WORDPRESS_STARTER_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

if ( ! defined( 'WORDPRESS_STARTER_BUILD_JS_URI' ) ) {
	define( 'WORDPRESS_STARTER_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/js' );
}

if ( ! defined( 'WORDPRESS_STARTER_BUILD_JS_DIR_PATH' ) ) {
	define( 'WORDPRESS_STARTER_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/js' );
}

require_once WORDPRESS_STARTER_DIR_PATH . '/inc/helpers/autoloader.php';

function wordpress_starter_get_theme_instance() {
	\Wordpress_Starter\Inc\Wordpress_Starter::get_instance();
}

wordpress_starter_get_theme_instance();

?>