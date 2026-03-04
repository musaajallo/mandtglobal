<?php

/**
 * Column shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __( 'Column - Color Box', 'construction' ) ,
	'desc' => __('Once inserted into the editor you can change its width using +/- icons on the left.<br/>
	You can insert any element into by draging and dropping it onto the box. <br/>
	You can drag and drop column into column for complex layouts.<br/>
	You can move any element outside of the column by drag and drop.<br/>
	You can set color/image background on any column.
	' , 'construction'),
	'icon' => array(
		'char'    => WPV_Editor::get_icon( 'table1' ),
		'size'    => '26px',
		'lheight' => '39px',
		'family'  => 'vamtam-editor-icomoon',
	),
	'value'    => 'column',
	'controls' => 'size name clone edit delete handle',
	'options'  => array(

		array(
			'name' => __( 'Background Parallax', 'construction' ),
			'desc' => __('The parallax effect will affect only the image background of the column not the elements you place into it.<br/>
				You can insert column into column with transparent background images and thus create multi layers parallax effects. <br/>
				Parallax - Simple, align in the middle  - the column background is positioned - center/center   when it is in the middle of the screen.<br/>
				Parallax - Fixed attachment - the column background is positioned top center when the column is at the top of the screen.<br/>
				The option bellow controls speed and direction of the animation.<br/>
				The parallax effect will be disabled on mobile devices as they do not yet properly support this animations and may cause different issues.
				', 'construction'),
			'id'      => 'parallax_bg',
			'type'    => 'select',
			'default' => 'disabled',
			'options' => array(
				'disabled'  => __( 'Disabled', 'construction' ),
				'to-centre' => __( 'Simple, align at the middle', 'construction' ),
				'fixed'     => __( 'Fixed attachment', 'construction' ),
			),
			'field_filter' => 'fbprlx',
		),

		array(
			'name'    => __( 'Background Parallax Inertia', 'construction' ),
			'desc'    => __( 'The option controls speed and direction of the animation. Minus means against the scroll direction. Plus means with the direction of the scroll. The bigger the number the higher the speed. ', 'construction' ),
			'id'      => 'parallax_bg_inertia',
			'type'    => 'range',
			'min'     => -5,
			'max'     => 5,
			'step'    => 0.05,
			'default' => -.2,
			'class'   => 'fbprlx fbprlx-fixed fbprlx-to-centre',
		),

		array(
			'name'    => __( 'Extend Column', 'construction' ),
			'desc'    => __( 'Extend the column to the end of the screen.', 'construction' ),
			'id'      => 'extend',
			'type'    => 'select',
			'default' => 'disabled',
			'options' => array(
				'disabled'   => __( 'Auto', 'construction' ),
				'background' => __( 'Column Background Only', 'construction' ),
				'content'    => __( 'Column Content', 'construction' ),
			),
			'class'        => 'hide-1-2 hide-1-3 hide-1-4 hide-1-5 hide-1-6 hide-2-3 hide-2-5 hide-3-4 hide-3-5 hide-4-5 hide-5-6',
			'field_filter' => 'fbe',
		),

		array(
			'name' => __( 'Background Color / Image', 'construction' ),
			'desc' => __( 'Please note that the background image left/right positions, as well as the cover option will not work as expected if the option Full Screen Mode is ON.', 'construction' ),
			'id'   => 'background',
			'type' => 'background',
			'only' => 'color,image,repeat,position,size,attachment',
			'sep'  => '_',
		),

		array(
			'name'    => __( 'Hide the Background Image on Lower Resolutions', 'construction' ),
			'id'      => 'hide_bg_lowres',
			'type'    => 'toggle',
			'default' => false,
		),

		array(
			'name'  => __( 'Background Video', 'construction' ),
			'desc'  => __( 'Insert self-hosted video. Please note that if the video is the first element below the menu, It will not work properly in Chrome. You should use Layered Slider instead.', 'construction' ),
			'id'    => 'background_video',
			'type'  => 'upload',
			'video' => true,
			'class' => 'fbprlx fbprlx-disabled',
		),

		array(
			'name'    => __( 'Use Left/Right Padding', 'construction' ) ,
			'id'      => 'extended_padding',
			'default' => false,
			'type'    => 'toggle',
			'class'   => 'hide-inner fbe fbe-background',
		) ,

		array(
			'name'   => __( 'Vertical Padding', 'construction' ),
			'desc'   => __( 'Positive values increase the blank space at the top/bottom of the column. Negative values are interpreted as setting the blank space so that the column is a certain amount of px shorter than the window. 0 means no padding.<br><br> Having both values set to a negative number will center the content vertically. In this case only the <em>top</em> value is used in the calculations.', 'construction' ),
			'id'     => 'vertical_padding',
			'type'   => 'range-row',
			'ranges' => array(
				'vertical_padding_top' => array(
					'desc'    => __( 'Top', 'construction' ),
					'default' => 0,
					'unit'    => 'px',
					'min'     => -500,
					'max'     => 500,
				),
				'vertical_padding_bottom' => array(
					'desc'    => __( 'Bottom', 'construction' ),
					'default' => 0,
					'unit'    => 'px',
					'min'     => -500,
					'max'     => 500,
				),
			),
		),

		array(
			'name'    => __( 'Left/Right Padding', 'construction' ) ,
			'id'      => 'horizontal_padding',
			'default' => 0,
			'min'     => 0,
			'max'     => 500,
			'unit'    => 'px',
			'type'    => 'range',
			'class'   => 'hide-inner fbe fbe-content',
		) ,

		array(
			'name'    => __( '"Read More" Button Link (optional)', 'construction' ) ,
			'desc'    => __( 'If enabled, the column will have a button on the right.<br/><br/>', 'construction' ),
			'id'      => 'more_link',
			'default' => '',
			'type'    => 'text',
			'class'   => 'fbe fbe-false',
		) ,

		array(
			'name'    => __( '"Read More" Button Text (optional)', 'construction' ) ,
			'desc'    => __( 'If enabled, the column will have a button on the right.<br/><br/>', 'construction' ),
			'id'      => 'more_text',
			'default' => '',
			'type'    => 'text',
			'class'   => 'fbe fbe-false',
		) ,

		array(
			'name'    => __( 'Left Border', 'construction' ) ,
			'id'      => 'left_border',
			'default' => 'transparent',
			'type'    => 'color'
		) ,

		array(
			'name'    => __( 'Class (Optional)', 'construction' ) ,
			'desc'    => __( 'If you would like to add a specific class or ID for any element, you can do this by first wrapping the element in a Column, and then adding your chosen class/ID to the respective column options. In the case of the ID, you need to enter an alphanumeric string without any spaces. In the case of the Class option, you need to enter a space-separated list of classes without dots (similar to how you would use HTMLs class  attribute). If you have entered my-column-class as the columns class, you can then use the following CSS selector for this column: .my-column-class', 'construction' ),
			'id'      => 'class',
			'default' => '',
			'type'    => 'text'
		) ,

		array(
			'name'    => __( 'ID (Optional)', 'construction' ) ,
			'desc'    => __('If you would like to add a specific class or ID for any element, you can do this by first wrapping the element in a Column, and then adding your chosen class/ID to the respective column options. In the case of the ID, you need to enter an alphanumeric string without any spaces. In the case of the Class option, you need to enter a space-separated list of classes without dots (similar to how you would use HTMLs class attribute). If you have entered my-column-class as the columns class, you can then use the following CSS selector for this column:
			.my-column-class<br/><br/>', 'construction'),
			'id'      => 'id',
			'default' => '',
			'type'    => 'text'
		) ,

		array(
			'name'    => __( 'Title (optional)', 'construction' ) ,
			'desc'    => __( 'The column title is placed at the top of the column.', 'construction' ),
			'id'      => 'title',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __( 'Title Type (optional)', 'construction' ) ,
			'id'      => 'title_type',
			'default' => 'single',
			'type'    => 'select',
			'options' => array(
				'single'     => __( 'Title with divider next to it', 'construction' ),
				'double'     => __( 'Title with divider below', 'construction' ),
				'no-divider' => __( 'No Divider', 'construction' ),
			),
		) ,
		array(
			'name'    => __( 'Element Animation (optional)', 'construction' ) ,
			'id'      => 'animation',
			'default' => 'none',
			'type'    => 'select',
			'options' => array(
				'none'        => __( 'No animation', 'construction' ),
				'from-left'   => __( 'Appear from left', 'construction' ),
				'from-right'  => __( 'Appear from right', 'construction' ),
				'from-top'    => __( 'Appear from top', 'construction' ),
				'from-bottom' => __( 'Appear from bottom', 'construction' ),
				'fade-in'     => __( 'Fade in', 'construction' ),
				'zoom-in'     => __( 'Zoom in', 'construction' ),
			),
			'class' => 'fbprlx fbprlx-disabled',
		) ,


	) ,
);
