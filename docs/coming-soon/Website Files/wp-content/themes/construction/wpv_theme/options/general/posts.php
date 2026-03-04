<?php

/**
 * Theme options / General / Posts
 *
 * @package wpv
 * @subpackage construction
 */

return array(

array(
	'name' => __( 'Portfolio and Blog', 'construction' ),
	'type' => 'start',
),

array(
	'name' => __( 'Blog and Portfolio Listing Pages and Archives', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( 'Pagination Type', 'construction' ),
	'desc' => __( 'Please note that you will need WP-PageNavi plugin installed if you chose "paged" style.', 'construction' ),
	'id' => 'pagination-type',
	'type' => 'select',
	'options' => array(
		'paged' => __( 'Paged', 'construction' ),
		'load-more' => __( 'Load more button', 'construction' ),
		'infinite-scrolling' => __( 'Infinite scrolling', 'construction' ),
	),
	'class' => 'slim',
),


array(
	'name' => __( 'Blog Posts', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( '"View All Posts" Link', 'construction' ),
	'desc' => __('In a single blog post view in the top you will find navigation with 3 buttons. The middle gets you to the blog listing view.<br>
You can place the link here.', 'construction'),
	'id' => 'post-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),

array(
	'name' => __( 'Show "Related Posts" in Single Post View', 'construction' ),
	'desc' => __( 'Enabling this option will show more posts from the same category when viewing a single post.', 'construction' ),
	'id' => 'show-related-posts',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __( '"Related Posts" title', 'construction' ),
	'id' => 'related-posts-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __( 'Show Post Author', 'construction' ),
	'desc' => __( 'Blog post meta info, works for the single blog post view.', 'construction' ),
	'id' => 'show-post-author',
	'type' => 'toggle',
	'class' => 'slim'
),
array(
	'name' => __( 'Show Categories and Tags', 'construction' ),
	'desc' => __( 'Blog post meta info, works for the single blog post view.', 'construction' ),
	'id' => 'meta_posted_in',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __( 'Show Post Timestamp', 'construction' ),
	'desc' => __( 'Blog post meta info, works for the single blog post view.', 'construction' ),
	'id' => 'meta_posted_on',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __( 'Show Comment Count', 'construction' ),
	'desc' => __( 'Blog post meta info, works for the single blog post view.', 'construction' ),
	'id' => 'meta_comment_count',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __( 'Portfolio Posts', 'construction' ),
	'type' => 'separator',
),

array(
	'name' => __( '"View All Portfolios" Link', 'construction' ),
	'desc' => __('In a single portfolio post view in the top you will find navigation with 3 buttons. The middle gets you to the portfolio listing view.<br>
You can place the link here.', 'construction'),
	'id' => 'portfolio-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),
array(
	'name' => __( 'Show "Related Portfolios" in Single Portfolio View', 'construction' ),
	'desc' => __( 'Enabling this option will show more portfolio posts from the same category in the single portfolio post.', 'construction' ),
	'id' => 'show-related-portfolios',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __( '"Related Portfolios" title', 'construction' ),
	'id' => 'related-portfolios-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __( 'URL Prefix for Single Portfolios', 'construction' ),
	'desc' => __( 'Use an unique string without spaces. It must not be the same as any other URL slugs (used on pages, etc.).', 'construction' ),
	'id' => 'portfolio-slug',
	'type' => 'text',
	'class' => 'slim',
),

	array(
		'type' => 'end'
	),
);