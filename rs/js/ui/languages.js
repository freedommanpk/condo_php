$(document).ready(function () {
    loadBundles($.i18n.browserLang());
    $('body').on('click', '[data-language]', function (e) {
        var selection = $(this).data('language');
        loadBundles(selection !== 'browser' ? selection : $.i18n.browserLang());
    });
});

function loadBundles(lang) {
    $.i18n.properties({
        name: 'Messages',
        path: 'rs/bundle/',
        mode: 'both',
        language: lang,
        callback: function () {
            $('[i18n="menu_news"]').text($.i18n.prop('menu_news'));
            $('[i18n="menu_buy"]').text($.i18n.prop('menu_buy'));
            $('[i18n="menu_sell"]').text($.i18n.prop('menu_sell'));
            $('[i18n="menu_rent"]').text($.i18n.prop('menu_rent'));
            $('[i18n="menu_irent"]').text($.i18n.prop('menu_irent'));
            $('[i18n="menu_maintence"]').text($.i18n.prop('menu_maintence'));

        }
    });
}