<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }
?>

<div class="faq-container-main default">
    <div class="accr">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="faq-contents-main-default">
                <div class="title-toggle-main">
                    <h3 class="jhk-faq-title"><?php the_title(); ?></h3>
                    <span class="plus-minus-toggle collapsed"></span>
                </div>
                <div class="jhk-faq-content" id="jhk_faq_<?php echo esc_attr(get_the_ID()); ?>"><?php echo wp_kses_post(get_the_content()); ?></div>
            </div>
        <?php endwhile; ?>
    </div>
</div>