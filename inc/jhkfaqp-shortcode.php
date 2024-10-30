<?php 

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!function_exists('jhkfaqp_faq_shortcode')){
    function jhkfaqp_faq_shortcode($atts, $content = null) {
        extract(shortcode_atts(array(
            "limit" => '',
            "category" => '',
            "tag" => '',
            'layout' => 'default'
        ), $atts));


        /* Define limit */
        if ($limit) {
            $posts_per_page = $limit;
        } else {
            $posts_per_page = '-1';
        }

        /* Create the Query */
        $post_type = 'jhk-faq';
        $orderby = 'menu_order';
        $order = 'ASC';

        $query_args = array(
            'post_type' => $post_type,
            'posts_per_page' => $posts_per_page,
            'orderby' => $orderby,
            'order' => $order,
            'no_found_rows' => 1
        );

        /* Add category filter if specified */
        if ($category) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'jhkfaq_category',
                    'field' => 'slug',
                    'terms' => $category
                )
            );
        }
        if ($tag) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'jhkfaq_tag',
                    'field' => 'slug',
                    'terms' => $tag
                )
            );
        }

        $query = new WP_Query($query_args);

        /* Get post type count */
        $post_count = $query->post_count;
        $i = 1;
        
        ob_start();

        /* Displays FAQ info */
        if ($post_count > 0) :
            global $post;
            
            if ($layout == 'simple') {
                include('jhkfaqp-simple-layout.php');
            } elseif ($layout == 'subtle-tones') {
                include('jhkfaqp-subtle-tones-layout.php');
            } elseif ($layout == 'vibrant-color') {
                include('jhkfaqp-vibrant-color-layout.php');
            }else {
                include('jhkfaqp-default-layout.php');
            }

        

        endif;

        /* Reset query to prevent conflicts */
        wp_reset_query();
        ?>

        <?php
        return ob_get_clean();
    }
    add_shortcode("jhk-faq", "jhkfaqp_faq_shortcode");

}


