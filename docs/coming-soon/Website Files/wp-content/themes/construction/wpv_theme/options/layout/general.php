<?php

/**
 * Theme options / Layout / General
 *
 * @package wpv
 * @subpackage construction
 */

return array(
array(
	'name' => __( 'General', 'construction' ),
	'type' => 'start',
),

array(
	'name' => __( 'Responsive Layout', 'construction' ),
	'desc' => __( 'Enabling this option will make the layout respond to the screen resolutions.It is useful mostly on mobile phones.', 'construction' ),
	'id' => 'is-responsive',
	'type' => 'toggle',
	'class' => 'hidden',
),

array(
	'name' => __( 'Layout Type', 'construction' ),
	'desc' => __( 'Please note that in full width layout mode, the body background option found in Styles - Body, acts as page background.', 'construction' ),
	'id' => 'site-layout-type',
	'type' => 'select',
	'options' => array(
		'boxed' => __( 'Boxed', 'construction' ),
		'full' => __( 'Full width', 'construction' ),
	),
),

array(
	'name' => __( 'Maximum Page Width', 'construction' ),
	'desc' => sprintf( __( 'If you have changed this option, please use the <a href="%s" title="Regenerate thumbnails" target="_blank">Regenerate thumbnails</a> plugin in order to update your images.', 'construction' ), 'http://wordpress.org/extend/plugins/regenerate-thumbnails/' ),
	'id' => 'site-max-width',
	'type' => 'select',
	'options' => array(
		960 => '960px',
		1140 => '1140px',
		1260 => '1260px',
		1400 => '1400px',
	),
),

	array(
		'type' => 'end'
	),
);