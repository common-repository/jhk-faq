<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }
    $n = 1;
?>

<div class="faq-container-main simple">
    <div class="accr">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="faq-contents-main">
                <div class="jhk-faq-title-main">
                    <div class="jhk-faq-title-number"><?php echo esc_html(sprintf('%02d.', $n)); ?></div>
                    <div class="jhk-faq-title"><?php the_title(); ?></div>
                </div>
                <div class="jhk-faq-content-main">
                    <div id="jhk_faq_<?php echo esc_attr(get_the_ID()); ?>"><?php echo wp_kses_post(get_the_content()); ?></div>
                </div>
            </div>
        <?php 
        $n++;
        endwhile; ?>
    </div>
</div>