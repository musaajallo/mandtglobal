<?php

/**
 * Blockquote shortcode handler
 *
 * @package wpv
 * @subpackage editor
 */

/**
 * class WPV_Blockquote
 */
class WPV_Blockquote {
	/**
	 * Register the shortcodes
	 */
	public function __construct() {
		add_shortcode( 'blockquote', array( __CLASS__, 'dispatch' ) );
	}

	/**
	 * Blockquote shortcode callback
	 *
	 * @param  array  $atts    shortcode attributes
	 * @param  string $content shortcode content
	 * @param  string $code    shortcode name
	 * @return string          output html
	 */
	public static function dispatch( $atts, $content, $code ) {
		$raw_atts = $atts;
		$atts =shortcode_atts( array(
			'layout'     => 'slider',
			'cat'        => '',
			'ids'        => '',
			'autorotate' => false,
		), $atts );

		$query = array(
			'post_type'      => 'testimonials',
			'orderby'        => 'menu_order',
			'order'          => 'DESC',
			'posts_per_page' => -1,
		);

		if ( !empty( $atts['cat'] ) ) {
			$query['tax_query'] = array(
				array(
					'taxonomy' => 'testimonials_category',
					'field'    => 'slug',
					'terms'    => explode( ',', $atts['cat'] ),
				)
			);
		}

		if ( $atts['ids'] && $atts['ids'] !== 'null' ) {
			$query['post__in'] = explode( ',', $atts['ids'] );
		}

		$q = new WP_Query( $query );

		$output = '';

		if ( $atts['layout'] === 'slider' ) {
			wp_enqueue_script( 'cubeportfolio' );
			wp_enqueue_style( 'cubeportfolio' );

			$slider_options = array(
				'layoutMode' => 'slider',
				'drag' => true,
				'auto' => wpv_sanitize_bool( $atts['autorotate'] ),
				'autoTimeout' => 5000,
				'autoPauseOnHover' => true,
				'showNavigation' => false,
				'showPagination' => true,
				'rewindNav' => true,
				'scrollByPage' => false,
				'gridAdjustment' => 'responsive',
				'mediaQueries' => array( array(
						'width' => 1,
						'cols' => 1,
					),
				),
				'gapHorizontal' => 0,
				'gapVertical' => 0,
				'caption' => '',
				'displayType' => 'default',
			);

			$output .= '<div class="vamtam-cubeportfolio cbp cbp-slider-edge vamtam-testimonials-slider" data-options="' . esc_attr( json_encode( $slider_options ) ) . '">';

			while ( $q->have_posts() ) {
				$q->the_post();

				$output .= '<div class="cbp-item">';
				$output .= self::format();
				$output .= '</div>';
			}

			$output .= '</div>';
		} else {
			$output .= '<div class="blockquote-list">';

			while ( $q->have_posts() ) {
				$q->the_post();

				$output .= self::format();
			}

			$output .= '</div>';
		}

		wp_reset_postdata();

		return $output;
	}

	private static function format() {
		ob_start();
		get_template_part( 'templates/shortcodes/blockquote' );
		return ob_get_clean();
	}
};

new WPV_Blockquote;
