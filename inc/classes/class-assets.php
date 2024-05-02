<?php
/**
 * Enqueue theme assets
 *
 * @package Wordpress_Starter
 */

namespace Wordpress_Starter\Inc;

use Wordpress_Starter\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		// add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'main-css', WORDPRESS_STARTER_BUILD_CSS_URI . '/main.css', [], null, 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'main-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'main-js', WORDPRESS_STARTER_BUILD_JS_URI . '/main.js', ['jquery'], null, true );

		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );

        /**
         * @todo add localize script
         */
		// wp_localize_script( 'main-js', 'siteConfig', [
		// 	'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
		// 	'ajax_nonce' => wp_create_nonce( 'loadmore_post_nonce' ),
		// ] );
	}

	/**
	 * Enqueue editor scripts and styles.
	 */
	public function enqueue_editor_assets() {

		// $asset_config_file = sprintf( '%s/assets.php', WORDPRESS_STARTER_BUILD_PATH );

		// if ( ! file_exists( $asset_config_file ) ) {
		// 	return;
		// }

		// $asset_config = require_once $asset_config_file;

		// if ( empty( $asset_config['js/editor.js'] ) ) {
		// 	return;
		// }

		// $editor_asset    = $asset_config['js/editor.js'];
		// $js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
		// $version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

		// // Theme Gutenberg blocks JS.
		// if ( is_admin() ) {
		// 	wp_enqueue_script(
		// 		'aquila-blocks-js',
		// 		WORDPRESS_STARTER_BUILD_JS_URI . '/blocks.js',
		// 		$js_dependencies,
		// 		$version,
		// 		true
		// 	);
		// }

		// // Theme Gutenberg blocks CSS.
		// $css_dependencies = [
		// 	'wp-block-library-theme',
		// 	'wp-block-library',
		// ];

		// wp_enqueue_style(
		// 	'aquila-blocks-css',
		// 	WORDPRESS_STARTER_BUILD_CSS_URI . '/blocks.css',
		// 	$css_dependencies,
		// 	filemtime( WORDPRESS_STARTER_BUILD_CSS_DIR_PATH . '/blocks.css' ),
		// 	'all'
		// );

	}

}