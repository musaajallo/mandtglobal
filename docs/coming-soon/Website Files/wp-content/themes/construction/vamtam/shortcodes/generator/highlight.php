<?php

return array(
	"name" => __( "Highlight", 'construction' ) ,
	"value" => "highlight",
	"options" => array(
		array(
			"name" => __( "Type", 'construction' ) ,
			"id" => "type",
			"default" => '',
			"options" => array(
				"light" => __( "light", 'construction' ) ,
				"dark" => __( "dark", 'construction' ) ,
			) ,
			"type" => "select",
		) ,
		array(
			"name" => __( "Content", 'construction' ) ,
			"id" => "content",
			"default" => "",
			"type" => "textarea"
		) ,
	)
);