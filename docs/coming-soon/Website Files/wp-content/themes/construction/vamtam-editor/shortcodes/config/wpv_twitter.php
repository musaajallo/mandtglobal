<?php
return array(
	"name" => __( "Twitter Timeline", 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'twitter' ),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "wpv_twitter",
	'controls' => 'size name clone edit delete',
	"options" => array(

		array(
			'name' => __( 'Type', 'construction' ) ,
			'id' => 'type',
			'default' => 'user',
			'type' => 'select',
			'options' => array(
				'user' => __( 'Single user', 'construction' ),
				'search' => __( 'Search results ', 'construction' ),
			),
		) ,

		array(
			'name' => __( 'Username or Search Terms', 'construction' ) ,
			'id' => 'param',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __( 'Number of Tweets', 'construction' ) ,
			'id' => 'limit',
			'default' => 5,
			'type' => 'range',
			'min' => 1,
			'max' => 20,
		) ,

		array(
			'name' => __( 'Title (optional)', 'construction' ) ,
			'desc' => __( 'The title is placed just above the element.', 'construction' ),
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
				'double' => __( 'Title with divider under it ', 'construction' ),
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
	),
);
