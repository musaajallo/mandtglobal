<?php

/*
Plugin Name: VamTam Portfolio Core
Description: Registers the portfolio post type used in VamTam themes
Version: 1.0.1
Author: VamTam
Author URI: http://vamtam.com
*/

class Vamtam_Portfolio_Core {
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
		if ( get_option( 'vamtam-portfolio-version' ) !== self::VERSION ) {
			flush_rewrite_rules();
			update_option( 'vamtam-portfolio-version', self::VERSION );
		}

		if ( get_option( 'wpv_portfolio-slug' ) !== get_option( 'wpv_previous-portfolio-slug' ) ) {
			flush_rewrite_rules();
			update_option( 'wpv_previous-portfolio-slug', get_option( 'wpv_portfolio-slug' ) );
		}
	}

	/**
	 * Register post type and taxonomy
	 */
	public static function init() {
		$domain = 'vamtam-portfolio';
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
		load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

		register_post_type(
			'portfolio', array(
				'labels' => array(
					'name'               => _x( 'Portfolios', 'post type general name', 'vamtam-portfolio' ),
					'singular_name'      => _x( 'Portfolio', 'post type singular name', 'vamtam-portfolio' ),
					'add_new'            => _x( 'Add New', 'portfolio', 'vamtam-portfolio' ),
					'add_new_item'       => __( 'Add New Portfolio', 'vamtam-portfolio' ),
					'edit_item'          => __( 'Edit Portfolio', 'vamtam-portfolio' ),
					'new_item'           => __( 'New Portfolio', 'vamtam-portfolio' ),
					'view_item'          => __( 'View Portfolio', 'vamtam-portfolio' ),
					'search_items'       => __( 'Search Portfolios', 'vamtam-portfolio' ),
					'not_found'          => __( 'No portfolios found', 'vamtam-portfolio' ),
					'not_found_in_trash' => __( 'No portfolios found in Trash', 'vamtam-portfolio' ),
					'parent_item_colon'  => '',
				),
				'singular_label'      => __( 'portfolio', 'vamtam-portfolio' ),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'rewrite'             => array(
					'with_front' => false,
					'slug'       => function_exists( 'wpv_get_option' ) ? wpv_get_option( 'portfolio-slug' ) : 'portfolio',
				),
				'query_var'     => false,
				'menu_position' => '55.4',
				'supports'      => array(
					'comments',
					'editor',
					'excerpt',
					'page-attributes',
					'thumbnail',
					'title',
				),
			)
		);

		register_taxonomy(
			'portfolio_category', 'portfolio', array(
				'hierarchical' => true,
				'labels'       => array(
					'name'                       => _x( 'Portfolio Categories', 'taxonomy general name', 'vamtam-portfolio' ),
					'singular_name'              => _x( 'Portfolio Category', 'taxonomy singular name', 'vamtam-portfolio' ),
					'search_items'               => __( 'Search Portfolio Categories', 'vamtam-portfolio' ),
					'popular_items'              => __( 'Popular Portfolio Categories', 'vamtam-portfolio' ),
					'all_items'                  => __( 'All Portfolio Categories', 'vamtam-portfolio' ),
					'parent_item'                => null,
					'parent_item_colon'          => null,
					'edit_item'                  => __( 'Edit Portfolio Category', 'vamtam-portfolio' ),
					'update_item'                => __( 'Update Portfolio Category', 'vamtam-portfolio' ),
					'add_new_item'               => __( 'Add New Portfolio Category', 'vamtam-portfolio' ),
					'new_item_name'              => __( 'New Portfolio Category Name', 'vamtam-portfolio' ),
					'separate_items_with_commas' => __( 'Separate Portfolio category with commas', 'vamtam-portfolio' ),
					'add_or_remove_items'        => __( 'Add or remove portfolio category', 'vamtam-portfolio' ),
					'choose_from_most_used'      => __( 'Choose from the most used portfolio category', 'vamtam-portfolio' )
				),
				'show_ui'   => true,
				'query_var' => true,
				'rewrite'   => false,
			)
		);
	}

}

new Vamtam_Portfolio_Core;
