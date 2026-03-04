<div class="first-row header-content-wrapper header-padding">
	<?php get_template_part( 'templates/header/top/logo' ) ?>
</div>

<div class="second-row header-content-wrapper">
	<div class="limit-wrapper header-padding">
		<div class="second-row-columns">
			<?php if ( wpv_get_option( 'header-text-main' ) !== '' || wpv_get_optionb( 'enable-header-search' ) ): ?>
				<div class="header-left">
					<?php if ( wpv_get_option( 'header-text-main' ) !== '' ): ?>
						<div id="header-text"><div><?php echo do_shortcode( wpv_get_option( 'header-text-main' ) ) // xss ok ?></div></div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<div class="header-center">
				<div id="menus">
					<?php get_template_part( 'templates/header/top/main-menu' ) ?>
				</div>
			</div>

			<?php do_action( 'wpv_header_cart' ) ?>

			<?php if ( wpv_get_option( 'header-text-main' ) !== '' || wpv_get_optionb( 'enable-header-search' ) ): ?>
				<div class="header-right">
					<?php get_template_part( 'templates/header/top/search-button' ) ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>
