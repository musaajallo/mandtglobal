<?php
/**
 * Vamtam Post Options
 *
 * @package wpv
 * @subpackage construction
 */

return array(

array(
	'name' => __( 'Layout and Styles', 'construction' ),
	'type' => 'separator'
),

array(
	'name'    => __( 'Page Slider', 'construction' ),
	'desc'    => __( 'In the drop down you will see the sliders that you have created. Please note that the theme uses Revolution Slider and its option panel is found in the WordPress navigation menu on the left.', 'construction' ),
	'id'      => 'slider-category',
	'type'    => 'select',
	'default' => '',
	'prompt'  => __( 'Disabled', 'construction' ),
	'options' => VamtamTemplates::get_all_sliders(),
	'class'   => 'fbport fbport-disabled',
),

array(
	'name'    => __( 'Show Splash Screen', 'construction' ),
	'desc'    => __( 'This option is usuful if you have video background, featured slider, galleries or other pages that will load considarable amount of time.', 'construction' ),
	'id'      => 'show-splash-screen',
	'type'    => 'toggle',
	'default' => false,
),

array(
	'name'    => __( 'Header Featured Area', 'construction' ),
	'desc'    => __( 'The contents of this option are placed below the header slider, even if the slider is disabled. You can place plain text or HTML into it.', 'construction' ),
	'id'      => 'page-middle-header-content',
	'type'    => 'textarea',
	'default' => '',
	'class'   => 'fbport fbport-disabled',
),

array(
	'name'    => __( 'Full Width Header Featured Area', 'construction' ),
	'desc'    => __( 'Extend the featured area to the end of the screen. This is basicly a full screen mode.', 'construction' ),
	'id'      => 'page-middle-header-content-fullwidth',
	'type'    => 'toggle',
	'default' => 'false',
),

array(
	'name'    => __( 'Header Featured Area Minimum Height', 'construction' ),
	'desc'    => __( 'Please note that this option does not affect the slider height. The slider height is controled from the LayerSlider option panel.', 'construction' ),
	'id'      => 'page-middle-header-min-height',
	'type'    => 'range',
	'default' => 0,
	'min'     => 0,
	'max'     => 1000,
	'unit'    => 'px',
	'class'   => 'fbport fbport-disabled',
),

array(
	'name'  => __( 'Featured Area / Slider Background', 'construction' ),
	'desc'  => __( 'This option is used for the featured area, header slider and the Ajax portfolio slider.<br>If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution.', 'construction' ),
	'id'    => 'local-title-background',
	'type'  => 'background',
	'show'  => 'color,image,repeat,size',
	'class' => 'fbport fbport-disabled fbport-page',
),

array(
	'name'    => __( 'Sticky Header Behaviour', 'construction' ),
	'id'      => 'sticky-header-type',
	'type'    => 'select',
	'default' => 'normal',
	'desc'    => __( 'Please make sure you have the sticky header enabled in theme options - layout - header.', 'construction' ),
	'options' => array(
		'normal'    => __( 'Normal', 'construction' ),
		'over'      => __( 'Over the page content', 'construction' ),
		'half-over' => __( 'Bottom half over the page content', 'construction' ),
	),
	'class' => 'fbport fbport-disabled',
),


array(
	'name'    => __( 'Show Page Title Area', 'construction' ),
	'desc'    => __( 'Enables the area used by the page title.', 'construction' ),
	'id'      => 'show-page-header',
	'type'    => 'toggle',
	'default' => true,
	'class'   => 'fbport fbport-disabled',
),

array(
	'name'  => __( 'Page Title Background', 'construction' ),
	'id'    => 'local-page-title-background',
	'type'  => 'background',
	'show'  => 'color,image,repeat,size,attachment',
	'class' => 'fbport fbport-disabled',
),

array(
	'name'    => __( 'Description', 'construction' ),
	'desc'    => __( 'The text will appear next or bellow the title of the page, only if the option above is enabled.', 'construction' ),
	'id'      => '_vamtam_description',
	'type'    => 'textarea',
	'default' => '',
),

array(
	'name'        => __( 'Show Body Top Widget Areas', 'construction' ),
	'desc'        => __( 'The layout of these areas can be configured from "Vamtam" -> "Layout" -> "Body". In Appearance => Widgets you populate them with widgets.', 'construction' ),
	'image'       => WPV_ADMIN_ASSETS_URI.'images/header-sidebars-3.png',
	'id'          => 'show_header_sidebars',
	'type'        => 'toggle',
	'default'     => wpv_get_option( 'has-header-sidebars' ),
	'has_default' => true,
	'class'       => 'fbport fbport-disabled',
	'only'        => 'page,post,portfolio,product',
),

array(
	'name'        => __( 'Page Layout Type', 'construction' ),
	'desc'        => __( 'The sidebars are placed just below the page title. You can choose one of the predefined layouts.', 'construction' ),
	'id'          => 'layout-type',
	'type'        => 'body-layout',
	'only'        => 'page,post,portfolio,product,events',
	'default'     => 'default',
	'has_default' => true,
	'class'       => 'fbport fbport-disabled',
),
array(
	'name'    => __( 'Custom Sidebars', 'construction' ),
	'desc'    => __( 'This option correlates with the one above. If you have custom sidebars created, you will enable them by selecting them in the drop-down menu. Otherwise the page default sidebars will be used.', 'construction' ),
	'type'    => 'select-row',
	'selects' => array(
		'left_sidebar_type' => array(
			'desc'    => __( 'Left:', 'construction' ),
			'prompt'  => __( 'Default', 'construction' ),
			'target'  => 'sidebars',
			'default' => false,
		),
		'right_sidebar_type' => array(
			'desc'    => __( 'Right:', 'construction' ),
			'prompt'  => __( 'Default', 'construction' ),
			'target'  => 'sidebars',
			'default' => false,
		),
	),
	'class' => 'fbport fbport-disabled',
),

array(
	'name' => __( 'Page Background', 'construction' ),
	'desc' => __('Please note that this option is used only in boxed layout mode.<br>
In full width layout mode the page background is covered by the header, slider, body and footer backgrounds respectively. If the color opacity of these areas is 1 or an opaque image is used, the page background won\'t be visible.<br>
If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution.<br>
You can override this option on a page by page basis.', 'construction'),
	'id'   => 'background',
	'type' => 'background',
	'show' => 'color,image,repeat,size,attachment',
),

array(
	'name' => __( 'Body Background', 'construction' ),
	'desc' => __( 'If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution. If the color opacity  is less than 1 the page background underneath will be visible.', 'construction' ),
	'id'   => 'local-main-background',
	'type' => 'background',
	'show' => 'color,image,repeat,size,attachment',
),

array(
	'name'    => __( 'Page Vertical Padding', 'construction' ),
	'id'      => 'page-vertical-padding',
	'type'    => 'select',
	'default' => 'both',
	'class'   => 'fbport fbport-disabled',
	'options' => array(
		'both'        => __( 'Both top and bottom padding', 'construction' ),
		'top-only'    => __( 'Only top padding', 'construction' ),
		'bottom-only' => __( 'Only bottom padding', 'construction' ),
		'none'        => __( 'No vertical padding', 'construction' ),
	),
),

);
