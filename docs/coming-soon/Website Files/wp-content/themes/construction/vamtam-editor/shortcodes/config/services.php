<?php
return array(
	'name' => __( 'Service Box', 'construction' ) ,
	'desc' => __( 'Please note that the service box may not work properly in one half to full width layouts.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'cog1' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'services',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __( 'Style', 'construction' ) ,
			'id' => 'fullimage',
			'default' => 'false',
			'type' => 'select',
			'options' => array(
				'false' => __( 'Style big icon with zoom out', 'construction' ),
				'true' => __( 'Style standard with an image or an icon ', 'construction' ),
			),
			'field_filter' => 'fbs',
		) ,

		array(
			'name' => __( 'Icon', 'construction' ) ,
			'desc' => __( 'This option overrides the "Image" option.', 'construction' ),
			'id' => 'icon',
			'default' => 'apple',
			'type' => 'icons',
		) ,
		array(
			"name" => __( "Icon Color", 'construction' ) ,
			"id" => "icon_color",
			"default" => 'accent6',
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
			"type" => "select",
		) ,
		array(
			'name' => __( 'Icon Size', 'construction' ),
			'id' => 'icon_size',
			'type' => 'range',
			'default' => 62,
			'min' => 8,
			'max' => 100,
			'class' => 'fbs fbs-true',
		),
		array(
			'name' => __( 'Icon Background', 'construction' ),
			'id' => 'background',
			'default' => 'accent1',
			'type' => 'color',
			'class' => 'fbs fbs-false',
		),

		array(
			'name' => __( 'Image', 'construction' ) ,
			'desc' => __( 'This option can be overridden by the "Icon" option.', 'construction' ),
			'id' => 'image',
			'default' => '',
			'type' => 'upload',
		) ,

		array(
			'name' => __( 'Title', 'construction' ) ,
			'id' => 'title',
			'default' => 'This is a title',
			'type' => 'text',
		) ,

		array(
			'name' => __( 'Description', 'construction' ) ,
			'id' => 'html-content',
			'default' => 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.

Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.',
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __( 'Text Alignment', 'construction' ) ,
			'id' => 'text_align',
			'default' => 'justify',
			'type' => 'select',
			'options' => array(
				'justify' => 'justify',
				'left' => 'left',
				'center' => 'center',
				'right' => 'right',
			)
		) ,
		array(
			'name' => __( 'Link', 'construction' ) ,
			'id' => 'button_link',
			'default' => '/',
			'type' => 'text'
		) ,

		array(
			'name' => __( 'Button Text', 'construction' ) ,
			'id' => 'button_text',
			'default' => 'learn more',
			'type' => 'text'
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
