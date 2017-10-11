<?php

/**
 * Member CPT
 *
 * @package Atlo
 */
class Atlo_Post_Type_Member extends Atlo_Post_Type {
	/**
	 * Name of the post type
	 *
	 * @var string
	 */
	protected $cpt_name = 'member';

	/**
	 * Create and register CPT
	 *
	 * @action init
	 * @return null
	 */
	public function create_post_type() {
		$cpt_args = array(
			'labels'              => array(
				'name'                  => _x( 'Members', 'Post Type General Name', 'atlo' ),
				'singular_name'         => _x( 'Member', 'Post Type Singular Name', 'atlo' ),
				'menu_name'             => __( 'Members', 'atlo' ),
				'name_admin_bar'        => __( 'Member', 'atlo' ),
				'archives'              => __( 'Member Archives', 'atlo' ),
				'attributes'            => __( 'Member Attributes', 'atlo' ),
				'parent_item_colon'     => __( 'Parent Item:', 'atlo' ),
				'all_items'             => __( 'All Members', 'atlo' ),
				'add_new_item'          => __( 'Add New Member', 'atlo' ),
				'add_new'               => __( 'Add New', 'atlo' ),
				'new_item'              => __( 'New Member', 'atlo' ),
				'edit_item'             => __( 'Edit Member', 'atlo' ),
				'update_item'           => __( 'Update Member', 'atlo' ),
				'view_item'             => __( 'View Member', 'atlo' ),
				'view_items'            => __( 'View Members', 'atlo' ),
				'search_items'          => __( 'Search Member', 'atlo' ),
				'not_found'             => __( 'Not found', 'atlo' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'atlo' ),
				'featured_image'        => __( 'Featured Image', 'atlo' ),
				'set_featured_image'    => __( 'Set featured image', 'atlo' ),
				'remove_featured_image' => __( 'Remove featured image', 'atlo' ),
				'use_featured_image'    => __( 'Use as featured image', 'atlo' ),
				'insert_into_item'      => __( 'Insert into item', 'atlo' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'atlo' ),
				'items_list'            => __( 'Items list', 'atlo' ),
				'items_list_navigation' => __( 'Items list navigation', 'atlo' ),
				'filter_items_list'     => __( 'Filter items list', 'atlo' ),
			),
			'label'               => __( 'Member', 'atlo' ),
			'description'         => __( 'Members at AtLo', 'atlo' ),
			'menu_icon'           => 'dashicons-location',
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => array(
				'with_front' => false,
				'slug'       => 'members',
			),
			'capability_type'     => 'post',
			'supports'            => array(
				'title',
				'editor',
				'revisions',
				'author',
				'thumbnail',
				'comments',
				'custom-fields',
			),
		);
		register_post_type( $this->cpt_name, $cpt_args );
	}
}

Atlo_Post_Type_Member::get_instance();