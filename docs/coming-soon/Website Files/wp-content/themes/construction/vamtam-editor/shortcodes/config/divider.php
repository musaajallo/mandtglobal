<?php
return array(
	'name' => __( 'Divider', 'construction' ) ,
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'minus' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'divider',
	'controls' => 'name clone edit delete',
	'options' => array(
		array(
			'name' => __( 'Type', 'construction' ) ,
			'desc' => __( '"Clear floats" is just a div element with <em>clear:both</em> styles. Although it is safe to say that unless you already know how to use it, you will not need this, you can <a href="https://developer.mozilla.org/en-US/docs/CSS/clear">click here for a more detailed description</a>.', 'construction' ),
			'id' => 'type',
			'default' => 1,
			'options' => array(
				1 => __( 'Divider line 1 px with accent line', 'construction' ) ,
				2 => __( 'Divider double lines', 'construction' ) ,
				3 => __( 'Divider line 1 px', 'construction' ) ,
				'clear' => __( 'Clear floats', 'construction' ) ,
			) ,
			'type' => 'select',
			'class' => 'add-to-container',
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
