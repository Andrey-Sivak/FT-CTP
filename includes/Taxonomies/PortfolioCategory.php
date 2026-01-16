<?php
/**
 * Portfolio Category Taxonomy
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\Taxonomies;

use FT_CustomPostTypes\PostTypes\Portfolio;

class PortfolioCategory extends AbstractTaxonomy {

	/**
	 * Taxonomy key
	 */
	public const TAXONOMY = 'ft_portfolio_cat';

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
			'name'                       => _x( 'Portfolio Categories', 'Taxonomy general name', 'ft-ctp' ),
			'singular_name'              => _x( 'Portfolio Category', 'Taxonomy singular name', 'ft-ctp' ),
			'menu_name'                  => __( 'Categories', 'ft-ctp' ),
			'all_items'                  => __( 'All Categories', 'ft-ctp' ),
			'edit_item'                  => __( 'Edit Portfolio Category', 'ft-ctp' ),
			'view_item'                  => __( 'View Portfolio Category', 'ft-ctp' ),
			'update_item'                => __( 'Update Portfolio Category', 'ft-ctp' ),
			'add_new_item'               => __( 'Add New Portfolio Category', 'ft-ctp' ),
			'new_item_name'              => __( 'New Portfolio Category Name', 'ft-ctp' ),
			'parent_item'                => __( 'Parent Category', 'ft-ctp' ),
			'parent_item_colon'          => __( 'Parent Category:', 'ft-ctp' ),
			'search_items'               => __( 'Search Portfolio Categories', 'ft-ctp' ),
			'popular_items'              => __( 'Popular Portfolio Categories', 'ft-ctp' ),
			'separate_items_with_commas' => __( 'Separate categories with commas', 'ft-ctp' ),
			'add_or_remove_items'        => __( 'Add or remove categories', 'ft-ctp' ),
			'choose_from_most_used'      => __( 'Choose from most used categories', 'ft-ctp' ),
			'not_found'                  => __( 'No portfolio categories found.', 'ft-ctp' ),
			'no_terms'                   => __( 'No portfolio categories', 'ft-ctp' ),
			'items_list_navigation'      => __( 'Portfolio categories list navigation', 'ft-ctp' ),
			'items_list'                 => __( 'Portfolio categories list', 'ft-ctp' ),
			'back_to_items'              => __( '← Back to Portfolio Categories', 'ft-ctp' ),
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
				'slug'         => _x( 'portfolio-category', 'URL slug', 'ft-ctp' ),
				'with_front'   => false,
				'hierarchical' => true,
			),
		);
	}
}
