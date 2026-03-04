<?php
/**
 * Vamtam Post Options
 *
 * @package wpv
 * @subpackage construction
 */

return array(

array(
	'name' => __( 'General', 'construction' ),
	'type' => 'separator',
),

array(
	'name'    => __( 'Cite', 'construction' ) ,
	'id'      => 'testimonial-author',
	'default' => '',
	'type'    => 'text',
) ,

array(
	'name'    => __( 'Link', 'construction' ) ,
	'id'      => 'testimonial-link',
	'default' => '',
	'type'    => 'text',
) ,

array(
	'name'    => __( 'Rating', 'construction' ) ,
	'id'      => 'testimonial-rating',
	'default' => 5,
	'type'    => 'range',
	'min'     => 0,
	'max'     => 5,
) ,

array(
	'name'    => __( 'Summary', 'construction' ) ,
	'id'      => 'testimonial-summary',
	'default' => '',
	'type'    => 'text',
) ,

);
