
$(document).ready(function () {
	// dialog (jquery ui)
    $('[bt-dialog="bt"]').click(function () {
        var n = $(this).attr('name');
        var $d = $('#dialog_' + n + '').dialog({
            show: {effect: "fade", duration: 500},
            hide: {effect: "fade", duration: 500},
            width: 550,
            modal: true,
            resizable: false
        });
        $d.find('.bt-close').on('click', function () {
            $d.dialog('close');
        });
    });
	// Slider in header
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        autoControls: true
    });
    
//BACK TO TOP 
    var offset = 120;
    var duration = 500;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
});
