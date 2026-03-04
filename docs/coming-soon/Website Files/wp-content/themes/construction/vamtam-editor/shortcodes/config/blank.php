<?php
return array(
	'name' => __( 'Blank Space', 'construction' ) ,
	'desc' => __( 'You can increase or decrease the space between elements using this shortcode.' , 'construction' ),
	'icon' => array(
		'char'    => WPV_Editor::get_icon( 'page-break' ),
		'size'    => '30px',
		'lheight' => '45px',
		'family'  => 'vamtam-editor-icomoon',
	),
	'value'    => 'blank',
	'controls' => 'name clone edit delete',
	'class'    => 'slim',
	'options'  => array(
		array(
			'name'    => __( 'Height (px)', 'construction' ) ,
			'desc'    => __( 'You can increase or decrease the space between elements using this option. Please note that using negative number - decreasing space will not work for all elements and situations ', 'construction' ),
			'id'      => 'h',
			'default' => 30,
			'min'     => -500,
			'max'     => 500,
			'type'    => 'range',
		) ,
		array(
			'name'    => __( 'Hide on Low Resolutions', 'construction' ) ,
			'id'      => 'hide_low_res',
			'default' => false,
			'type'    => 'toggle',
		) ,
		array(
			'name'    => __( 'Class', 'construction' ) ,
			'id'      => 'class',
			'default' => '',
			'type'    => 'text',
		) ,
	) ,
);