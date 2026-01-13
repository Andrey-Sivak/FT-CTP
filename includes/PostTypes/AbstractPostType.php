<?php
/**
 * Abstract Post Type Base Class
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\PostTypes;

abstract class AbstractPostType {

	/**
	 * Post type key (max 20 characters, no uppercase/spaces)
	 */
	abstract protected function get_post_type(): string;

	/**
	 * Get post type arguments
	 */
	abstract protected function get_args(): array;

	/**
	 * Get post type labels
	 */
	abstract protected function get_labels(): array;

	/**
	 * Register the post type
	 */
	public function register(): void {
		$args           = $this->get_args();
		$args['labels'] = $this->get_labels();

		register_post_type( $this->get_post_type(), $args );
	}
}
