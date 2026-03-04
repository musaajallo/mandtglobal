<?php
return array(
	'name' => __( 'Google Maps', 'construction' ) ,
	'desc' => __('In order to enable Google Map you need:<br>
				 Insert the Google Map element into the editor, open its option panel by clicking on the icon- edit on the right of the element and fill in all fields necessary.
' , 'construction'),
		'icon' => array(
		'char' => WPV_Editor::get_icon( 'location1' ),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'gmap',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __( 'Address (optional)', 'construction' ) ,
			'desc' => __( 'Unless you\'ve filled in the Latitude and Longitude options, please enter the address that you want to be shown on the map. If you encounter any errors about the maximum number of address translation requests per page, you should either use the latitude/longitude options or upgrade to the paid Google Maps API.', 'construction' ),
			'id' => 'address',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Latitude', 'construction' ) ,
			'desc' => __( 'This option is not necessary if an address is set.<br/><br/>', 'construction' ),
			'id' => 'latitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Longitude', 'construction' ) ,
			'desc' => __( 'This option is not necessary if an address is set.<br/><br/>', 'construction' ),
			'id' => 'longitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Zoom', 'construction' ) ,
			'desc' => __( 'Default map zoom level.<br/><br/>', 'construction' ),
			'id' => 'zoom',
			'default' => '14',
			'min' => 1,
			'max' => 19,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __( 'Marker', 'construction' ) ,
			'desc' => __( 'Enable an arrow pointing at the address.<br/><br/>', 'construction' ),
			'id' => 'marker',
			'default' => true,
			'type' => 'toggle'
		) ,
		array(
			'name' => __( 'HTML', 'construction' ) ,
			'desc' => __( 'HTML code to be shown in a popup above the marker.<br/><br/>', 'construction' ),
			'id' => 'html',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Popup Marker', 'construction' ) ,
			'desc' => __( 'Enable to open the popup above the marker by default.<br/><br/>', 'construction' ),
			'id' => 'popup',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __( 'Controls (optional)', 'construction' ) ,
			'desc' => sprintf( __( 'This option is intended to be used only by advanced users and is not necessary for most use cases. Please refer to the <a href="%s" title="Google Maps API documentation">API documentation</a> for details.', 'construction' ), 'https://developers.google.com/maps/documentation/javascript/controls' ),
			'id' => 'controls',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __( 'Scrollwheel', 'construction' ) ,
			'id' => 'scrollwheel',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __( 'Maptype (optional)', 'construction' ) ,
			'id' => 'maptype',
			'default' => 'ROADMAP',
			'options' => array(
				'ROADMAP' => __( 'Default road map', 'construction' ) ,
				'SATELLITE' => __( 'Google Earth satellite', 'construction' ) ,
				'HYBRID' => __( 'Mixture of normal and satellite', 'construction' ) ,
				'TERRAIN' => __( 'Physical map', 'construction' ) ,
			) ,
			'type' => 'select',
		) ,

		array(
			'name' => __( 'Color (optional)', 'construction' ) ,
			'desc' => __( 'Defines the overall hue for the map. It is advisable that you avoid gray colors, as they are not well-supported by Google Maps.', 'construction' ),
			'id' => 'hue',
			'default' => '',
			'prompt' => __( 'Default', 'construction' ) ,
			'options' => array(
				'accent1' => __( 'Accent 1', 'construction' ),
				'accent2' => __( 'Accent 2', 'construction' ),
				'accent3' => __( 'Accent 3', 'construction' ),
				'accent4' => __( 'Accent 4', 'construction' ),
				'accent5' => __( 'Accent 5', 'construction' ),
				'accent6' => __( 'Accent 6', 'construction' ),
				'accent7' => __( 'Accent 7', 'construction' ),
				'accent8' => __( 'Accent 8', 'construction' ),
			) ,
			'type' => 'select',
		) ,
		array(
			'name' => __( 'Width (optional)', 'construction' ) ,
			'desc' => __( 'Set to 0 is the full width.<br/><br/>', 'construction' ) ,
			'id' => 'width',
			'default' => 0,
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __( 'Height', 'construction' ) ,
			'id' => 'height',
			'default' => '400',
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,


		array(
			'name' => __( 'Title (optioanl)', 'construction' ) ,
			'desc' => __( 'The title is placed just above the element.<br/><br/>', 'construction' ),
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