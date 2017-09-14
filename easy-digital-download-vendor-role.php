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
  if( class_exists( 'Easy Digital Downloads') || function_exists( 'EDD' ) ) {
    if ( get_role( 'shop_vendor' ) ){
      remove_role( 'shop_vendor' ) );
    }

    add_role( 'shop_vendor', __( 'Shop Vendor' ), array(
      'read'          => true,
      'edit_posts'    => false,
      'upload_files'  => true,
      'delete_posts'  => false,
      'publish_posts' => true
    ) );

    $role = get_role( 'shop_vendor' )
    $role->add_cap( 'shop_vendor', 'edit_product' );
    $role->add_cap( 'shop_vendor', 'edit_products' );
    $role->add_cap( 'shop_vendor', 'delete_product' );
    $role->add_cap( 'shop_vendor', 'delete_products' );
    $role->add_cap( 'shop_vendor', 'publish_products' );
    $role->add_cap( 'shop_vendor', 'edit_published_products' );
    $role->add_cap( 'shop_vendor', 'upload_files' );
    $role->add_cap( 'shop_vendor', 'assign_product_terms' );
  } else {
    echo 'error'
  }

}

register_activation_hook( __FILE__, 'eddv_plugin_activation')

function eddv_plugin_deactivation(){
  if( !class_exists( 'Easy Digital Downloads' ) || !function_exists( 'EDD' ) ) {
    $role = get_role( 'shop_vendor' )
    $role->remove_cap( 'shop_vendor', 'edit_product' );
    $role->remove_cap( 'shop_vendor', 'edit_products' );
    $role->remove_cap( 'shop_vendor', 'delete_product' );
    $role->remove_cap( 'shop_vendor', 'delete_products' );
    $role->remove_cap( 'shop_vendor', 'publish_products' );
    $role->remove_cap( 'shop_vendor', 'edit_published_products' );
    $role->remove_cap( 'shop_vendor', 'upload_files' );
    $role->remove_cap( 'shop_vendor', 'assign_product_terms' );
  }
}

register_deactivation_hook( __FILE__, 'eddv_plugin_deactivation')

function eddv_plugin_uninstall(){

}
register_uninstall_hook( __FILE__, 'eddv_plugin_uninstall')
