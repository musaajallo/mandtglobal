<?php

/**
 * Slogan shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __( 'Call Out Box', 'construction' ) ,
	'desc' => __( 'You can place the call out box into а column - color box elemnent in order to have background color.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'font-size' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'slogan',
	'controls' => 'size name clone edit delete handle',
	'options' => array(
		array(
			'name' => __( 'Content', 'construction' ) ,
			'id' => 'html-content',
			'default' => __( '<h1>You can place your call out box text here</h1>', 'construction' ),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,
		array(
			'name' => __( 'Button Text', 'construction' ) ,
			'id' => 'button_text',
			'default' => 'Button Text',
			'type' => 'text'
		) ,
		array(
			'name' => __( 'Button Link', 'construction' ) ,
			'id' => 'link',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __( 'Button Icon', 'construction' ) ,
			'id' => 'button_icon',
			'default' => 'cart',
			'type' => 'icons',
		) ,
		array(
			'name' => __( 'Button Icon Style', 'construction' ),
			'type' => 'select-row',
			'selects' => array(
				'button_icon_color' => array(
					'desc' => __( 'Color:', 'construction' ),
					"default" => "accent 1",
					"prompt" => '',
					"options" => array(
						'accent1' => __( 'Accent 1', 'construction' ),
						'accent2' => __( 'Accent 2', 'construction' ),
						'accent3' => __( 'Accent 3', 'construction' ),
						'accent4' => __( 'Accent 4', 'construction' ),
						'accent5' => __( 'Accent 5', 'construction' ),
						'accent6' => __( 'Accent 6', 'construction' ),
						'accent7' => __( 'Accent 7', 'construction' ),
						'accent8' => __( 'Accent 8', 'construction' ),
					) ,
				),
				'button_icon_placement' => array(
					'desc' => __( 'Placement:', 'construction' ),
					"default" => 'left',
					"options" => array(
						'left' => __( 'Left', 'construction' ),
						'right' => __( 'Right', 'construction' ),
					) ,
				),
				),
		),
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
