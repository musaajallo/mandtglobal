<?php

/*
Plugin Name: VamTam Testimonials
Description: Registers the testimonials post type used in VamTam themes
Version: 1.0.0
Author: VamTam
Author URI: http://vamtam.com
*/

class Vamtam_Testimonials_Core {
	const VERSION = '1.0.0';

	public function __construct() {
		add_action( 'init', array( __CLASS__, 'init' ) );
		add_action( 'admin_init', array( __CLASS__, 'admin_init' ) );

		if ( ! class_exists( 'Vamtam_Updates_2' ) ) {
			require 'vamtam-updates/class-vamtam-updates.php';
		}

		new Vamtam_Updates_2( __FILE__ );
	}

	/**
	 * flush rewrite rules on update/install
	 */
	public static function admin_init() {
		if ( get_option( 'vamtam-testimonials-version' ) !== self::VERSION ) {
			flush_rewrite_rules();
			update_option( 'vamtam-testimonials-version', self::VERSION );
		}
	}

	/**
	 * Register post type and taxonomy
	 */
	public static function init() {
		$domain = 'vamtam-testimonials';
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
		load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

		register_post_type(
			'testimonials', array(
				'labels' => array(
					'name'               => _x( 'Testimonials', 'post type general name', 'vamtam-testimonials' ),
					'singular_name'      => _x( 'Testimonial', 'post type singular name', 'vamtam-testimonials' ),
					'add_new'            => _x( 'Add New', 'testimonials', 'vamtam-testimonials' ),
					'add_new_item'       => __( 'Add New Testimonial', 'vamtam-testimonials' ),
					'edit_item'          => __( 'Edit Testimonial', 'vamtam-testimonials' ),
					'new_item'           => __( 'New Testimonial', 'vamtam-testimonials' ),
					'view_item'          => __( 'View Testimonial', 'vamtam-testimonials' ),
					'search_items'       => __( 'Search Testimonials', 'vamtam-testimonials' ),
					'not_found'          => __( 'No testimonials found', 'vamtam-testimonials' ),
					'not_found_in_trash' => __( 'No testimonials found in Trash', 'vamtam-testimonials' ),
					'parent_item_colon'  => '',
				),
				'singular_label'      => __( 'testimonial', 'vamtam-testimonials' ),
				'public'              => true,
				'publicly_queryable'  => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'show_in_nav_menus'   => false,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'menu_position'       => '55.3',
				'supports'            => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'comments',
					'page-attributes',
				)
			)
		);

		register_taxonomy(
			'testimonials_category', 'testimonials', array(
				'hierarchical' => true,
				'labels'       => array(
					'name'                       => _x( 'Testimonials Category', 'taxonomy general name', 'vamtam-testimonials' ),
					'singular_name'              => _x( 'Testimonial Category', 'taxonomy singular name', 'vamtam-testimonials' ),
					'search_items'               => __( 'Search Categories', 'vamtam-testimonials' ),
					'popular_items'              => __( 'Popular Categories', 'vamtam-testimonials' ),
					'all_items'                  => __( 'All Categories', 'vamtam-testimonials' ),
					'parent_item'                => null,
					'parent_item_colon'          => null,
					'edit_item'                  => __( 'Edit Testimonials Category', 'vamtam-testimonials' ),
					'update_item'                => __( 'Update Testimonials Category', 'vamtam-testimonials' ),
					'add_new_item'               => __( 'Add New Testimonials Category', 'vamtam-testimonials' ),
					'new_item_name'              => __( 'New Testimonials Category Name', 'vamtam-testimonials' ),
					'separate_items_with_commas' => __( 'Separate Testimonials category with commas', 'vamtam-testimonials' ),
					'add_or_remove_items'        => __( 'Add or remove testimonials category', 'vamtam-testimonials' ),
					'choose_from_most_used'      => __( 'Choose from the most used testimonials category', 'vamtam-testimonials' )
				),
				'show_ui'   => true,
				'query_var' => false,
				'rewrite'   => false,
			)
		);
	}

}

new Vamtam_Testimonials_Core;
