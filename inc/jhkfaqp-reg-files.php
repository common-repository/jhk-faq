<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!function_exists('jhkfaqp_enqueue_front_script')){
    function jhkfaqp_enqueue_front_script() {
        
        wp_enqueue_style('jhkfaq-plugin-front-styles', plugin_dir_url(__FILE__) . '../assets/css/jhkfaqp-front-custom.css');
        wp_enqueue_script('jhkfaq-plugin-script', plugins_url('../assets/js/jhkfaqp-front-custom.js', __FILE__), array('jquery'), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'jhkfaqp_enqueue_front_script');
}