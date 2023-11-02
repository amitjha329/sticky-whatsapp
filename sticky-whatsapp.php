<?php

/**
 * Plugin Name: Sticky Whatsapp
 * Plugin URI: https://www.yashjha.dev/
 * Description: Sticky Whatsapp plugin show a floating fixed links for whatsapp and call at the bottom of the page.
 * Version: 0.2
 * Author: Yash Jha
 * Author URI: https://www.yashjha.dev/
 **/

require_once plugin_dir_path(__FILE__) . '/inc/install.php';
require_once plugin_dir_path(__FILE__) . '/inc/block.php';
require_once plugin_dir_path(__FILE__) . '/inc/fn.php';
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

register_activation_hook(
    __FILE__,
    'plugin_install'
);
add_action(
    'wp_footer',
    'sticky_whatsapp'
);

add_action("admin_menu", "create_admin_link");
add_action("wp_enqueue_scripts", "load_stylesheets");
