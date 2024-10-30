<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* Add Metabox for display shortcode */
if (!function_exists('jhkfaqp_add_shortcode_meta_box')){
    function jhkfaqp_add_shortcode_meta_box() {
        add_meta_box(
            'jhkfaqp_shortcode_meta_box',
            'FAQ Shortcode',
            'jhkfaqp_render_shortcode_meta_box',
            'jhk-faq',
            'side',
            'high'
        );
    }
    add_action('add_meta_boxes', 'jhkfaqp_add_shortcode_meta_box');
}
/* Callback function */
if (!function_exists('jhkfaqp_render_shortcode_meta_box')){
    function jhkfaqp_render_shortcode_meta_box($post) 
    {
        $shortcode = '[jhk-faq]';
        $shortcodewithcate = '[jhk-faq category="your-category"]';
        $shortcodewithtag = '[jhk-faq tag="your-tag"]';
        $shortcodewithlayout = '[jhk-faq layout="layout-name"]';
        ?>

        <p><?php esc_html_e('Copy and paste the following shortcode to display All the FAQs:', 'jhk-faq'); ?></p>
        <input type="text" value="<?php echo esc_attr($shortcode); ?>" readonly="readonly" class="widefat">
        <br>
        <p><?php esc_html_e('Copy and paste the following shortcode to display the FAQs with specific category:', 'jhk-faq'); ?></p>
        <input type="text" value="<?php echo esc_attr($shortcodewithcate); ?>" readonly="readonly" class="widefat">
        <br>
        <p><?php esc_html_e('Copy and paste the following shortcode to display the FAQs with specific tag:', 'jhk-faq'); ?></p>
        <input type="text" value="<?php echo esc_attr($shortcodewithtag); ?>" readonly="readonly" class="widefat">
        <br>
        <p><?php esc_html_e('Copy and paste the following shortcode to display the FAQs for choose layout:', 'jhk-faq'); ?></p>
        <input type="text" value="<?php echo esc_attr($shortcodewithlayout); ?>" readonly="readonly" class="widefat">
        <?php
    }
}
