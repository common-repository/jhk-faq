<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* Register Custom Post type */
if (!function_exists('jhkfaqp_setup_post_types')){
	function jhkfaqp_setup_post_types() {

		$faq_labels =  apply_filters( 'jhkfaqp_labels', array(
			'name'                => 'FAQs',
			'singular_name'       => 'FAQ',
			'add_new'             => __('Add New', 'jhk-faq'),
			'add_new_item'        => __('Add New FAQ', 'jhk-faq'),
			'edit_item'           => __('Edit FAQ', 'jhk-faq'),
			'new_item'            => __('New FAQ', 'jhk-faq'),
			'all_items'           => __('All FAQs', 'jhk-faq'),
			'view_item'           => __('View FAQ', 'jhk-faq'),
			'search_items'        => __('Search FAQs', 'jhk-faq'),
			'not_found'           => __('No FAQs found', 'jhk-faq'),
			'not_found_in_trash'  => __('No FAQs found in Trash', 'jhk-faq'),
			'parent_item_colon'   => '',
			'menu_name'           => __('FAQs', 'jhk-faq'),
			'exclude_from_search' => true
		) );


		$faq_args = array(
			'labels' 			=> $faq_labels,
			'public' 			=> true,
			'publicly_queryable'=> true,
			'show_ui' 			=> true,
			'show_in_menu' 		=> true,
			'query_var' 		=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> false,
			'hierarchical' 		=> false,
			'supports' 			=> apply_filters('jhkfaqp_supports', array( 'title', 'editor' , 'thumbnail' ) ),
		);

		/* Register FAQ Categories */
		$faq_category_labels = array(
			'name' => __('FAQ Categories', 'jhk-faq'),
			'singular_name' => __('FAQ Category', 'jhk-faq'),
			'search_items' => __('Search FAQ Categories', 'jhk-faq'),
			'all_items' => __('All FAQ Categories', 'jhk-faq'),
			'parent_item' => __('Parent FAQ Category', 'jhk-faq'),
			'parent_item_colon' => __('Parent FAQ Category:', 'jhk-faq'),
			'edit_item' => __('Edit FAQ Category', 'jhk-faq'),
			'update_item' => __('Update FAQ Category', 'jhk-faq'),
			'add_new_item' => __('Add New FAQ Category', 'jhk-faq'),
			'new_item_name' => __('New FAQ Category Name', 'jhk-faq'),
			'menu_name' => __('FAQ Categories', 'jhk-faq'),
		);

		$faq_category_args = array(
			'hierarchical' => true,
			'labels' => $faq_category_labels,
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'faq-category'),
		);

		register_taxonomy('jhkfaq_category', 'jhk-faq', $faq_category_args);

		/* Register FAQ Tags */
		$faq_tag_labels = array(
			'name' => __('FAQ Tags', 'jhk-faq'),
			'singular_name' => __('FAQ Tag', 'jhk-faq'),
			'search_items' => __('Search FAQ Tags', 'jhk-faq'),
			'all_items' => __('All FAQ Tags', 'jhk-faq'),
			'edit_item' => __('Edit FAQ Tag', 'jhk-faq'),
			'update_item' => __('Update FAQ Tag', 'jhk-faq'),
			'add_new_item' => __('Add New FAQ Tag', 'jhk-faq'),
			'new_item_name' => __('New FAQ Tag Name', 'jhk-faq'),
			'menu_name' => __('FAQ Tags', 'jhk-faq'),
		);

		$faq_tag_args = array(
			'hierarchical' => true,
			'labels' => $faq_tag_labels,
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'faq-tag'),
		);

		register_taxonomy('jhkfaq_tag', 'jhk-faq', $faq_tag_args);

		register_post_type( 'jhk-faq', apply_filters( 'jhkfaqp_post_type_args', $faq_args ) );

	}

	add_action('init', 'jhkfaqp_setup_post_types');
}





