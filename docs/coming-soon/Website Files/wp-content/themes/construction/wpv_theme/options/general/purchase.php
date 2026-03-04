<?php

/**
 * Theme options / General / Purchase
 *
 * @package wpv
 * @subpackage construction
 */

return array(
array(
	'name' => __( 'Purchase', 'construction' ),
	'type' => 'start'
),

array(
	'name' => __( 'Why do you need this information?', 'construction' ),
	'desc' => __('Filling these fields allows us to implement automatic updates for your Vamtam theme. Your theme will still be working if you leave these options empty, although you will have to install updates manually.<br>
	        Updating using FTP is only for advanced users and you can’t update the bundled with the theme plugins using FTP method.<br/>
		Please note that any modifications made to the theme files will be overwritten after an automatic update, if you do not have a child theme enabled. Your theme options and content will be preserved.', 'construction'),
	'type' => 'info',
),

array(
	'name'   => __( 'Your Item Purchase Code', 'construction' ) ,
	'desc'   => sprintf( __( ' <a href="%s" target="_blank">See this guide where to get your Item Purchase Code from.</a>', 'construction' ), 'http://support.vamtam.com/solution/articles/195536-where-to-get-your-envanto-username-your-envanto-api-key-your-item-purchase-code-from-' ),
	'id'     => 'envato-license-key',
	'type'   => 'text',
	'static' => true,
	'class'  => defined( 'SUBSCRIPTION_CODE' ) ? 'hidden' : '',
) ,

array(
	'name' => __( 'Validate Purchase Information', 'construction' ),
	'desc' => __( 'Please be aware that without this information you can\'t use the automatic update feature. Updating using FTP is only for advanced users and you can’t update the bundled with the theme plugins using FTP method.', 'construction' ),
	'title' => __( 'Check', 'construction' ),
	'link' => '#',
	'type' => 'button',
	'data' => array(
		'nonce' => wp_create_nonce( 'wpv-check-license' ),
		'full-info' => sprintf( __('
			<h5>Licensing Terms</h5>
Please be advised, in order to use the theme in a legal manner, you need to purchase a separate license for each domain you are going to use the theme on. A single license is limited to a single domain/application. For more information please refer to the license included with the theme or <a href="%s" target="_blank">Licensing Terms</a> on the ThemeForest site.

<h5>Support</h5>
	If you have any questions that are beyond the scope of this help file, please feel free to <a href="%s" target="_blank">email us</a> or open a ticket in our <a href="%s" target="_blank">Help Desk</a>. You can <a href="%s" target="_blank">follow us on twitter</a> to get the updates. Thanks so much!', 'construction'), 'http://themeforest.net/licenses', 'mailto:support@vamtam.com', 'http://support.vamtam.com', 'https://twitter.com/vamtam' ),
	),
	'button_class' => 'vamtam-check-license',
	'class'  => defined( 'SUBSCRIPTION_CODE' ) ? 'hidden' : '',
),

array(
	'name' => __( 'Disable System Status Information Gathering', 'construction' ),
	'desc' => __('By enabling this option you will opt out of automatically sending our support system detailed information about your website. Please note that we might be able to respond more quickly if you leave this disabled. We advise you to turn off this option before opening a support ticket. Here is the information that we collect when this option is disabled:<br>
		<ul>
			<li>memory limit</li>
			<li>is wp_debug enabled</li>
			<li>list of active plugins and their versions</li>
			<li>POST requests limit</li>
			<li>allowed number of request variables</li>
			<li>default time limit</li>
			<li>permissions for the cache/ directory inside the theme</li>
			<li>does wp_remote_post() work as expected</li>
		</ul>

		None of this information will be shared with third parties.
		', 'construction'),
	'id' => 'system-status-opt-out',
	'type' => 'toggle',
	'static' => true,
) ,

array(
	'type' => 'end'
)
);
