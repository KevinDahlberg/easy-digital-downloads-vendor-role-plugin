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
}
