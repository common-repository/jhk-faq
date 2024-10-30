<?php
 if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (!function_exists('jhkfaqp_sanitize_hex_color_array')){
    function jhkfaqp_sanitize_hex_color_array($color_array) {
        $sanitized_colors = array();
        
        foreach ($color_array as $colors) {
            $sanitized_colors[] = array_map('sanitize_hex_color', $colors);
        }
        
        return $sanitized_colors;
    }
}
$color_pairs = array(
    array('#fe9903', '#975800'),
    array('#665ab2', '#2e2a4d'),
    array('#008ec5', '#014461'),
    array('#32c080', '#1a6443')
);
$sanitized_color_pairs = jhkfaqp_sanitize_hex_color_array($color_pairs);

$n = 1;
?>

<div class="faq-container-main vibrant-color">
    <div class="accr">
        <?php while ($query->have_posts()) : $query->the_post();
            $color_index = $n % count($color_pairs);
            $current_color_pair = $color_pairs[$color_index]; ?>
            <div class="faq-contents-main">
                <div class="jhk-faq-title-main">
                    <div class="jhk-faq-title-number" style="background-color: <?php echo esc_attr($current_color_pair[0]); ?>"><?php echo esc_html(sprintf('%02d.', $n)); ?></div>
                    <div class="jhk-faq-title" style="background-color: <?php echo esc_attr($current_color_pair[1]); ?>"><?php the_title(); ?></div>
                </div>
                <div class="jhk-faq-content-main">
                    <?php
                    if (has_post_thumbnail()) {
                        echo '<div class="jhk-faq-content-image">';
                        the_post_thumbnail('thumbnail'); // You can specify a different image size if needed
                        echo '</div>'; 
                    }?>
                    <div class="jhk-faq-content" id="jhk_faq_<?php echo esc_attr(get_the_ID()); ?>" ><?php echo wp_kses_post(get_the_content()); ?></div>
                </div>
            </div>
            <?php $n++;
        endwhile; ?>
    </div>
</div>