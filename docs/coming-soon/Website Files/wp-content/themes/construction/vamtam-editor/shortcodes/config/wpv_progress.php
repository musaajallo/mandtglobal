<?php
return array(
	'name' => __( 'Progress Indicator', 'construction' ) ,
	'desc' => __( 'You can choose from % indicator or animated number.' , 'construction' ),
	'icon' => array(
		'char'    => WPV_Editor::get_icon( 'meter-medium' ),
		'size'    => '26px',
		'lheight' => '39px',
		'family'  => 'vamtam-editor-icomoon',
	),
	'value'    => 'wpv_progress',
	'controls' => 'size name clone edit delete',
	'options'  => array(
		array(
			'name'    => __( 'Type', 'construction' ),
			'id'      => 'type',
			'type'    => 'select',
			'default' => 'percentage',
			'options' => array(
				'percentage' => __( 'Percentage', 'construction' ),
				'number'     => __( 'Number', 'construction' ),
			),
			'field_filter' => 'fpis',
		),

		array(
			'name'    => __( 'Percentage', 'construction' ) ,
			'id'      => 'percentage',
			'default' => 0,
			'type'    => 'range',
			'min'     => 0,
			'max'     => 100,
			'unit'    => '%',
			'class'   => 'fpis fpis-percentage',
		) ,

		array(
			'name'    => __( 'Icon', 'construction' ) ,
			'id'      => 'icon',
			'default' => '',
			'type'    => 'icons',
			'class'   => 'fpis fpis-number'
		) ,

		array(
			'name'    => __( 'Value', 'construction' ) ,
			'id'      => 'value',
			'default' => 0,
			'type'    => 'range',
			'min'     => 0,
			'max'     => 100000,
			'class'   => 'fpis fpis-number',
		) ,

		array(
			'name'    => __( 'Before Value', 'construction' ) ,
			'id'      => 'before_value',
			'default' => '',
			'type'    => 'text',
			'class'   => 'fpis fpis-number',
		) ,

		array(
			'name'    => __( 'After Value', 'construction' ) ,
			'id'      => 'after_value',
			'default' => '',
			'type'    => 'text',
			'class'   => 'fpis fpis-number',
		) ,

		array(
			'name'    => __( 'Track Color', 'construction' ) ,
			'id'      => 'bar_color',
			'default' => 'accent1',
			'type'    => 'color',
			'class'   => 'fpis fpis-percentage',
		) ,

		array(
			'name'    => __( 'Bar Color', 'construction' ) ,
			'id'      => 'track_color',
			'default' => 'accent7',
			'type'    => 'color',
			'class'   => 'fpis fpis-percentage',
		) ,

		array(
			'name'    => __( 'Value Color', 'construction' ) ,
			'id'      => 'value_color',
			'default' => 'accent2',
			'type'    => 'color',
		) ,

		array(
			'name'    => __( 'Content', 'construction' ) ,
			'id'      => 'html-content',
			'default' => '',
			'type'    => 'editor',
			'holder'  => 'textarea',
		) ,

	) ,
);
