<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shawnch.in
 * @since             1.0.0
 * @package           My_Test_React_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin React Boilerplate
 * Plugin URI:        https://shawnch.in
 * Description:       This is a test to practice with the React frontend
 * Version:           1.0.0
 * Author:            Sourav
 * Author URI:        https://shawnch.in/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-test-react-plugin
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
define( 'MY_TEST_REACT_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-my-test-react-plugin-activator.php
 */
function activate_my_test_react_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-test-react-plugin-activator.php';
	My_Test_React_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-my-test-react-plugin-deactivator.php
 */
function deactivate_my_test_react_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-test-react-plugin-deactivator.php';
	My_Test_React_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_my_test_react_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_my_test_react_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-my-test-react-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_test_react_plugin() {

	$plugin = new My_Test_React_Plugin();
	$plugin->run();

}
run_my_test_react_plugin();
