<?php
require_once ONECOM_WP_PATH . '/modules/home/oc-home-sections.php';
$home_sections = new OneHomeSections();
$cards         = $home_sections->get_cards();
$help_cards    = $home_sections->get_help_cards();
$articles      = ismWP() ? $home_sections->get_articles_mwp() : $home_sections->get_articles_basic();
$cp_url        = $home_sections->get_cp_url();
$wp_heading    = ismWP() ? __( 'Managed WordPress', 'onecom-wp' ) : __( 'Basic WordPress', 'onecom-wp' );
$tour_silenced = get_site_option( 'oc_home_silence_tour', false );
?>
<div class="wrap2 gv-activated">
	<div class="inner-wrapper gv-p-fluid">
	<!-- Header For managed and button -->
	<div class="gv-grid gv-desk-grid-cols-3 gv-tab-grid-cols-5 gv-grid-cols-3">
		<div class="oc-header-text gv-justify-between gv-desk-span-1 gv-tab-span-2 gv-span-3">
			<h1 class="gv-heading-lg">one.com</h1>
			<p class="gv-heading-sm oc-wp-type"><?php echo $wp_heading; ?></p>
		</div>
		<div class="oc-header-action gv-button-group gv-desk-span-2 gv-tab-span-3 gv-span-3 gv-mt-sm oc-ol gv-max-mob-pb-lg">
			<a href="<?php echo $home_sections->get_cp_url(); ?>" class="gv-button gv-button-secondary" target="_blank">
				<gv-icon src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/arrow_back.svg"></gv-icon>
				<span><?php echo __( 'Back to control panel', 'onecom-wp' ); ?></span>
			</a>
			<a href="<?php echo get_site_url(); ?>"
				class="gv-button gv-button-primary gv-max-mob-order-first" target="_blank"><?php echo __( 'View site', 'onecom-wp' ); ?></a>
		</div>
		<p class="gv-text-sm gv-mt-md oc-header-desc gv-span-3 gv-tab-span-5"><?php echo __( 'Enhance your WordPress experience with the one.com plugin and one.com dashboard. Get automated updates, boosted security, recommended plugins, and optimised performance.', 'onecom-wp' ); ?></p>
	</div>
	<!-- Header For managed and button End -->

	<!-- Restart tour notice -->
	<?php if ( ! $tour_silenced ) : ?>
	<div class="gv-notice gv-notice-info gv-mt-fluid gv-p-md oc-reset-wlk-tour gv-max-mob-pt-lg">
		<gv-icon class="gv-notice-icon" src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/info.svg"></gv-icon>
		<p class="gv-notice-content"><?php echo __( 'Missed our plugin and WordPress introduction?', 'onecom-wp' ); ?></p>
		<a href="javascript:void(0)"
				class="gv-button gv-button-neutral gv-mode-condensed"><?php echo __( 'Restart tour', 'onecom-wp' ); ?></a>
		<button class="gv-notice-close" id="oc-restart-tour">
			<gv-icon src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/close.svg"></gv-icon>
		</button>
	</div>
	<?php endif; ?>
	<!-- Restart tour notice End -->

	<!-- link for mwp and non-mWP -->
	<div class="gv-grid gv-gap-fluid gv-tab-grid-cols-1 gv-desk-grid-cols-3 gv-mt-lg gv-max-mob-mb-lg gv-max-mob-pb-lg">
		<?php foreach ( $cards as $card ) : ?>
			<div
				class="gv-card gv-content-container gv-p-lg gv-grid gv-grid-cols-12">
				<gv-tile class="gv-desk-span-2 gv-tab-span-1 gv-span-2 oc-grid-img"
						src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/tiles/<?php echo $card['icon']; ?>.svg"></gv-tile>
				<div class="gv-desk-span-9 gv-tab-span-10 gv-span-9 oc-grid-text">
					<p class="gv-text-lg"><?php echo $card['title']; ?></p>
					<span class="gv-text-sm"><?php echo $card['subtitle']; ?></span>
				</div>
				<div class="gv-span-1 gv-grid gv-content oc-grid-link">
					<a href="<?php echo $card['url']; ?>" class="gv-action">
						<gv-icon
							src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/arrow_forward.svg"></gv-icon>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- link for mwp and non-mWP End -->

	<!-- Footer area -->
	<div class="gv-mt-fluid gv-grid gv-gap-fluid gv-tab-grid-cols-1 gv-desk-grid-cols-2 gv-mobile-grid-cols-1 footer-section">
		<!-- Any question -->
		<div>
			<strong class="gv-text-lg"><?php echo __( 'Any questions?', 'onecom-wp' ); ?></strong>
			<p class="gv-text-sm"><?php echo __( 'Check out our Help Centre or get in touch with customer support.', 'onecom-wp' ); ?></p>
			<?php foreach ( $help_cards as $card ) : ?>
				<div
					class="gv-card gv-content-container gv-my-lg gv-py-md gv-px-lg gv-grid gv-grid-cols-12 gv-items-center">
					<gv-icon class="oc-grid-img-two"
						src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/<?php echo $card['icon']; ?>.svg"></gv-icon>

					<div class="oc-content gv-span-10 oc-grid-content-two">
						<p class="gv-text-lg"><strong><?php echo $card['title']; ?></strong></p>
						<span class="gv-text-sm oc-wp-type"><?php echo $card['subtitle']; ?></span>
					</div>
					<div class="gv-span-1 gv-grid gv-content oc-grid-link">
						<a href="<?php echo $card['url']; ?>" class="gv-action" target="_blank">
							<gv-icon
								src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/arrow_forward.svg"></gv-icon>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- Any question End -->

		<!-- article links -->
		<div>
			<div class="gv-grid gv-grid-cols-2">
				<strong class="gv-text-lg oc-dicover-wp"><?php echo __( 'Discover WordPress', 'onecom-wp' ); ?></strong>
				<div class="gv-flex gv-justify-end">
					<a href="https://help.one.com/hc/en-us/categories/360002171377"
						class="gv-button gv-button-secondary gv-mode-condensed" target="_blank">
						<span class="oc-all-articles"><?php echo __( 'See all articles', 'onecom-wp' ); ?></span>
						<gv-icon src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/open_in_new.svg"></gv-icon>
					</a>
				</div>
			</div>
			<p class="gv-text-sm"><?php echo __( 'Get inspired by our articles and learn more about WordPress.', 'onecom-wp' ); ?></p>
			<div
				class="gv-card gv-content-container gv-my-lg gv-py-md gv-px-lg">
				<?php foreach ( $articles as $article ) : ?>
					<div class="gv-grid gv-grid-cols-12 gv-my-sm">
						<p class="gv-span-11 gv-text-sm"><?php echo $article['title']; ?></p>
						<div class="gv-span-1 gv-grid oc-place-ce">
							<a href="<?php echo $article['url']; ?>" target="_blank">
								<gv-icon
									src="<?php echo ONECOM_WP_URL; ?>/modules/home/assets/icons/arrow_forward.svg"></gv-icon>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- article links end-->
	</div>
	<!-- Footer area end -->
	</div>
</div>