<?php
/**
 * Portfolio Tag Taxonomy
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\Taxonomies;

use FT_CustomPostTypes\PostTypes\Portfolio;

class PortfolioTag extends AbstractTaxonomy {

	/**
	 * Taxonomy key
	 */
	public const TAXONOMY = 'ft_portfolio_tag';

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
		return array( Portfolio::POST_TYPE );
	}

	/**
	 * @inheritDoc
	 */
	protected function get_labels(): array {
		return array(
			'name'                       => _x( 'Portfolio Tags', 'Taxonomy general name', 'ft-ctp' ),
			'singular_name'              => _x( 'Portfolio Tag', 'Taxonomy singular name', 'ft-ctp' ),
			'menu_name'                  => __( 'Tags', 'ft-ctp' ),
			'all_items'                  => __( 'All Tags', 'ft-ctp' ),
			'edit_item'                  => __( 'Edit Portfolio Tag', 'ft-ctp' ),
			'view_item'                  => __( 'View Portfolio Tag', 'ft-ctp' ),
			'update_item'                => __( 'Update Portfolio Tag', 'ft-ctp' ),
			'add_new_item'               => __( 'Add New Portfolio Tag', 'ft-ctp' ),
			'new_item_name'              => __( 'New Portfolio Tag Name', 'ft-ctp' ),
			'search_items'               => __( 'Search Portfolio Tags', 'ft-ctp' ),
			'popular_items'              => __( 'Popular Portfolio Tags', 'ft-ctp' ),
			'separate_items_with_commas' => __( 'Separate tags with commas', 'ft-ctp' ),
			'add_or_remove_items'        => __( 'Add or remove tags', 'ft-ctp' ),
			'choose_from_most_used'      => __( 'Choose from most used tags', 'ft-ctp' ),
			'not_found'                  => __( 'No portfolio tags found.', 'ft-ctp' ),
			'no_terms'                   => __( 'No portfolio tags', 'ft-ctp' ),
			'items_list_navigation'      => __( 'Portfolio tags list navigation', 'ft-ctp' ),
			'items_list'                 => __( 'Portfolio tags list', 'ft-ctp' ),
			'back_to_items'              => __( '← Back to Portfolio Tags', 'ft-ctp' ),
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
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'hierarchical'       => false,
			'query_var'          => true,
			'rewrite'            => array(
				'slug'       => _x( 'portfolio-tag', 'URL slug', 'ft-ctp' ),
				'with_front' => false,
			),
		);
	}
}
