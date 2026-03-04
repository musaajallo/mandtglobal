<?php

/**
 * Theme options / Layout / Header
 *
 * @package wpv
 * @subpackage construction
 */

return array(
array(
	'name' => __( 'Header', 'construction' ),
	'type' => 'start',
),

array(
	'name' => __( 'Header Layout', 'construction' ),
	'desc' => __( 'Please note that the theme uses Revolution Slider and its option panel is found in the WordPress navigation menu on the left', 'construction' ),
	'type' => 'info',
),

array(
	'name'        => __( 'Header Layout', 'construction' ),
	'type'        => 'autofill',
	'class'       => 'no-box ' . ( wpv_get_option( 'header-logo-type' ) === 'names' ? 'hidden' : ''), // xss ok
	'option_sets' => array(
		array(
			'name'   => __( 'One row, left logo, menu on the right', 'construction' ),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-1.png',
			'values' => array(
				'header-layout' => 'logo-menu',
			),
		),
		array(
			'name'   => __( 'Two rows; left-aligned logo on top, right-aligned text and search', 'construction' ),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-2.png',
			'values' => array(
				'header-layout' => 'logo-text-menu',
			),
		),
		array(
			'name'   => __( 'Two rows; centered logo on top', 'construction' ),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-3.png',
			'values' => array(
				'header-layout' => 'standard',
			),
		),
	),
),


array(
	'name' => __( 'Header Height', 'construction' ),
	'desc' => __( 'This is the area above the slider.', 'construction' ),
	'id'   => 'header-height',
	'type' => 'range',
	'min'  => 30,
	'max'  => 300,
	'unit' => 'px',
),
array(
	'name' => __( 'Sticky Header', 'construction' ),
	'desc' => __( 'This option is switched off automatically for mobile devices because the animation is not well supported by the majority of the mobile devices.', 'construction' ),
	'id'   => 'sticky-header',
	'type' => 'toggle',
),


array(
	'name' => __( 'Enable Header Search', 'construction' ),
	'id'   => 'enable-header-search',
	'type' => 'toggle',
),

array(
	'name'  => __( 'Full Width Header', 'construction' ),
	'id'    => 'full-width-header',
	'type'  => 'toggle',
	'class' => 'fhl fhl-logo-menu',
),

array(
	'name'    => __( 'Top Bar Layout', 'construction' ),
	'id'      => 'top-bar-layout',
	'type'    => 'select',
	'options' => array(
		''            => __( 'Disabled', 'construction' ),
		'menu-social' => __( 'Left: Menu, Right: Social Icons', 'construction' ),
		'social-menu' => __( 'Left: Social Icons, Right: Menu', 'construction' ),
		'text-menu'   => __( 'Left: Text, Right: Menu', 'construction' ),
		'menu-text'   => __( 'Left: Menu, Right: Text', 'construction' ),
		'social-text' => __( 'Left: Social Icons, Right: Text', 'construction' ),
		'text-social' => __( 'Left: Text, Right: Social Icons', 'construction' ),
		'fulltext'    => __( 'Text only', 'construction' ),
	),
	'field_filter' => 'ftbl',
),

array(
	'name'  => __( 'Top Bar Text', 'construction' ),
	'desc'  => __( 'You can place plain text, HTML and shortcodes.', 'construction' ),
	'id'    => 'top-bar-text',
	'type'  => 'editor',
	'class' => 'ftbl ftbl-menu-text ftbl-text-menu ftbl-social-text ftbl-text-social ftbl-fulltext',
),

array(
	'name'  => __( 'Top Bar Social Text Lead', 'construction' ),
	'id'    => 'top-bar-social-lead',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Facebook Link', 'construction' ),
	'id'    => 'top-bar-social-fb',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Twitter Link', 'construction' ),
	'id'    => 'top-bar-social-twitter',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar LinkedIn Link', 'construction' ),
	'id'    => 'top-bar-social-linkedin',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Google+ Link', 'construction' ),
	'id'    => 'top-bar-social-gplus',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Flickr Link', 'construction' ),
	'id'    => 'top-bar-social-flickr',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Pinterest Link', 'construction' ),
	'id'    => 'top-bar-social-pinterest',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Dribbble Link', 'construction' ),
	'id'    => 'top-bar-social-dribbble',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Instagram Link', 'construction' ),
	'id'    => 'top-bar-social-instagram',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar YouTube Link', 'construction' ),
	'id'    => 'top-bar-social-youtube',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __( 'Top Bar Vimeo Link', 'construction' ),
	'id'    => 'top-bar-social-vimeo',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'    => __( 'Header Layout', 'construction' ), // dummy option, do not remove
	'id'      => 'header-layout',
	'type'    => 'select',
	'class'   => 'hidden',
	'options' => array(
		'standard'       => __( 'Two rows; centered logo on top', 'construction' ),
		'logo-menu'      => __( 'One row, left logo, menu on the right', 'construction' ),
		'logo-text-menu' => __( 'Two rows; left-aligned logo on top, right-aligned text and search', 'construction' ),
	),
	'field_filter' => 'fhl',
),

array(
	'name'   => __( 'Header Text Area', 'construction' ),
	'desc'   => __( 'You can place text/HTML or any shortcode in this field. The text will appear in the header on the left hand side.', 'construction' ),
	'id'     => 'header-text-main',
	'type'   => 'editor',
	'static' => true,
),

array(
	'name'   => __( 'Header Text Area - Right', 'construction' ),
	'desc'   => __( 'You can place text/HTML or any shortcode in this field. The text will appear in the header on the left hand side.', 'construction' ),
	'id'     => 'header-text-right',
	'type'   => 'editor',
	'static' => true,
	'class'  => 'fhl fhl-logo-text-menu',
),

array(
	'name' => __( 'Mobile Header', 'construction' ),
	'type' => 'separator',
),

array(
	'name'   => __( 'Enable Below', 'construction' ),
	'id'     => 'mobile-top-bar-resolution',
	'type'   => 'range',
	'min'    => 320,
	'max'    => 4000,
	'static' => true,
),

array(
	'name'   => __( 'Enable Search in Logo Bar', 'construction' ),
	'id'     => 'mobile-search-in-header',
	'type'   => 'toggle',
	'static' => true,
),

array(
	'name'   => __( 'Mobile Top Bar', 'construction' ),
	'id'     => 'mobile-top-bar',
	'type'   => 'editor',
	'static' => true,
),

	array(
		'type' => 'end'
	),

);