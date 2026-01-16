<?php
/**
 * Portfolio Custom Post Type
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\PostTypes;

class Portfolio extends AbstractPostType {

	/**
	 * Post type key
	 */
	public const POST_TYPE = 'ft_portfolio';

	/**
	 * @inheritDoc
	 */
	protected function get_post_type(): string {
		return self::POST_TYPE;
	}

	/**
	 * @inheritDoc
	 */
	protected function get_labels(): array {
		return array(
			'name'                  => _x( 'Portfolio', 'Post type general name', 'ft-ctp' ),
			'singular_name'         => _x( 'Portfolio Item', 'Post type singular name', 'ft-ctp' ),
			'menu_name'             => __( 'Portfolio', 'ft-ctp' ),
			'name_admin_bar'        => __( 'Portfolio Item', 'ft-ctp' ),
			'add_new'               => __( 'Add New', 'ft-ctp' ),
			'add_new_item'          => __( 'Add New Portfolio Item', 'ft-ctp' ),
			'new_item'              => __( 'New Portfolio Item', 'ft-ctp' ),
			'edit_item'             => __( 'Edit Portfolio Item', 'ft-ctp' ),
			'view_item'             => __( 'View Portfolio Item', 'ft-ctp' ),
			'view_items'            => __( 'View Portfolio', 'ft-ctp' ),
			'all_items'             => __( 'All Portfolio Items', 'ft-ctp' ),
			'search_items'          => __( 'Search Portfolio', 'ft-ctp' ),
			'parent_item_colon'     => __( 'Parent Portfolio Item:', 'ft-ctp' ),
			'not_found'             => __( 'No portfolio items found.', 'ft-ctp' ),
			'not_found_in_trash'    => __( 'No portfolio items found in Trash.', 'ft-ctp' ),
			'archives'              => __( 'Portfolio Archives', 'ft-ctp' ),
			'attributes'            => __( 'Portfolio Item Attributes', 'ft-ctp' ),
			'insert_into_item'      => __( 'Insert into portfolio item', 'ft-ctp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this portfolio item', 'ft-ctp' ),
			'filter_items_list'     => __( 'Filter portfolio items list', 'ft-ctp' ),
			'items_list_navigation' => __( 'Portfolio items list navigation', 'ft-ctp' ),
			'items_list'            => __( 'Portfolio items list', 'ft-ctp' ),
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
			'show_in_rest'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug'       => _x( 'portfolio', 'URL slug', 'ft-ctp' ),
				'with_front' => false,
			),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-portfolio',
			'supports'           => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'revisions',
				'custom-fields',
			),
		);
	}
}
