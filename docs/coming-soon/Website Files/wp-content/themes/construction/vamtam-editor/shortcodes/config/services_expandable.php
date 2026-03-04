<?php

/**
 * Expandable services shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __( 'Expandable Box ', 'construction' ) ,
	'desc' => __( 'You have open and closed states of the box and you can set diffrenet content and background of each state.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'expand1' ),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'services_expandable',
	'controls' => 'size name clone edit delete',
	'callbacks' => array(
		'init' => 'init-expandable-services',
		'generated-shortcode' => 'generate-expandable-services',
	),
	'options' => array(
		array(
			'name' => __( 'Closed Background', 'construction' ) ,
			'type' => 'background',
			'id'   => 'background',
			'only' => 'color,image,repeat,size',
			'sep'  => '_',
		) ,

		array(
			'name'    => __( 'Expanded Background', 'construction' ) ,
			'type'    => 'color',
			'id'      => 'hover_background',
			'default' => 'accent1',
		) ,

		array(
			'name'    => __( 'Closed state image', 'construction' ) ,
			'id'      => 'image',
			'default' => '',
			'type'    => 'upload'
		) ,

		array(
			'name'    => __( 'Closed state icon', 'construction' ) ,
			'desc'    => __( 'The icon will not be visable if you have an image in the option above.', 'construction' ),
			'id'      => 'icon',
			'default' => '',
			'type'    => 'icons',
		) ,
		array(
			"name"    => __( "Icon Color", 'construction' ) ,
			"id"      => "icon_color",
			"default" => 'accent6',
			"type"    => "color",
		) ,
		array(
			'name'    => __( 'Icon Size', 'construction' ),
			'id'      => 'icon_size',
			'type'    => 'range',
			'default' => 62,
			'min'     => 8,
			'max'     => 100,
		),

		array(
			'name'    => __( 'Title', 'construction' ) ,
			'type'    => 'text',
			'id'      => 'title',
			'default' => '',
		) ,

		array(
			'name'    => __( 'Closed state text', 'construction' ) ,
			'id'      => 'closed',
			'default' => __( 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'construction' ),
			'type'    => 'textarea',
			'class'   => 'noattr',
		) ,

		array(
			'name'    => __( 'Expanded state', 'construction' ) ,
			'id'      => 'html-content',
			'default' => '[split]',
			'type'    => 'editor',
			'holder'  => 'textarea',
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
