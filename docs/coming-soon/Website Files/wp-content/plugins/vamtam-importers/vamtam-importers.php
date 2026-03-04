<?php

/*
Plugin Name: VamTam Importers
Description: This plugin is used in order to import the sample content for VamTam themes
Version: 1.2.0
Author: VamTam
Author URI: http://vamtam.com
*/

class Vamtam_Importers {
	const VERSION = '1.2.0';

	public function __construct() {
		add_action( 'admin_init', array( __CLASS__, 'admin_init' ), 1 );

		if ( ! class_exists( 'Vamtam_Updates_2' ) ) {
			require 'vamtam-updates/class-vamtam-updates.php';
		}

		new Vamtam_Updates_2( __FILE__ );
	}

	public static function admin_init() {
		require 'importers/importer/importer.php';
		require 'importers/widget-importer/importer.php';
		require 'importers/revslider/importer.php';
		require 'importers/booked/importer.php';
	}

}

new Vamtam_Importers;
