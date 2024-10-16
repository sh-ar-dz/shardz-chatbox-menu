<?php
class Shardz_Chatbox_Menu {

    public function run() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_footer', array($this, 'render_chatbox_menu'));
    }

    public function enqueue_styles() {
        wp_enqueue_style('shardz-chatbox-menu-style', SHARDZ_CHATBOX_MENU_PLUGIN_URL . 'assets/css/shardz-chatbox-menu.css', array(), SHARDZ_CHATBOX_MENU_VERSION, 'all');
    }

    public function enqueue_scripts() {
        wp_enqueue_script('shardz-chatbox-menu-script', SHARDZ_CHATBOX_MENU_PLUGIN_URL . 'assets/js/shardz-chatbox-menu.js', array('jquery'), SHARDZ_CHATBOX_MENU_VERSION, true);
    }

    public function render_chatbox_menu() {
        include_once SHARDZ_CHATBOX_MENU_PLUGIN_DIR . 'templates/chatbox-menu.php';
    }
}
