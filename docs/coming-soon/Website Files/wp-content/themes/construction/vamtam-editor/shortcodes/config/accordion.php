<?php
return array(
	"name" => __( "Accordion", 'construction' ),
	'desc' => __( 'Adding panes, changing the name of the pane and adding content into the panes is done when the accordion element is toggled.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'menu1' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "accordion",
	'controls' => 'size name clone edit delete always-expanded',
	'callbacks' => array(
		'init' => 'init-accordion',
		'generated-shortcode' => 'generate-accordion',
	),
	"options" => array(

		array(
			'name' => __( 'Allow All Panes to be Closed', 'construction' ) ,
			'desc' => __( 'If enabled, the accordion will load with collapsed panes. Clicking on the title of the currently active pane will close it. Clicking on the title of an inactive pane will change the active pane.', 'construction' ),
			'id' => 'collapsible',
			'default' => true,
			'type' => 'toggle'
		) ,

		array(
			'name' => __( 'Pane Background', 'construction' ) ,
			'id' => 'closed_bg',
			'default' => 'accent1',
			'type' => 'color'
		) ,

		array(
			'name' => __( 'Title Color', 'construction' ) ,
			'id' => 'title_color',
			'default' => 'accent8',
			'type' => 'color'
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
