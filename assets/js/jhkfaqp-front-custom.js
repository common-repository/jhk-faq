jQuery(document).ready(function($) {
    jQuery('.plus-minus-toggle').on('click', function() {
        var faqContent = jQuery(this).closest('.faq-contents-main-default').find('.jhk-faq-content');
        faqContent.slideToggle();
        jQuery(this).toggleClass('collapsed');
    });
});
