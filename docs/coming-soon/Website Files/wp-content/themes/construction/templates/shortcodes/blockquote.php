<?php

$content = get_the_content();
$cite    = get_post_meta( get_the_ID(), 'testimonial-author', true );
$link    = get_post_meta( get_the_ID(), 'testimonial-link', true );
$rating  = ( int )get_post_meta( get_the_ID(), 'testimonial-rating', true );
$summary = get_post_meta( get_the_ID(), 'testimonial-summary', true );
$title   = get_the_title();

if ( ! empty( $link ) && ! empty( $cite ) ) {
	$cite = '<a href="'.$link.'" target="_blank">'.$cite.'</a>';
}

if ( ! empty( $title ) ) {
	$rating_str = str_repeat( wpv_shortcode_icon( array( 'name' => 'star2', 'color' => '#F8DF04' ) ), $rating );

	if ( ! empty( $rating_str ) ) {
		$rating_str .= ' &mdash; ';
	}

	if ( ! empty( $cite ) ) {
		$cite = " <span class='company-name'>( $cite )</span>";
	}

	$title = "<div class='quote-title'>$rating_str<span class='the-title'>$title</span>$cite</div>";
} elseif ( ! empty( $cite ) ) {
	$title = "<div class='quote-title'>$cite</div>";
}

if ( ! empty( $summary ) ) {
	$summary = '<h3 class="quote-summary">' . $summary . '</h3>';
}

$thumbnail = '';
if ( has_post_thumbnail() ) {
	$thumbnail  = '<div class="quote-thumbnail">';
	$thumbnail .= get_the_post_thumbnail( get_the_ID(), 'thumbnail' );
	$thumbnail .= '</div>';
}

$before_content = $summary . '<div class="quote-title-wrapper clearfix">' . $title . $thumbnail . '</div>';

$content = '<div class="quote-content">'.$content.'</div>';

?>

<blockquote class='clearfix small simple <?php post_class() ?>'>
	<?php echo $before_content // xss ok ?>
	<div class='quote-text'><?php echo do_shortcode( $content ) ?></div>
</blockquote>