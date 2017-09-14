<?php
/**
 * Plugin Name: EDD Vendor Role
 * Plugin URI: https://github.com/KevinDahlberg/easy-digital-downloads-vendor-role-plugin
 * Description: Extension of the EDD plugin that changes the Vendor Role to allow vendors to publish posts
 * Version: 1.0
 * Author: Kevin Dahlberg
 * Author URI: http://kevindahlberg.com
 * License: GPL 3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * EDD Vendor Role is a free plugin, and like Wordpress, is licensed under GPL 3.0, and is free for you to edit as you wish.
 *
 * This plugin depends on the Easy Digital Download Plugin to run.  Don't forget to intall that.
 */

function plugin_activation(){

}
register_activation_hook( __FILE__, 'plugin_activation')

function plugin_deactivation(){

}
register_deactivation_hook( __FILE__, 'plugin_deactivation')

function plugin_uninstall(){

}
register_uninstall_hook( __FILE__, 'plugin_uninstall')
