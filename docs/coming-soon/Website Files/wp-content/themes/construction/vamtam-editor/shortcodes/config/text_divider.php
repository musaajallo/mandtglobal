<?php
return array(
	'name' => __( 'Text Divider', 'construction' ) ,
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'minus' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'text_divider',
	'controls' => 'name clone edit delete',
	'options' => array(
		array(
			'name' => __( 'Type', 'construction' ) ,
			'id' => 'type',
			'default' => 'single',
			'options' => array(
				'single' => __( 'Title in the middle', 'construction' ) ,
				'double' => __( 'Title above divider', 'construction' ) ,
			) ,
			'type' => 'select',
			'class' => 'add-to-container',
			'field_filter' => 'ftds',
		) ,
		array(
			'name' => __( 'Text', 'construction' ) ,
			'id' => 'html-content',
			'default' => __( 'Text Divider', 'construction' ),
			'type' => 'editor',
			'class' => 'ftds ftds-single ftds-double',
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
