<?php
return array(
	'name'    => __( 'Drop Cap', 'construction' ) ,
	'value'   => 'dropcap',
	'options' => array(
		array(
			'name'    => __( 'Type', 'construction' ) ,
			'id'      => 'type',
			'default' => '1',
			'type'    => 'select',
			'options' => array(
				'1' => __( 'Type 1', 'construction' ),
				'2' => __( 'Type 2', 'construction' ),
			),
		) ,
		array(
			'name'    => __( 'Letter', 'construction' ) ,
			'id'      => 'letter',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __( 'Text', 'construction' ) ,
			'id'      => 'text',
			'default' => '',
			'type'    => 'text',
		) ,
	) ,
);
