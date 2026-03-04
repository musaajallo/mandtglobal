<?php
return array(
	'name' => __( 'IFrame', 'construction' ) ,
	'desc' => __( 'You can embed a website using this element.' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'tablet' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'iframe',
	'controls' => 'size name clone edit delete',
	'options' => array(
		
		array(
			'name' => __( 'Source', 'construction' ) ,
			'desc' => __( 'The URL of the page you want to display. Please note that the link should be in this format - http://www.google.com.<br/><br/>', 'construction' ),
			'id' => 'src',
			'size' => 30,
			'default' => 'http://apple.com',
			'type' => 'text',
			'holder' => 'div',
			'placeholder' => __( 'Click edit to set iframe source url', 'construction' ),
		) ,
		array(
			'name' => __( 'Width', 'construction' ) ,
			'desc' => __( 'You can use % or px as units for width.<br/><br/>', 'construction' ) ,
			'id' => 'width',
			'size' => 30,
			'default' => '100%',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Height', 'construction' ) ,
			'desc' => __( 'You can use px as units for height.<br/><br/>', 'construction' ) ,
			'id' => 'height',
			'size' => 30,
			'default' => '400px',
			'type' => 'text',
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
				'double' => __( 'Title with divider below', 'construction' ),
				'no-divider' => __( 'No Divider', 'construction' ),
			),
		) ,
	) ,
);
