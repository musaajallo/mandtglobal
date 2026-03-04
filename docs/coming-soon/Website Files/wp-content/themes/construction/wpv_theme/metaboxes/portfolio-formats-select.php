<?php
/**
 * Vamtam Portfolio Format Selector
 *
 * @package wpv
 * @subpackage construction
 */

return array(

array(
	'name' => __( 'Portfolio Format', 'construction' ),
	'type' => 'separator'
),

array(
	'name' => __( 'Portfolio Data Type', 'construction' ),
	'desc' => __('Image - uses the featured image (default)<br />
				  Gallery - use the featured image as a title image but show additional images too<br />
				  Video/Link - uses the "portfolio data url" setting<br />
				  Document - acts like a normal post<br />
				  HTML - overrides the image with arbitrary HTML when displaying a single portfolio page. Does not work with the ajax portfolio.
				', 'construction'),
	'id' => 'portfolio_type',
	'type' => 'radio',
	'options' => array(
		'image' => __( 'Image', 'construction' ),
		'gallery' => __( 'Gallery', 'construction' ),
		'video' => __( 'Video', 'construction' ),
		'link' => __( 'Link', 'construction' ),
		'document' => __( 'Document', 'construction' ),
		'html' => __( 'HTML', 'construction' ),
	),
	'default' => 'image',
),

);
