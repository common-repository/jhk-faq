<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!function_exists('jhkfaqp_enqueue_admin_scripts')){
    function jhkfaqp_enqueue_admin_scripts() {
        // Enqueue jQuery and jQuery UI Tabs
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-tabs');
    }
    add_action('admin_enqueue_scripts', 'jhkfaqp_enqueue_admin_scripts');
}
