<?php

return array(
	'name'    => __( 'Icon', 'construction' ) ,
	'value'   => 'icon',
	'options' => array(
		array(
			'name'    => __( 'Name', 'construction' ) ,
			'id'      => 'name',
			'default' => '',
			'type'    => 'icons',
		) ,
		array(
			'name'    => __( 'Color (optional)', 'construction' ) ,
			'id'      => 'color',
			'default' => '',
			'prompt'  => '',
			'type'    => 'select',
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
		) ,
		array(
			'name'    => __( 'Size', 'construction' ),
			'id'      => 'size',
			'type'    => 'range',
			'default' => 16,
			'min'     => 8,
			'max'     => 100,
		),
		array(
			'name'    => __( 'Style', 'construction' ) ,
			'id'      => 'style',
			'default' => '',
			'prompt'  => __( 'Default', 'construction' ),
			'type' => 'select',
			'options' => array(
				'inverted-colors' => __( 'Invert colors', 'construction' ),
			) ,
		) ,
	)
);