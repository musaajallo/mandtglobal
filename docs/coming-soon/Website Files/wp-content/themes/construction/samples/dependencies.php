<?php

/**
 * Declare plugin dependencies
 *
 * @package wpv
 */

/**
 * Declare plugin dependencies
 */
function wpv_register_required_plugins() {
	$plugins = array(
		array(
			'name' => 'Classic Editor',
			'slug' => 'classic-editor',
			'required' => true,
		),

		[
			'name'     => esc_html__( 'Classic Widgets', 'construction' ),
			'slug'     => 'classic-widgets',
			'required' => true,
			'category' => 'required',
		],

		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => false,
		),

		// array(
		// 	'name' => 'WP Retina 2x',
		// 	'slug' => 'wp-retina-2x',
		// 	'required' => false,
		// ),

		array(
			'name' => 'MailPoet 3',
			'slug' => 'mailpoet',
			'required' => false,
		),

		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
			'required' => false,
		),

		array(
			'name' => 'WooCommerce Product Archive Customizer',
			'slug' => 'woocommerce-product-archive-customiser',
			'required' => false,
		),

		array(
			'name' => 'Vamtam Push Menu',
			'slug' => 'vamtam-push-menu',
			'source' => WPV_PLUGINS . 'vamtam-push-menu.zip',
			'required' => false,
			'version' => '1.3.0',
		),

		array(
			'name' => 'Vamtam Portfolio Core',
			'slug' => 'vamtam-portfolio',
			'source' => WPV_PLUGINS . 'vamtam-portfolio.zip',
			'required' => false,
			'version' => '1.0.0',
		),

		array(
			'name' => 'Vamtam Testimonials Core',
			'slug' => 'vamtam-testimonials',
			'source' => WPV_PLUGINS . 'vamtam-testimonials.zip',
			'required' => false,
			'version' => '1.0.0',
		),

		array(
			'name' => 'Vamtam Importers',
			'slug' => 'vamtam-importers',
			'source' => WPV_PLUGINS . 'vamtam-importers.zip',
			'required' => false,
			'version' => '1.0.0',
		),

		array(
			'name' => 'Vamtam Twitter',
			'slug' => 'vamtam-twitter',
			'source' => WPV_PLUGINS . 'vamtam-twitter.zip',
			'required' => false,
			'version' => '1.0.0',
		),

		array(
			'name' => 'Revolution Slider',
			'slug' => 'revslider',
			'source' => WPV_PLUGINS . 'revslider.zip',
			'required' => false,
			'version' => '5.0.9',
		),

		array(
			'name'     => 'Booked',
			'slug'     => 'booked',
			'required' => false,
			'version'  => '2.4',
			'source'   => WPV_PLUGINS . 'booked.zip',
		),
	);

	$config = array(
		'default_path' => '',    // Default absolute path to pre-packaged plugins
		'is_automatic' => true,  // Automatically activate plugins after installation or not
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'wpv_register_required_plugins' );

function vamtam_tgmpa_bulk_install_setup() {
	if ( isset( $_GET['page'] ) && $_GET['page'] === 'tgmpa-install-plugins' ) {
		// this disables the fastcgi buffering for nginx servers
		header('X-Accel-Buffering: no');
	}
}
add_action('admin_init', 'vamtam_tgmpa_bulk_install_setup');
