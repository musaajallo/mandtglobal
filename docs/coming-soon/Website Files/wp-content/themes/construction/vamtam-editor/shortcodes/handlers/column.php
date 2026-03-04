<?php

/**
 * Column shortcodes handler
 *
 * @package wpv
 * @subpackage editor
 */

/**
 * class WPV_Columns
 */
class WPV_Columns {
	/**
	 * Current row
	 *
	 * @var integer
	 */
	public static $in_row = 0;
	/**
	 * Last row
	 * @var integer
	 */
	public static $last_row = -1;

	/**
	 * Register the shortcodes
	 */
	public function __construct() {
		$GLOBALS['wpv_column_stack'] = array();

		for ( $i = 0; $i < 20; $i++ ) {
			$suffix = ( $i == 0 ) ? '' : '_'.$i;
			add_shortcode( 'column'.$suffix, array( __CLASS__, 'dispatch' ) );
		}

		add_action( 'wp_head', array( __CLASS__, 'limit_wrapper' ) );
	}

	public static function limit_wrapper() {
		global $wpv_has_header_sidebars;

		$GLOBALS['wpv_had_limit_wrapper'] =
			wpv_get_option( 'site-layout-type' ) !== 'full' ||
			! is_singular( WpvFramework::$complex_layout ) ||
			VamtamTemplates::get_layout() !== 'full' ||
			$wpv_has_header_sidebars ||
			! preg_match( '/\[column[^\]]+extend="(?!disabled)/', $GLOBALS['post']->post_content );
	}

	public static function had_limit_wrapper() {
		return apply_filters( 'wpv_had_limit_wrapper', isset( $GLOBALS['wpv_had_limit_wrapper'] ) && $GLOBALS['wpv_had_limit_wrapper'] );
	}

	/**
	 * Column shortcode callback
	 *
	 * @param  array  $atts    shortcode attributes
	 * @param  string $content shortcode content
	 * @param  string $code    shortcode name
	 * @return string          output html
	 */
	public static function dispatch( $atts, $content, $code ) {
		extract( shortcode_atts( array(
			'animation'               => 'none',
			'background_attachment'   => 'scroll',
			'background_color'        => '',
			'background_image'        => '',
			'background_position'     => '',
			'background_repeat'       => '',
			'background_size'         => '',
			'background_video'        => '',
			'hide_bg_lowres'          => '',
			'class'                   => '',
			'extend'                  => 'disabled',
			'extended_padding'        => 'false',
			'last'                    => 'false',
			'more_link'               => '',
			'more_text'               => '',
			'parallax_bg'             => 'disabled',
			'parallax_bg_inertia'     => '1',
			'title'                   => '',
			'title_type'              => 'single',
			'vertical_padding_bottom' => '0',
			'vertical_padding_top'    => '0',
			'horizontal_padding'      => '0',
			'width'                   => '1/1',
			'div_atts'                => '',
			'left_border'             => 'transparent',
			'id'                      => '',
		), $atts ) );

		if ( ! preg_match( '/column_\d+/', $code ) )
			$class .= ' wpv-first-level';

		$GLOBALS['wpv_column_stack'][] = $width;

		if ( ! isset( $GLOBALS['wpv_last_column_title'] ) ) {
			$GLOBALS['wpv_last_column_title'] = '';
		}

		$GLOBALS['wpv_last_column_title'] = empty( $title ) || 'undefined' === $title ? $GLOBALS['wpv_last_column_title'] : $title;

		if ( $parallax_bg !== 'disabled' ) {
			$class                .= ' parallax-bg';
			$div_atts             .= ' data-parallax-method="'.esc_attr( $parallax_bg ).'" data-parallax-inertia="'.esc_attr( $parallax_bg_inertia ).'"';
			$background_position   = 'center top';
			$background_attachment = 'fixed';
		}

		$has_price         = ( strpos( $content, '[price' ) !== false );
		$has_vertical_tabs = preg_match( '/\[tabs.+layout="vertical"/s', $content );

		$width = str_replace( '/', '-', $width );
		$title = ! empty( $title ) && ! $has_vertical_tabs ? apply_filters( 'wpv_column_title', $title, $title_type ) : '';

		$last  = wpv_sanitize_bool( $last );
		$first = false;

		$id = empty( $id ) ? 'wpv-column-' . md5( uniqid() ) : $id;

		if ( $width === '1-1' ) {
			$first = true;
			$last  = true;
		}

		if ( $width !== '1-1' || ( VamtamTemplates::get_layout() !== 'full' && VamtamTemplates::in_page_wrapper() ) ) {
			$extend = 'disabled';
		}

		$result = $result_before = $result_after = $content_before = $content_after = '';

		if ( self::$in_row > self::$last_row ) {
			$rowclass = ( $has_price ) ? 'has-price' : '';

			$class  .= ' first';

			$result_before = '<div class="row '.$rowclass.'">';
			self::$last_row = self::$in_row;

			$first = true;
		}

		if ( ! empty( $background_image ) ) {
			$background_image = "
				background: url( '$background_image' ) $background_repeat $background_position;
				background-size: $background_size;
			";

			if ( ! empty( $background_attachment ) ) {
				$background_image .= "background-attachment: $background_attachment;";
			}

			if ( wpv_sanitize_bool( $hide_bg_lowres ) ) {
				$class .= ' hide-bg-lowres';
			}
		}

		$inner_style = '';

		$l = new WpvLessc();
		$l->importDir = '.';
		$l->setFormatter( 'compressed' );

		if ( ! empty( $background_color ) && $background_color !== 'transparent' ) {
			$color = wpv_sanitize_accent( $background_color );

			$inner_style .= $l->compile(
	   VamtamTemplates::readable_color_mixin() .
	   "
				.safe-bg( @bgcolor ) when ( iscolor( @bgcolor ) ) {
					background-color: @bgcolor;
				}
				.safe-bg( @bgcolor ) {}

				#{$id} {
					p,
					em,
					h1, h2, h3, h4, h5, h6,
					.column-title,
					.sep-text h2.regular-title-wrapper,
					.text-divider-double,
					.sep-text .sep-text-line,
					.sep,
					.sep-2,
					.sep-3,
					td,
					th,
					caption {
						.readable-color( $color );
					}

					&:before {
						.safe-bg( $left_border );
					}
				}
			"
			);

			$background_color = 'background-color:' . wpv_sanitize_accent( $background_color ) . ';';
		} else {
			$background_color = '';
		}

		if ( ! empty( $left_border ) && $left_border !== 'transparent' ) {
			$inner_style .= $l->compile(
	   "
				.safe-bg( @bgcolor ) when ( iscolor( @bgcolor ) ) {
					background-color: @bgcolor;
				}
				.safe-bg( @bgcolor ) {}

				#{$id} {
					&:before {
						.safe-bg( $left_border );
					}
				}
			"
			);
		}

		if ( ! empty( $inner_style ) ) {
			$content_before .= '<style>'.$inner_style.'</style>';
		}

		if ( ! empty( $more_link ) && ! empty( $more_text ) && $extend === 'disabled' ) {
			$class .= ' has-more-button';
			$more_link = esc_attr( $more_link );
			$content_after .= "<a href='$more_link' title='".esc_attr( $more_text )."' class='column-read-more-btn'>$more_text</a>";
		}

		if ( ! empty( $background_video ) && ! WpvMobileDetect::get_instance()->isMobile() ) {
			$type = wp_check_filetype( $background_video, wp_get_mime_types() );

			$content_before .= '<div class="wpv-video-bg">
				<video autoplay muted loop preload="metadata" width="100%" class="wpv-background-video" style="width:100%">
					<source type="'.$type['type'].'" src="'.$background_video.'"></source>
				</video>
			</div><div class="wpv-video-bg-content">';

			$content_after .= '</div>';

			$class .= ' has-video-bg';

			wp_enqueue_style( 'wp-mediaelement' );
			wp_enqueue_script( 'wp-mediaelement' );
		}

		if ( ! empty( $background_image ) || ( ! empty( $background_color ) && $background_color !== 'transparent' ) )
			$class .= ' has-background';

		if ( ( int )$vertical_padding_top < 0 ) {
			$div_atts .= ' data-padding-top="'.( int )$vertical_padding_top.'"';
		}

		if ( ( int )$vertical_padding_bottom < 0 ) {
			$div_atts .= ' data-padding-bottom="'.( int )$vertical_padding_bottom.'"';
		}

		$style = $background_image . $background_color . 'padding-top:' . max( $vertical_padding_top, 0.05 ) . 'px;padding-bottom:' . max( $vertical_padding_bottom, 0.05 ) . 'px;';

		if ( $extend === 'content' ) {
			if ( ( int ) $horizontal_padding > 0 ) {
				$class .= ' has-horizontal-padding';
			}

			$horizontal_padding = ( max( 0, (int) $horizontal_padding ) + 15 ) . 'px';

			$style .= "padding-left:$horizontal_padding;padding-right:$horizontal_padding;";
			$class .= $extend === 'content' ? ' extended-content' : '';

		}

		$style = 'style="' . esc_attr( $style ) . '"';

		$class .= $extend === 'background' ? ' extended' : ' unextended';

		if ( $left_border != 'transparent' )
			$class .= ' left-border';

		if ( $animation !== 'none' && $parallax_bg == 'disabled' )
			$class .= ' animation-'.$animation.' animated-active';

		$class .= ( $extended_padding === 'false' ) ? ' no-extended-padding' : ' has-extended-padding';

		if ( $extend !== 'disabled' ) {
			$content_before = '<div class="extended-column-inner">'.$content_before;
			$content_after .= '</div>';
		}

		if ( ! self::had_limit_wrapper() ) {
			if ( $width === '1-1' && $extend === 'background' ) {
				if ( $extend === 'disabled' && count( $GLOBALS['wpv_column_stack'] ) === 1 ) {
					$class .= ' limit-wrapper';
				} elseif ( $extend === 'background' ) {
					$content_before = '<div class="limit-wrapper">' . $content_before;
					$content_after .= '</div>';
				}
			} elseif (
				count( $GLOBALS['wpv_column_stack'] ) === 1 &&
				(
					( $width === '1-1' && $extend === 'disabled' ) ||
					$width !== '1-1'
				)
			) {
				if ( $first ) {
					$result_before = '<div class="limit-wrapper">' . $result_before;
				}

				if ( $last ) {
					$result_after .= '</div>'; // check if $result_before and $result_after are balanced if changed elsewhere in this file
				}
			}
		}

		$result .= '<div class="wpv-grid grid-'.$width.' '.$class.'" '.$style.' id="'.$id.'" '.$div_atts.'>' . $content_before . $title . self::content( $content ) . $content_after . '</div>';

		if ( $last ) {
			self::$last_row--;

			$result_after .= '</div>';
		}

		array_pop( $GLOBALS['wpv_column_stack'] );

		return $result_before.$result.$result_after;
	}

	/**
	 * Parse column content
	 *
	 * @param  string $content unparsed content
	 * @return string          parsed content
	 */
	public static function content( $content ) {
		self::$in_row++;
		$content = do_shortcode( trim( $content ) );
		self::$in_row--;

		return $content;
	}
};

new WPV_Columns;

