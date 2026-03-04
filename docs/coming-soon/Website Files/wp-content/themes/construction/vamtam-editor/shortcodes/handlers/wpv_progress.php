<?php

class WPV_Progress {
	public function __construct() {
		add_shortcode( 'wpv_progress', array(__CLASS__, 'shortcode') );
	}

	public static function shortcode($atts, $content = null, $code = null ) {
		extract(shortcode_atts(array(
			'type'         => 'percentage',
			'value'        => 0,
			'before_value' => '',
			'after_value'  => '',
			'percentage'   => 0,
			'bar_color'    => 'accent1',
			'track_color'  => 'accent7',
			'value_color'  => 'accent2',
			'icon'         => '',
		), $atts));

		$output = '';
		if ( $type === 'percentage' ) {
			$output = '<div class="wpv-progress pie" data-percent="' . esc_attr( $percentage ) . '" data-bar-color="' . esc_attr( wpv_sanitize_accent( $bar_color ) ) . '" data-track-color="' . esc_attr( wpv_sanitize_accent( $track_color ) ) . '" style="color:' . esc_attr( wpv_sanitize_accent( $value_color ) ) . '"><span>0</span>%</div>';
		} elseif ( $type === 'number' ) {
			if ( ! empty( $icon ) ) {
				$icon = wpv_shortcode_icon( array(
					'name' => $icon,
				) );
			}

			$output = '<div class="wpv-progress number" data-number="' . esc_attr( $value ) . '" style="color:' . esc_attr( wpv_sanitize_accent( $value_color ) ) . '">' . $icon . $before_value . '<span>0</span>' . $after_value . '</div>';
		}

		if ( ! empty( $content ) ) {
			$output .= '<div class="wpv-progress-content">' . $content . '</div>';
		}

		return $output;
	}
}

new WPV_Progress;
