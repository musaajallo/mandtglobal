<?php

/**
 * Theme options / General / General Settings
 *
 * @package wpv
 * @subpackage construction
 */

return array(
array(
	'name' => __( 'General Settings', 'construction' ),
	'type' => 'start'
),

array(
	'name' => __( 'Header Logo Type', 'construction' ),
	'id'   => 'header-logo-type',
	'type' => 'select',
	'options' => array(
		'image'      => __( 'Image', 'construction' ),
		'site-title' => __( 'Site Title', 'construction' ),
	),
	'static'       => true,
	'field_filter' => 'fblogo',
),

array(
	'name'   => __( 'Custom Logo Picture', 'construction' ),
	'desc'   => __( 'Please Put a logo which exactly twice the width and height of the space that you want the logo to occupy. The real image size is used for retina displays.', 'construction' ),
	'id'     => 'custom-header-logo',
	'type'   => 'upload',
	'static' => true,
	'class'  => 'fblogo fblogo-image',
),

array(
	'name'   => __('Alternative Logo', 'construction'),
	'desc'   => __('This logo is used when you are using the transparent sticky header. It must be the same size as the main logo.', 'construction'),
	'id'     => 'custom-header-logo-transparent',
	'type'   => 'upload',
	'static' => true,
	'class'  => 'fblogo fblogo-image',
),

array(
	'name'   => __( 'Splash Screen Logo', 'construction' ),
	'id'     => 'splash-screen-logo',
	'type'   => 'upload',
	'static' => true,
),

array(
	'name'   => __( 'Google Maps API Key', 'construction' ),
	'desc'   => __( "Only required if you have more than 2500 map loads per day. Paste your Google Maps API Key here. If you don't have one, please sign up for a <a href='https://developers.google.com/maps/documentation/javascript/tutorial#api_key'>Google Maps API key</a>.", 'construction' ),
	'id'     => 'gmap_api_key',
	'type'   => 'text',
	'static' => true,
),

array(
	'name' => __( '"Scroll to Top" Button', 'construction' ),
	'desc' => __( 'It is found in the bottom right side. It is sole purpose is help the user scroll a long page quickly to the top.', 'construction' ),
	'id'   => 'show_scroll_to_top',
	'type' => 'toggle',
),

array(
	'name'    => __( 'Feedback Button', 'construction' ),
	'desc'    => __( 'It is found on the right hand side of your website. You can chose from a "link" or a slide out form(widget area).The slide out form is configured as a standard widget. You can use the same form you are using for your "contact us" page.', 'construction' ),
	'id'      => 'feedback-type',
	'type'    => 'select',
	'options' => array(
		'none'    => __( 'None', 'construction' ),
		'link'    => __( 'Link', 'construction' ),
		'sidebar' => __( 'Slide out widget area', 'construction' ),
	),
),

array(
	'name' => __( 'Feedback Button Link', 'construction' ),
	'desc' => __( 'If you have chosen a "link" in the option above, place the link of the button here, usually to your contact us page.', 'construction' ),
	'id'   => 'feedback-link',
	'type' => 'text',
),

array(
	'name'   => __( 'Share Icons', 'construction' ),
	'desc'   => __( 'Select the social media you want enabled and for which parts of the website', 'construction' ),
	'type'   => 'social',
	'static' => true,
),

array(
	'name'   => __( 'Custom JavaScript', 'construction' ),
	'desc'   => __( 'If the hundreds of options in the Theme Options Panel are not enough and you need customisation that is outside of the scope of the Theme Option Panel please place your javascript in this field. The contents of this field are placed near the <strong>&lt;/body&gt;</strong> tag, which improves the load times of the page.', 'construction' ),
	'id'     => 'custom_js',
	'type'   => 'textarea',
	'rows'   => 15,
	'static' => true,
),

array(
	'name'   => __( 'Custom CSS', 'construction' ),
	'desc'   => __( 'If the hundreds of options in the Theme Options Panel are not enough and you need customisation that is outside of the scope of the Theme Options Panel please place your CSS in this field.', 'construction' ),
	'id'     => 'custom_css',
	'type'   => 'textarea',
	'rows'   => 15,
	'class'  => 'top-desc',
	'static' => true,
),

array(
	'type' => 'end'
)
);