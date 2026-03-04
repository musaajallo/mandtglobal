<?php
/**
 * Theme options / General / Media
 *
 * @package wpv
 * @subpackage construction
 */

return array(

array(
	'name' => __( 'Media', 'construction' ),
	'type' => 'start',

),

array(
	'name' => __( 'How do I use these options?', 'construction' ),
	'desc' => sprintf( __( 'These options control the size of some of the images used by the theme. <br><br> <strong>Changes are not immediate</strong><br><br> If you have changed any of these options, please use the <a href="%s" title="Regenerate thumbnails" target="_blank">Regenerate thumbnails</a> plugin in order to update your images.', 'construction' ), 'http://wordpress.org/extend/plugins/regenerate-thumbnails/' ),
	'type' => 'info',
	'class' => "important",
),

array(
	'name' => __( 'Portfolio and Blog', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( 'Listing Featured Images Width-to-Height Ratio', 'construction' ),
	'desc' => __( 'You can set it to 0 to disable this and the option below and use the original proportions of the images.', 'construction' ),
	'id' => 'theme-loop-images-wth',
	'type' => 'range',
	'min' => 0,
	'max' => 3,
	'step' => 0.05,
),



array(
	'name' => __( 'Single Page Featured Image Width-to-Height Ratio', 'construction' ),
	'desc' => __( 'You can set it to 0 to disable this and the option below and use the original proportions of the images.', 'construction' ),
	'id' => 'theme-single-images-wth',
	'type' => 'range',
	'min' => 0,
	'max' => 3,
	'step' => 0.05,
),

	array(
		'type' => 'end'
	),
);
