$(document).ready(function () {
    // alert();
    //user interface
    $('.pagination').click(function (e) {
        e.preventDefault();
        alert();
    });

    $('body').on('click', '.popup_home', function (e) {
        var home_id = $(this).data('id');
        $('[data-popup="homedetail"]').find('h3').text(home_id);
    });

    $('.image-link').magnificPopup({
        type: 'image',
        retina: {
            ratio: 2,
            replaceSrc: function (item, ratio) {
                return item.src.replace(/\.\w+$/, function (m) {
                    return '@2x' + m;
                });
            }
        }
    });
    $('body').on('click', '.wrapper_img', function (e) {
        // $('.wrapper_img').click(function () {
        alert();
        $(this).find('.gallery').each(function () {
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    });

    $('.gallery').each(function () {
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });



    //database
//    $.post("_inc/function.php", {fn: "getcondo"}, function (r)
//    {
//        var json = JSON.parse(r);
//        var html = '';
//        $.each(json, function (i, d) {
////            var $table = $('<table><tr></tr></table>');
////            var $table_img = $table.append('<td><div class="wrapper_img"><div class="gallery"></div></div></td>');
////            $table_img.append('<a href="images/t.png" class="wrapper_img"> <img src="images/t2.png"> </a>');
//            html += '<div class="example-wrapper">';
//            html += '<h3>' + d.c_name + ' <a href="#homedetail" data-id="5" class="popup_home">รายละเอียด</a></h3>';
//            html += '<div class="demo-wrapper">';
//            html += '<table> <tr>';
//            html += ' <td>';
//            html += '<div class="wrapper_img"><div class="gallery">';
//
//            html += '<a href="images/t.png" class="wrapper_img"> <img src="images/t2.png"> </a>'; //from image table
//            html += '<a href="images/t2.png"></a>'; //from image table
//            html += '<a href="images/t3.png"></a>'; //from image table
//
//            html += '</div></div>';
//            html += '</td> </tr>';
//            html += '</td>';
//            html += '<td valign="top">';
//            html += '<div class="property-info">';
//
//            html += '<div>';
//            html += '<td>';
//            html += '</div>';
//            html += '</div>';
//        });
//        $('.condo').before(html);
//
//    });
 

});
