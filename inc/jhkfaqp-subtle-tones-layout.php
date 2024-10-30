<?php
 if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>


<div class="faq-container-main subtle-tones">
    <div class="accr">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="faq-contents-main" >
                <div class="jhk-faq-title-main">
                    <div class="jhk-faq-title-number">Q: </div>
                    <div class="jhk-faq-title"><?php the_title(); ?></div>
                </div>
                <div class="jhk-faq-content-main">
                    <div class="jhk-faq-ans">A: </div>
                    <div class="jhk-faq-content" id="jhk_faq_<?php echo esc_attr(get_the_ID()); ?>" ><?php echo wp_kses_post(get_the_content()); ?></div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>