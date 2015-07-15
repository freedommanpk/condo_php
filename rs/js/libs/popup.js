$(document).ready(function () {
//                $('.open-popup-link').magnificPopup({
//                    type: 'inline'
//                });
    // Initialize popup as usual   //http://dimsemenov.com/plugins/magnific-popup/documentation.html#zoom-effect
    $('.popup_login').magnificPopup({
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    $('[data-name="register"]').magnificPopup({
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    $('.popup_home').magnificPopup({
        removalDelay: 100,
        mainClass: 'mfp-with-zoom'
         
    });
});