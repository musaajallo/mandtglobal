<?php
return array(
	'name' => __( 'Tabs', 'construction' ) ,
	'desc' => __( 'Change to vertical or horizontal tabs from the element option panel.  Add an icon by clicking on the "pencil" icon next to the pane title. Adding tabs, changing the name of the tab and adding content into the tabs is done when the tab element is toggled.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'storage1' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'tabs',
	'controls' => 'size name clone edit delete always-expanded',
	'callbacks' => array(
		'init' => 'init-tabs',
		'generated-shortcode' => 'generate-tabs',
	),
	'options' => array(

		array(
			'name' => __( 'Layout', 'construction' ) ,
			"id" => "layout",
			"default" => 'horizontal',
			"type" => "radio",
			'options' => array(
				'horizontal' => __( 'Horizontal', 'construction' ),
				'vertical' => __( 'Vertical', 'construction' ),
			),
			'field_filter' => 'fts',
		) ,
		array(
			'name' => __( 'Navigation Color', 'construction' ) ,
			'id' => 'nav_color',
			'type' => 'color',
			'default' => 'accent2',
		) ,
		array(
			'name' => __( 'Navigation Background', 'construction' ) ,
			'id' => 'left_color',
			'type' => 'color',
			'default' => 'accent8',
		) ,
		array(
			'name' => __( 'Content Background', 'construction' ) ,
			'id' => 'right_color',
			'type' => 'color',
			'default' => 'accent1',
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
				'single' => __( 'Title with divider next to it.', 'construction' ),
				'double' => __( 'Title with divider below', 'construction' ),
				'no-divider' => __( 'No Divider', 'construction' ),
			),
			'class' => 'fts fts-horizontal',
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
