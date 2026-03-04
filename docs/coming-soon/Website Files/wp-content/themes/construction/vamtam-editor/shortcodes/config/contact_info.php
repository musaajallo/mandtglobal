<?php

/**
 * Contact info shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __( 'Contact Info', 'construction' ) ,
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'vcard' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'contact_info',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __( 'Name', 'construction' ),
			'id' => 'name',
			'default' => 'Nick Perry',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __( 'Color', 'construction' ),
			'id' => 'color',
			'default' => 'accent2',
			'prompt' => __( '---', 'construction' ),
			'options' => array(
				'accent1' => __( 'Accent 1', 'construction' ),
				'accent2' => __( 'Accent 2', 'construction' ),
				'accent3' => __( 'Accent 3', 'construction' ),
				'accent4' => __( 'Accent 4', 'construction' ),
				'accent5' => __( 'Accent 5', 'construction' ),
				'accent6' => __( 'Accent 6', 'construction' ),
				'accent7' => __( 'Accent 7', 'construction' ),
				'accent8' => __( 'Accent 8', 'construction' ),

			),
			'type' => 'select',
		),
		array(
			'name' => __( 'Phone', 'construction' ),
			'id' => 'phone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __( 'Cell Phone', 'construction' ),
			'id' => 'cellphone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __( 'Email', 'construction' ),
			'id' => 'email',
			'default' => 'office@test.com',
			'type' => 'text'
		),
		array(
			'name' => __( 'Address', 'construction' ),
			'id' => 'address',
			'default' => 'London',
			'size' => 30,
			'type' => 'textarea'
		),


		array(
			'name' => __( 'Title (optional)', 'construction' ) ,
			'desc' => __( 'The column title is placed just above the element.', 'construction' ),
			'id' => 'column_title',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __( 'Title Type (optional)', 'construction' ) ,
			'id' => 'column_title_type',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __( 'Title with divider next to it', 'construction' ),
				'double' => __( 'Title with divider below', 'construction' ),
				'no-divider' => __( 'No Divider', 'construction' ),
			),
		) ,
		array(
			'name'    => __( 'Element Animation (optional)', 'construction' ) ,
			'id'      => 'column_animation',
			'default' => 'none',
			'type'    => 'select',
			'options' => array(
				'none'        => __( 'No animation', 'construction' ),
				'from-left'   => __( 'Appear from left', 'construction' ),
				'from-right'  => __( 'Appear from right', 'construction' ),
				'from-top'    => __( 'Appear from top', 'construction' ),
				'from-bottom' => __( 'Appear from bottom', 'construction' ),
				'fade-in'     => __( 'Fade in', 'construction' ),
				'zoom-in'     => __( 'Zoom in', 'construction' ),
			),
		) ,
	) ,
);
