<div class="contact_info_wrap">
	<?php if ( ! empty( $name ) ):?>
		<p><?php echo do_shortcode( '[vamtam_icon name="user" color="'.$color.'"]' . $name ) // xss ok ?></p>
	<?php endif ?>

	<?php if ( ! empty( $phone ) ) : ?>
		<p><a href="tel:<?php echo esc_attr( $phone ) ?>" title="<?php echo esc_attr( sprintf( 'Call %s', strip_tags( $name ) ) ) ?>"><?php echo do_shortcode('[vamtam_icon name="theme-phone" color="' . $color . '"]' . $phone ) // xss ok ?></a></p>
	<?php endif ?>

	<?php if ( ! empty( $cellphone ) ) : ?>
		<p><a href="tel:<?php echo esc_attr( $cellphone ) ?>" title="<?php echo esc_attr( sprintf( 'Call %s', strip_tags( $name ) ) ) ?>"><?php echo do_shortcode('[vamtam_icon name="theme-cellphone" color="' . $color . '"]' . $cellphone ) // xss ok ?></a></p>
	<?php endif ?>

	<?php if ( ! empty( $email ) ):?>
		<p><a href="mailto:<?php echo esc_attr( $email ) ?>" ><?php echo do_shortcode( '[vamtam_icon name="theme-mail" color="'.$color.'"]'.$email ) // xss ok ?></a></p>
	<?php endif ?>

	<?php if ( ! empty( $address ) ):?>
		<p><span class="contact_address"><?php echo do_shortcode( '[vamtam_icon name="theme-map" color="'.$color.'"]'.$address ) // xss ok ?></span></p>
	<?php endif ?>

</div>
