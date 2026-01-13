<?php
/**
 * Main Plugin Class
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes;

use FT_CustomPostTypes\PostTypes\Service;
use FT_CustomPostTypes\Taxonomies\ServiceCategory;
use FT_CustomPostTypes\Taxonomies\ServiceTag;

class Plugin {

	/**
	 * @var array Registered post type instances
	 */
	private array $post_types = array();

	/**
	 * @var array Registered taxonomy instances
	 */
	private array $taxonomies = array();

	/**
	 * Initialize post types and taxonomies
	 */
	public function __construct() {
		$this->post_types = array(
			'service' => new Service(),
		);

		$this->taxonomies = array(
			'service_category' => new ServiceCategory(),
			'service_tag'      => new ServiceTag(),
		);
	}

	/**
	 * Run the plugin - register all hooks
	 */
	public function run(): void {
		// Taxonomies must be registered before post types for proper connection
		add_action( 'init', array( $this, 'register_taxonomies' ), 5 );
		add_action( 'init', array( $this, 'register_post_types' ), 10 );
	}

	/**
	 * Register all custom taxonomies
	 */
	public function register_taxonomies(): void {
		foreach ( $this->taxonomies as $taxonomy ) {
			$taxonomy->register();
		}
	}

	/**
	 * Register all custom post types
	 */
	public function register_post_types(): void {
		foreach ( $this->post_types as $post_type ) {
			$post_type->register();
		}
	}
}
