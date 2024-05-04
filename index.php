<?php
/**
  * Plugin Name:        Plus WP Plugin
  * Plugin URI:         https://paulonyebuchi.xyz 
  * Description:        A plugin for adding blocks to a theme. 
  * Version:            1.0 
  * Requires at least:  5.9 
  * Requires PHP:       7.2 
  * Author:             Paul Onyebuchi
  * Author URI:         https://paulonyebuchi.xyz   
  * Text Domain:        Plus WP Plugin 
  * Domain Path:        /languages 
  * Requires Plugins:   my-plugin, yet-another-plugin 
*/

  if(!function_exists('add_action')) {
    echo "You won't what you're looking for here";
    exit;
  }

  // Setup
  define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

  //Includes
  include(UP_PLUGIN_DIR . 'includes/register-blocks.php');

  //Hooks
  add_action('init', 'up_register_blocks');  // pw means Plus WordPress.. from the plugin name
  