<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           wp_littlefoot
 *
 * @wordpress-plugin
 * Plugin Name:       WP Littlefoot
 * Plugin URI:        https://github.com/dan-bailey/wp-littlefoot
 * Description:       This is an implementation of the LittlefootJS (Bigfoot but without JQuery) footnotes functionality.
 * Version:           1.0.0
 * Author:            Dan Bailey
 * Author URI:        https://www.danbailey.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-littlefoot
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'wp_littlefoot_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-littlefoot-activator.php
 */
function activate_wp_littlefoot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-littlefoot-activator.php';
	wp_littlefoot_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-littlefoot-deactivator.php
 */
function deactivate_wp_littlefoot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-littlefoot-deactivator.php';
	wp_littlefoot_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_littlefoot' );
register_deactivation_hook( __FILE__, 'deactivate_wp_littlefoot' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-littlefoot.php';

/**
 * Enqueue the necessary bits for showing the little popup blips in the code.
 */

 function littlefoot_enqueue_scripts() {
	wp_enqueue_script('littlefootjs', plugin_dir_url( __FILE__ ) . 'public/js/wp-littlefoot-public.js');
	wp_enqueue_sceript('fontawesome', 'https://kit.fontawesome.com/e5141475d1.js');
 }

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_littlefoot() {

	$plugin = new wp_littlefoot();
	$plugin->run();

}
run_wp_littlefoot();
littlefoot_enqueue_scripts();
