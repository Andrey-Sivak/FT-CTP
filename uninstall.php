<?php
/**
 * Uninstall Script
 *
 * Fired when the plugin is deleted.
 *
 * @package FT_Custom_Post_Types
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Optional: Delete all service posts and their meta
// Uncomment if you want to clean up data on uninstall
/*
$posts = get_posts( [
	'post_type'      => 'ft_service',
	'posts_per_page' => -1,
	'post_status'    => 'any',
	'fields'         => 'ids',
] );

foreach ( $posts as $post_id ) {
	wp_delete_post( $post_id, true );
}
*/
