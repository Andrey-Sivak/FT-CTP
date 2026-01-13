<?php
/**
 * Service Category Taxonomy
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\Taxonomies;

use FT_CustomPostTypes\PostTypes\Service;

class ServiceCategory extends AbstractTaxonomy {

	/**
	 * Taxonomy key
	 */
	public const TAXONOMY = 'ft_service_category';

	/**
	 * @inheritDoc
	 */
	protected function get_taxonomy(): string {
		return self::TAXONOMY;
	}

	/**
	 * @inheritDoc
	 */
	protected function get_object_types(): array {
		return array( Service::POST_TYPE );
	}

	/**
	 * @inheritDoc
	 */
	protected function get_labels(): array {
		return array(
			'name'                       => _x( 'Service Categories', 'Taxonomy general name', 'ft-ctp' ),
			'singular_name'              => _x( 'Service Category', 'Taxonomy singular name', 'ft-ctp' ),
			'menu_name'                  => __( 'Service Categories', 'ft-ctp' ),
			'all_items'                  => __( 'All Service Categories', 'ft-ctp' ),
			'edit_item'                  => __( 'Edit Service Category', 'ft-ctp' ),
			'view_item'                  => __( 'View Service Category', 'ft-ctp' ),
			'update_item'                => __( 'Update Service Category', 'ft-ctp' ),
			'add_new_item'               => __( 'Add New Service Category', 'ft-ctp' ),
			'new_item_name'              => __( 'New Service Category Name', 'ft-ctp' ),
			'parent_item'                => __( 'Parent Service Category', 'ft-ctp' ),
			'parent_item_colon'          => __( 'Parent Service Category:', 'ft-ctp' ),
			'search_items'               => __( 'Search Service Categories', 'ft-ctp' ),
			'popular_items'              => __( 'Popular Service Categories', 'ft-ctp' ),
			'separate_items_with_commas' => __( 'Separate Service Categories with commas', 'ft-ctp' ),
			'add_or_remove_items'        => __( 'Add or remove Service Categories', 'ft-ctp' ),
			'choose_from_most_used'      => __( 'Choose from most used Service Categories', 'ft-ctp' ),
			'not_found'                  => __( 'No Service Categories found.', 'ft-ctp' ),
			'no_terms'                   => __( 'No Service Categories', 'ft-ctp' ),
			'items_list_navigation'      => __( 'Service Categories list navigation', 'ft-ctp' ),
			'items_list'                 => __( 'Service Categories list', 'ft-ctp' ),
			'back_to_items'              => __( '← Back to Service Categories', 'ft-ctp' ),
		);
	}

	/**
	 * @inheritDoc
	 */
	protected function get_args(): array {
		return array(
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_in_rest'       => true,
			'show_tagcloud'      => false,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'hierarchical'       => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug'         => _x( 'service-category', 'URL slug', 'ft-ctp' ),
				'with_front'   => false,
				'hierarchical' => true,
			),
		);
	}
}
