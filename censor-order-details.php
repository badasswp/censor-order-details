<?php
/**
 * Plugin Name: Censor Order Details
 * Plugin URI:  https://github.com/badasswp/censor-order-details
 * Description: Hide sensitive customer order details in WooCommerce.
 * Version:     1.0.1
 * Author:      badasswp
 * Author URI:  https://github.com/badasswp
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: censor-order-details
 * Domain Path: /languages
 *
 * @package CensorOrderDetails
 */

namespace badasswp\CensorOrderDetails;

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\censor_order_details' );

/**
 * Censor Order Details.
 *
 * @since 1.0.0
 *
 * @wp-hook 'admin_enqueue_scripts'
 */
function censor_order_details(): void {
	if ( ! current_user_can( 'administrator' ) ) {
		wp_enqueue_style(
			'censor-order-details',
			trailingslashit( plugin_dir_url( __FILE__ ) ) . 'styles.css',
			[],
			true,
			'all'
		);
	}
}
