<?php
/**
 * Theme options / Styles / Global Colors and Backgrounds
 *
 * @package wpv
 * @subpackage construction
 */

return array(
array(
	'name' => __( 'Global Colors and Backgrounds', 'construction' ),
	'type' => 'start',
),

array(
	'name' => __( 'Global Backgrounds', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( 'Page Background', 'construction' ),
	'desc' => __("Please note that this option is used only in boxed layout mode.<br>
In full width layout mode the page background is covered by the header, slider, body and footer backgrounds respectively. If the color opacity of these areas is 1 or an opaque image is used, the page background won't be visible.<br>
If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution.<br>
You can override this option on a page by page basis.", 'construction'),
	'id' => 'body-background',
	'type' => 'background',
	'only' => 'color,image,repeat,size,attachment',
	'class' => 'no-border',
),

array(
	'desc'        => __( "You can also use some of the preset background patterns we've crafted for you", 'construction' ),
	'type'        => 'autofill',
	'class'       => 'no-desc',
	'option_sets' => array(
		array(
			'name'   => __( 'Pattern 01', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/01.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/demo/01.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 02', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/02.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/02.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 03', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/03.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/03.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 04', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/04.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/04.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 05', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/05.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/05.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 06', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/06.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/06.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 07', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/07.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/07.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 08', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/08.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/08.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 09', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/09.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/09.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 10', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/10.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/10.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 11', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/11.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/11.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 12', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/12.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/12.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 13', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/13.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/13.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 14', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/14.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/14.png',
				'body-background-repeat' => 'repeat',
			),
		),
		array(
			'name'   => __( 'Pattern 15', 'construction' ),
			'image'  => WPV_THEME_IMAGES . 'patterns/demo/15.png',
			'values' => array(
				'body-background-image'  => WPV_THEME_IMAGES . 'patterns/15.png',
				'body-background-repeat' => 'repeat',
			),
		),
	),
),

array(
	'name' => __( 'Global Colors', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( 'Accent Colors', 'construction' ),
	'desc' => __( 'Most of the design elements are attached to the accent colors below. You can easily create your own skin by changing these colors.', 'construction' ),
	'type' => 'color-row',
	'inputs' => array(
		'accent-color-1' => array(
			'name' => __( 'Accent 1', 'construction' ),
		),
		'accent-color-2' => array(
			'name' => __( 'Accent 2', 'construction' ),
		),
		'accent-color-3' => array(
			'name' => __( 'Accent 3', 'construction' ),
		),
		'accent-color-4' => array(
			'name' => __( 'Accent 4', 'construction' ),
		),
		'accent-color-5' => array(
			'name' => __( 'Accent 5', 'construction' ),
		),
		'accent-color-6' => array(
			'name' => __( 'Accent 6', 'construction' ),
		),
		'accent-color-7' => array(
			'name' => __( 'Accent 7', 'construction' ),
		),
		'accent-color-8' => array(
			'name' => __( 'Accent 8', 'construction' ),
		),
	),
),

	array(
		'type' => 'end'
	),

);