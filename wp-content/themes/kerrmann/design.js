$('.site-header').remove()

$('body').ready(function(){
    $('.view_point').on('inview', function(event, isInView) {
        if (isInView) {
            $('.container_nav').removeClass('fixed_nav_style')
        }

        else {
            $('.container_nav').addClass('fixed_nav_style')
        }
    });
})

$('.wpcf7-submit').addClass('custombutton')
$('.wpcf7-textarea').addClass('wpcf7-text')
