<?php
/**
 * Plugin Name: FT Custom Post Types
 * Description: Custom Post Types for fotografkadomca website.
 * Version: 1.0.0
 * Author: Andrii Sivak
 * Author URI: https://github.com/Andrey-Sivak
 * Plugin URI: https://github.com/Andrey-Sivak/ft-ctp
 * Text Domain: ft-ctp
 * Domain Path: /languages
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 6.0
 * Requires PHP: 7.4
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Constants
 */
define( 'FT_CPT_VERSION', '1.0.0' );
define( 'FT_CPT_PATH', plugin_dir_path( __FILE__ ) );
define( 'FT_CPT_URL', plugin_dir_url( __FILE__ ) );
define( 'FT_CPT_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Autoloader
 */
spl_autoload_register(
	function ( $class_name ) {
		$prefix = 'FT_CustomPostTypes\\';
		$len    = strlen( $prefix );

		if ( strncmp( $prefix, $class_name, $len ) !== 0 ) {
			return;
		}

		$relative_class = substr( $class_name, $len );
		$file           = FT_CPT_PATH . 'includes/' . str_replace( '\\', '/', $relative_class ) . '.php';

		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);

/**
 * Initialize Plugin
 */
if ( ! function_exists( 'ft_cpt_init' ) ) {
	function ft_cpt_init() {
		load_plugin_textdomain( 'ft-ctp', false, dirname( FT_CPT_BASENAME ) . '/languages' );

		$plugin = new Plugin();
		$plugin->run();
	}
}
add_action( 'plugins_loaded', __NAMESPACE__ . '\\ft_cpt_init' );

/**
 * Activation Hook - Flush rewrite rules
 */
if ( ! function_exists( 'ft_cpt_activate' ) ) {
	function ft_cpt_activate() {
		$plugin = new Plugin();
		$plugin->register_taxonomies();
		$plugin->register_post_types();
		flush_rewrite_rules();
	}
}
register_activation_hook( __FILE__, __NAMESPACE__ . '\\ft_cpt_activate' );

/**
 * Deactivation Hook
 */
if ( ! function_exists( 'ft_cpt_deactivate' ) ) {
	function ft_cpt_deactivate() {
		flush_rewrite_rules();
	}
}
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\\ft_cpt_deactivate' );
