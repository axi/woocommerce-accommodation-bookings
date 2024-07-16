<?php
/**
 * Plugin Name: WooCommerce Accommodation Bookings
 * Requires Plugins: woocommerce
 * Plugin URI: https://woocommerce.com/products/woocommerce-accommodation-bookings/
 * Description: An accommodations add-on for the WooCommerce Bookings extension.
 * Version: 1.2.7
 * Author: WooCommerce
 * Author URI: https://woocommerce.com
 * Text Domain: woocommerce-accommodation-bookings
 * Domain Path: /languages
 * Tested up to: 6.6
 * Requires at least: 6.4
 * WC tested up to: 9.0
 * WC requires at least: 8.8
 * PHP tested up to: 8.3
 * Requires PHP: 7.4
 *
 * Copyright: © 2023 WooCommerce
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Woo: 1412069:99b2a7a4af90b6cefd2a733b3b1f78e7
 *
 * @package woocommerce-accommodation-bookings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WC_ACCOMMODATION_BOOKINGS_VERSION', '1.2.7' ); // WRCS: DEFINED_VERSION.

require_once 'includes/class-wc-accommodation-bookings-plugin.php';
$wc_accom_plugin = new WC_Accommodation_Bookings_Plugin( __FILE__, WC_ACCOMMODATION_BOOKINGS_VERSION );
$wc_accom_plugin->run();
