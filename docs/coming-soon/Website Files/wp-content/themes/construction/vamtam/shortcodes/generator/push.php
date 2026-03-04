<?php
return array(
	'name'    => __( 'Vertical Blank Space', 'construction' ) ,
	'value'   => 'push',
	'options' => array(
		array(
			'name'    => __( 'Height', 'construction' ) ,
			'id'      => 'h',
			'default' => 30,
			'min'     => -200,
			'max'     => 200,
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
