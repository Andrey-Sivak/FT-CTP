<?php
/**
 * Abstract Taxonomy Base Class
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\Taxonomies;

abstract class AbstractTaxonomy {

	/**
	 * Taxonomy key (max 32 characters, no uppercase/spaces)
	 */
	abstract protected function get_taxonomy(): string;

	/**
	 * Post types this taxonomy is attached to
	 *
	 * @return string|array
	 */
	abstract protected function get_object_types();

	/**
	 * Get taxonomy arguments
	 */
	abstract protected function get_args(): array;

	/**
	 * Get taxonomy labels
	 */
	abstract protected function get_labels(): array;

	/**
	 * Register the taxonomy
	 */
	public function register(): void {
		$args           = $this->get_args();
		$args['labels'] = $this->get_labels();

		register_taxonomy(
			$this->get_taxonomy(),
			$this->get_object_types(),
			$args
		);
	}
}
