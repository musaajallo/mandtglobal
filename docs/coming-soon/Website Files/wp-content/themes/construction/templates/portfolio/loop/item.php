<?php
/**
 * Single portfolio item used in a loop
 *
 * @package wpv
 * @subpackage construction
 */
list($terms_slug, $terms_name) = wpv_get_portfolio_terms();

$item_class = array();

$item_class[] = $show_title === 'below' ? 'has-title' : 'no-title';
$item_class[] = $desc ? 'has-description' : 'no-description';
$item_class[] = $scrollable ? '' : "grid-1-$column";
$item_class[] = 'state-closed';
$item_class[] = 'vamtam-project';

$item_class[] = 'cbp-item';

$starting_width = 100 / $column;

?>
<div data-id="<?php the_id()?>" data-type="<?php echo esc_attr( implode( ' ', $terms_slug ) )?>" class="<?php echo esc_attr( implode( ' ', $item_class ) ); ?>" style="width: <?php echo intval( $starting_width ) ?>%">
	<div class="portfolio-item-wrapper">
		<?php
			$gallery = $href = '';
			extract( wpv_get_portfolio_options() );

			$video_url = ($type === 'video' and !empty($href)) ? $href : '';

			if ( empty( $href ) || 'link' !== $type ) {
				$href = get_permalink();
			}

			if($fancy_page || $scrollable) {
				$gallery = '';
			}

			$suffix = $sortable === 'masonry' ? 'normal' : 'loop';
		?>
		<div class="portfolio-image">
			<div class="thumbnail" style="max-height:<?php echo intval( $size[1] ) ?>px">
			<?php
				if ( ! empty( $gallery ) ) :
					VamtamOverrides::unlimited_image_sizes();
					echo do_shortcode( $gallery ); // xss ok
					VamtamOverrides::limit_image_sizes();
				elseif ( ! empty( $video_url ) && ! has_post_thumbnail() ) :
					global $wp_embed;
					echo $wp_embed->run_shortcode( '[embed]'.$video_url.'[/embed]' ); // xss ok
				elseif( has_post_thumbnail() ) :
					$size = "theme-{$suffix}-{$column}";

			?>
				<a href="<?php echo esc_url( $href ) ?>">
					<?php
						VamtamOverrides::unlimited_image_sizes();
						the_post_thumbnail( apply_filters( 'wpv_portfolio_loop_image_size', $size, $suffix, $column ) );
						VamtamOverrides::limit_image_sizes();
					?>
				</a>
			<?php endif	?>
			</div><!-- / .thumbnail -->
		</div>

		<?php if ( $show_title === 'below' || $desc ) : ?>
			<div class="portfolio_details">
				<a href="<?php echo esc_url( $href ) ?>">
					<?php if ( $show_title === 'below' ) : ?>
						<h3 class="title">
							<?php the_title()?>
						</h3>
					<?php endif ?>
					<?php if ( $desc ) : ?>
						<div class="excerpt"><?php the_excerpt() ?></div>
					<?php endif ?>
				</a>
			</div>
		<?php endif ?>
	</div>
</div>