<?php
/*
Plugin Name: JHK Faq
Plugin URL: https://wordpress.org/plugins/jhk-faq
Description: A simple FAQ plugin
Version: 2.1.1
Author: JHK Infotech
Author URI: https://www.jhkinfotech.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/



/* For not running file direct on url */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* Activation of Plugin */
if (!function_exists('jhkfaqp_plugin_activation')){
    function jhkfaqp_plugin_activation(){
    }
    register_activation_hook(__FILE__,'jhkfaqp_plugin_activation');
}



/* Deactivation of Plugin */
if (!function_exists('jhkfaqp_plugin_deactivation')){
    function jhkfaqp_plugin_deactivation(){
    }
    register_deactivation_hook( __FILE__, 'jhkfaqp_plugin_deactivation' );
}

/* Include the file of plugin registration */
require_once('inc/jhkfaqp-functions.php');

/* Include the file of plugin registration */
require_once('inc/jhkfaqp-reg-plugin.php');


/* Include the file for Display Post using shortcode */
require_once('inc/jhkfaqp-shortcode.php');


/* Include the file for add Metaboxes */
require_once('inc/jhkfaqp-metabox.php');


/* Include the file for plugin */
require_once('inc/jhkfaqp-reg-files.php');