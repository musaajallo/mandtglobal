<?php

function wpv_shortcode_highlight($atts, $content = null, $code = null ) {
	extract(shortcode_atts(array(
	 'type' => false
	), $atts));

	return "<span class='highlight $type'><span class='highlight-content'>".do_shortcode( $content ).'</span></span>';
}
add_shortcode( 'highlight', 'wpv_shortcode_highlight' );