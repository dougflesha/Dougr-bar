<?php

/**
 * Dougr Bar Plugin
 *
 * @since             1.0.0
 * @package           007_bar
 *
 * @wordpress-plugin
 * Plugin Name:       Dougr Bar, by Douglas Rosa JCU-MIT2019
 * Plugin URI:        http://dougr.info
 * Description:       DougBar is an experimental plugin developed by Douglas Rosa to Content Management System subject part of Masters of Information Technology course at James Cook University in 2019. The plugin adds a sticky bar at the bottom of post or portfolio that shows category, post title, author, time needed to read article, share buttons and previouse/next post links. This plugin can easly replace your social share buttons while giving readers better experience with much more options.
 * Version:           1.2.7
 * Author:            dougr
 * Author URI:        http://dougr.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sb-bar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sb_bar() {

	$plugin = new sb_bar();
	$plugin->run();

}
run_sb_bar();
