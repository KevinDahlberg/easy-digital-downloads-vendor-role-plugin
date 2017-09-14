<?php

/**
 * Manages setup
 * @package easy-digital-downloads-vendor-role-plugin
 */

class EDDVSettings {
  protected $settings;

  public function __construct() {
    add_action( 'init', array( $this, 'init' ) );
    add_action( 'admin_init', array( $this, 'register_settings' ) )
  }

  /**
   * gives the shop_vendor the ability to publish posts
   */

  public function vender_role_setup() {
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
  }


}
