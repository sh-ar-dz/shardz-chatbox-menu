<?php
/**
 * Plugin Name: Shardz Chatbox Menu
 * Plugin URI: https://markinuity.com
 * Description: Adds a chatbox on desktop and mobile app-like menu on smaller screens.
 * Version: 1.0.0
 * Author: Shardz
 * Author URI: https://markinuity.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: shardz-chatbox-menu
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('SHARDZ_CHATBOX_MENU_VERSION', '1.0.0');
define('SHARDZ_CHATBOX_MENU_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SHARDZ_CHATBOX_MENU_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include the update checker
require_once SHARDZ_CHATBOX_MENU_PLUGIN_DIR . 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

// Set up the update checker
$myUpdateChecker = PucFactory::buildUpdateChecker(
  'https://github.com/YourUsername/shardz-chatbox-menu/',
  __FILE__,
  'shardz-chatbox-menu'
);

// Optional: Set it to use GitHub releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

// Include the main plugin class
require_once SHARDZ_CHATBOX_MENU_PLUGIN_DIR . 'includes/class-shardz-chatbox-menu.php';

// Begins execution of the plugin
function run_shardz_chatbox_menu() {
    $plugin = new Shardz_Chatbox_Menu();
    $plugin->run();
}
run_shardz_chatbox_menu();
