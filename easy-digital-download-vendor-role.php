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

function eddv_plugin_activation(){
  require_once( dirname( __FILE__ ) . '/classes/eddv-settings.php' );

}

register_activation_hook( __FILE__, 'eddv_plugin_activation')

function eddv_plugin_deactivation(){

}
register_deactivation_hook( __FILE__, 'eddv_plugin_deactivation')

function eddv_plugin_uninstall(){

}
register_uninstall_hook( __FILE__, 'eddv_plugin_uninstall')


if ( function_exists('my_plugin_function') ){
remove_action ('CALLED_HOOK','my_plugin_function');
add_action ('CALLED_HOOK','my_NEW_plugin_function');
}
else{
add_action( 'admin_notices', 'my_plugin_patch_error' );
}
function my_plugin_patch_error() {
$class = 'notice notice-error';
$message = __( ' plugin patch (functions.php line ...) not workng any longer');
printf( '%2$s', $class, $message );
}
function my_NEW_plugin_function(){
//modified function here
}
