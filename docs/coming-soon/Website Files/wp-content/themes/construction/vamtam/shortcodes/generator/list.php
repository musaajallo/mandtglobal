<?php

return array(
	"name" => __( "Styled List", 'construction' ) ,
	"value" => "list",
	"options" => array(
		array(
			'name' => __( 'Style', 'construction' ) ,
			'id' => 'style',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __( "Color", 'construction' ) ,
			"id" => "color",
			"default" => "",
			"options" => array(
				'accent1' => __( 'Accent 1', 'construction' ),
				'accent2' => __( 'Accent 2', 'construction' ),
				'accent3' => __( 'Accent 3', 'construction' ),
				'accent4' => __( 'Accent 4', 'construction' ),
				'accent5' => __( 'Accent 5', 'construction' ),
				'accent6' => __( 'Accent 6', 'construction' ),
				'accent7' => __( 'Accent 7', 'construction' ),
				'accent8' => __( 'Accent 8', 'construction' ),
			) ,
			"type" => "select",
		) ,
		array(
			"name" => __( "Content", 'construction' ) ,
			"desc" => __( "Please insert a valid HTML unordered list", 'construction' ) ,
			"id" => "content",
			"default" => "<ul>
				<li>list item</li>
				<li>another item</li>
			</ul>",
			"type" => "textarea"
		) ,
	)
);