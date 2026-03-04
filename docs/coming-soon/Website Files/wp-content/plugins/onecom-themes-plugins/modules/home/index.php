<?php
add_action(
	'admin_enqueue_scripts',
	function () {
		if ( function_exists( 'get_current_screen' ) && get_current_screen()->id === '_page_onecom-home' ) {
			wp_deregister_style( 'wp-block-editor' );
		}
		wp_enqueue_script( 'oc_home_page', ONECOM_WP_URL . 'modules/home/js/index.umd.js', array( 'jquery' ), ONECOM_WP_VERSION, true );
		wp_enqueue_style( 'oc_gravity-css', ONECOM_WP_URL . 'modules/home/css/one.min.css', null, ONECOM_WP_VERSION );
		//  wp_enqueue_style('oc_alp_style', ONECOM_WP_URL . 'modules/advanced-login-protection/assets/css/alp.css',array(),ONECOM_WP_VERSION );
		if ( SCRIPT_DEBUG || SCRIPT_DEBUG == 'true' ) {
			wp_enqueue_script( 'oc_home_page_main', ONECOM_WP_URL . 'modules/home/js/main.js', array( 'jquery' ), ONECOM_WP_VERSION, true );
			wp_enqueue_style( 'oc_home_page-css', ONECOM_WP_URL . 'modules/home/css/main.css', array( 'oc_gravity-css' ), ONECOM_WP_VERSION );
		} else {
			wp_enqueue_script( 'oc_home_page_main', ONECOM_WP_URL . 'assets/min-js/main.min.js', array( 'jquery' ), ONECOM_WP_VERSION, true );
			wp_enqueue_style( 'oc_home_page-css', ONECOM_WP_URL . 'assets/min-css/main.min.css', array( 'oc_gravity-css' ), ONECOM_WP_VERSION );
		}
		wp_localize_script(
			'oc_home_page_main',
			'oc_home_ajax_obj',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'oc_home_ajax' ),
				'home_url' => admin_url( 'admin.php?page=onecom-home' ),
			)
		);
	}
);
function wporg_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	require_once ONECOM_WP_PATH . 'modules/home/templates/home.php';
}

function wporg_options_page() {
	add_submenu_page( 'onecom-wp', __( 'Home', 'onecom-wp' ), '<span id="onecom_home">Home</span>', 'manage_options', 'onecom-home', 'wporg_options_page_html', -1 );
}

add_action( 'admin_menu', 'wporg_options_page' );
add_action(
	'wp_ajax_oc_home_silence_tour',
	function () {
		update_site_option( 'oc_home_silence_tour', true );
		wp_send_json( array( 'status' => 'success' ) );
	}
);

add_action( 'init', 'show_welcome_modal' );

// function to show the modal based on the user meta values
function show_welcome_modal(): void {
	$welcome_modal_closed = false;
	$user_id              = get_current_user_id();
	if ( $user_id ) {
		// Retrieve the user meta
		$welcome_modal_closed = get_user_meta( $user_id, 'oc-welcome-modal-closed', true );
	}
	if ( $welcome_modal_closed !== true && $welcome_modal_closed !== '1' ) {
		add_action( 'admin_footer', 'welcome_popup_init' );
	}
}


/**
 * @return void
 * function to include the template of welcome modal
 */
function welcome_popup_init() {
	require_once ONECOM_WP_PATH . 'modules/home/templates/welcome-modal.php';
}
require_once ONECOM_WP_PATH . '/modules/home/oc-home-sections.php';
$home_sections = new OneHomeSections();
