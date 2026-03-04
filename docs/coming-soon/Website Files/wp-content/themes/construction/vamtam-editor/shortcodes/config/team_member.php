<?php
return 	array(
	'name' => __( 'Team Member', 'construction' ),
	'icon' => array(
		'char'    => WPV_Editor::get_icon( 'profile' ),
		'size'    => '26px',
		'lheight' => '39px',
		'family'  => 'vamtam-editor-icomoon',
	),
	'value'    => 'team_member',
	'controls' => 'size name clone edit delete',
	'options'  => array(

		array(
			'name'    => __( 'Name', 'construction' ),
			'id'      => 'name',
			'default' => 'Nikolay Yordanov',
			'type'    => 'text',
			'holder'  => 'h5',
		),
		array(
			'name'    => __( 'Position', 'construction' ),
			'id'      => 'position',
			'default' => 'Web Developer',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Link', 'construction' ),
			'id'      => 'url',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Email', 'construction' ),
			'id'      => 'email',
			'default' => 'support@vamtam.com',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Phone', 'construction' ),
			'id'      => 'phone',
			'default' => '+448786562223',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Picture', 'construction' ),
			'id'      => 'picture',
			'default' => 'http://makalu.vamtam.com/wp-content/uploads/2013/03/people4.png',
			'type'    => 'upload'
		),

		array(
			'name'    => __( 'Biography', 'construction' ) ,
			'id'      => 'html-content',
			'default' => __( 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'construction' ),
			'type'    => 'editor',
			'holder'  => 'textarea',
		) ,

		array(
			'name'    => __( 'Google+', 'construction' ),
			'id'      => 'googleplus',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'LinkedIn', 'construction' ),
			'id'      => 'linkedin',
			'default' => '',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Facebook', 'construction' ),
			'id'      => 'facebook',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Twitter', 'construction' ),
			'id'      => 'twitter',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'YouTube', 'construction' ),
			'id'      => 'youtube',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Pinterest', 'construction' ),
			'id'      => 'pinterest',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'LastFM', 'construction' ),
			'id'      => 'lastfm',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Instagram', 'construction' ),
			'id'      => 'instagram',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Dribble', 'construction' ),
			'id'      => 'dribble',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __( 'Vimeo', 'construction' ),
			'id'      => 'vimeo',
			'default' => '/',
			'type'    => 'text'
		),

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
