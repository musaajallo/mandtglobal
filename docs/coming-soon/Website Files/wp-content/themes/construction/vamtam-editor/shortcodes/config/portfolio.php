<?php
/**
 * Portfolio shortcode options
 *
 * @package wpv
 * @subpackage editor
 */


return array(
	'name' => __( 'Portfolio', 'construction' ) ,
	'desc' => __( 'Please note that this element shows already created portfolio posts. To create one go to the Portfolios tab in the WordPress main navigation menu on the left - Add New. ' , 'construction' ),
	'icon' => array(
		'char' => WPV_Editor::get_icon( 'grid2' ),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'portfolio',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __( 'Layout', 'construction' ) ,
			'id' => 'layout',
			'desc' => __('Static - no filtering.<br/>
				Filtering - Enable filtering for the portfolio items depending on their category.<br/>
				Srollable - shows the portfolio items in a slider', 'construction') ,
			'default' => '',
			'type' => 'select',
			'options' => array(
				'static' => __( 'Static', 'construction' ),
				'fit-rows' => __( 'Filtering - Static', 'construction' ),
				'masonry' => __( 'Filtering - Masonry', 'construction' ),
				'scrollable' => __( 'Scrollable', 'construction' ),
			),
			'field_filter' => 'fbs',
		) ,
		array(
			'name' => __( 'No Paging', 'construction' ) ,
			'id' => 'nopaging',
			'desc' => __( 'If the option is on, it will disable pagination. You can set the type of pagination in General Settings - Posts - Pagination Type. ', 'construction' ) ,
			'default' => false,
			'type' => 'toggle',
			'class' => 'fbs fbs-static fbs-fit-rows fbs-masonry',
		) ,
		array(
			'name' => __( 'Columns', 'construction' ) ,
			'id' => 'column',
			'default' => 4,
			'type' => 'range',
			'min' => 1,
			'max' => 4,
		) ,
		array(
			'name' => __( 'Limit', 'construction' ) ,
			'desc' => __( 'Number of item to show per page. If you set it to -1, it will display all portfolio items.', 'construction' ) ,
			'id' => 'max',
			'default' => '4',
			'min' => -1,
			'max' => 100,
			'step' => '1',
			'type' => 'range'
		) ,

		array(
			'name'    => __( 'Display Title', 'construction' ) ,
			'id'      => 'show_title',
			'desc'    => __( 'If the option is on, it will display the title of the portfolio post.<br/><br/>', 'construction' ) ,
			'default' => 'false',
			'type'    => 'select',
			'options' => array(
				'false' => __( 'No Title', 'construction' ),
				'below' => __( 'Title on', 'construction' ),
			),
		) ,
		array(
			'name' => __( 'Display Description', 'construction' ) ,
			'id' => 'desc',
			'desc' => __( 'If the option is on, it will display short description of the portfolio item.', 'construction' ) ,
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __( 'Categories (optional)', 'construction' ) ,
			'desc' => __( 'All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories.', 'construction' ) ,
			'id' => 'cat',
			'default' => array() ,
			'target' => 'portfolio_category',
			'type' => 'multiselect',
		) ,
		array(
			'name' => __( 'Portfolio Posts (optional)', 'construction' ) ,
			'desc' => __( 'All portfolio posts will be shown if none are selected. If you select any posts here, this option will override the category option above. You can use ctr + click to select multiple posts.', 'construction' ) ,
			'id' => 'ids',
			'default' => array() ,
			'target' => 'portfolio',
			'type' => 'multiselect',
		) ,

		array(
			'name' => __( 'Title (optional)', 'construction' ) ,
			'desc' => __( 'The title is placed just above the element.<br/><br/>', 'construction' ),
			'id' => 'column_title',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __( 'Title Type (optional)', 'construction' ) ,
			'id' => 'column_title_type',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __( 'Title with divider next to it ', 'construction' ),
				'double' => __( 'Title with divider below', 'construction' ),
				'no-divider' => __( 'No Divider', 'construction' ),
			),
		) ,
	) ,
);
