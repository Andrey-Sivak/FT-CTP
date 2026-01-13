<?php
/**
 * Service Custom Post Type
 *
 * @package FT_Custom_Post_Types
 */

namespace FT_CustomPostTypes\PostTypes;

class Service extends AbstractPostType {

	/**
	 * Post type key
	 */
	public const POST_TYPE = 'ft_service';

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
			'name'                  => _x( 'Services', 'Post type general name', 'ft-ctp' ),
			'singular_name'         => _x( 'Service', 'Post type singular name', 'ft-ctp' ),
			'menu_name'             => __( 'Services', 'ft-ctp' ),
			'name_admin_bar'        => __( 'Service', 'ft-ctp' ),
			'add_new'               => __( 'Add New', 'ft-ctp' ),
			'add_new_item'          => __( 'Add New Service', 'ft-ctp' ),
			'new_item'              => __( 'New Service', 'ft-ctp' ),
			'edit_item'             => __( 'Edit Service', 'ft-ctp' ),
			'view_item'             => __( 'View Service', 'ft-ctp' ),
			'view_items'            => __( 'View Services', 'ft-ctp' ),
			'all_items'             => __( 'All Services', 'ft-ctp' ),
			'search_items'          => __( 'Search Services', 'ft-ctp' ),
			'parent_item_colon'     => __( 'Parent Service:', 'ft-ctp' ),
			'not_found'             => __( 'No Services found.', 'ft-ctp' ),
			'not_found_in_trash'    => __( 'No Services found in Trash.', 'ft-ctp' ),
			'archives'              => __( 'Service Archives', 'ft-ctp' ),
			'attributes'            => __( 'Service Attributes', 'ft-ctp' ),
			'insert_into_item'      => __( 'Insert into Service', 'ft-ctp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Service', 'ft-ctp' ),
			'filter_items_list'     => __( 'Filter Services list', 'ft-ctp' ),
			'items_list_navigation' => __( 'Services list navigation', 'ft-ctp' ),
			'items_list'            => __( 'Services list', 'ft-ctp' ),
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
				'slug'       => _x( 'services', 'URL slug', 'ft-ctp' ),
				'with_front' => false,
			),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-hammer',
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
