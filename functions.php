<?php
/**
 * _s-child-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

/**
 * Enqueue style
 */
function _s_child_theme_scripts() {
  wp_enqueue_style( '_s-child-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', '_s_child_theme_scripts' );

if ( ! function_exists('register_task') ) {

// Register Custom Post Type - Task
function register_task() {

	$labels = array(
		'name'                  => _x( 'Tasks', 'Post Type General Name', 'task' ),
		'singular_name'         => _x( 'Task', 'Post Type Singular Name', 'task' ),
		'menu_name'             => __( 'Task', 'task' ),
		'name_admin_bar'        => __( 'Task', 'task' ),
		'archives'              => __( 'Task Archives', 'task' ),
		'attributes'            => __( 'Task Attributes', 'task' ),
		'parent_item_colon'     => __( 'Parent Task:', 'task' ),
		'all_items'             => __( 'All Tasks', 'task' ),
		'add_new_item'          => __( 'Add New Task', 'task' ),
		'add_new'               => __( 'Add New', 'task' ),
		'new_item'              => __( 'New Task', 'task' ),
		'edit_item'             => __( 'Edit Task', 'task' ),
		'update_item'           => __( 'Update Task', 'task' ),
		'view_item'             => __( 'View Task', 'task' ),
		'view_items'            => __( 'View Tasks', 'task' ),
		'search_items'          => __( 'Search Task', 'task' ),
		'not_found'             => __( 'Not found', 'task' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'task' ),
		'featured_image'        => __( 'Featured Image', 'task' ),
		'set_featured_image'    => __( 'Set featured image', 'task' ),
		'remove_featured_image' => __( 'Remove featured image', 'task' ),
		'use_featured_image'    => __( 'Use as featured image', 'task' ),
		'insert_into_item'      => __( 'Insert into item', 'task' ),
		'uploaded_to_this_item' => __( 'Uploaded to this task', 'task' ),
		'items_list'            => __( 'Tasks list', 'task' ),
		'items_list_navigation' => __( 'Tasks list navigation', 'task' ),
		'filter_items_list'     => __( 'Filter tasks list', 'task' ),
	);
	$args = array(
		'label'                 => __( 'Task', 'task' ),
		'description'           => __( 'Post Type Description', 'task' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'task', $args );

}
add_action( 'init', 'register_task', 0 );

}