(function ($) {
	$(document).ready(function () {
		$('#oc-restart-tour').click(function () {
			console.info('Restart tour')
		})
		$('.gv-notice-close').click(function () {
			const el = $(this);
			$.post(oc_home_ajax_obj.ajax_url, {
					_ajax_nonce: oc_home_ajax_obj.nonce,
					action: "oc_home_silence_tour",
					title: this.value
				}, function (data) {
					if (data.status === 'success') {
						el.parents('.gv-notice').fadeOut()
					}
				}
			);
		})


		$("#oc-start-tour, #oc_login_masking_overlay_wrap .oc_welcome_modal_close").on('click', function (e) {
			e.preventDefault();
			$("#oc_login_masking_overlay").hide();
			$(".loading-overlay.fullscreen-loader").removeClass('show');
			let redirect = true;
			console.log($(this));
			if($(this).hasClass('oc_welcome_modal_close')){
				redirect = false;
			}
			const nonce = 'asdsadsad';

			$.post(oc_home_ajax_obj.ajax_url, {
				'action': 'oc_close_welcome_modal',
				'nonce': nonce
			})
				.done(function (response) {
					if (response && redirect) {
						window.location.href = oc_home_ajax_obj.home_url;
					}else{
						console.log('modal closed');
					}
				})
				.fail(function () {
					console.error("Failed to close the welcome modal.");
				});
		});

	});
})(jQuery)