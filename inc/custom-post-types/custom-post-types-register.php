<?php
/**
 * Init/require CPTs
 *
 * @action after_theme_setup
 * @returns null
 * 
 * @package Atlo
 */
function atlo_post_types_init() {
	// General class
	require_once( get_stylesheet_directory() . '/inc/custom-post-types/class-atlo-post-type.php' );
	// Classes for individual CPTs
	require_once( get_stylesheet_directory() . '/inc/custom-post-types/class-atlo-post-type-member.php' );
}

add_action( 'after_setup_theme', 'atlo_post_types_init' );