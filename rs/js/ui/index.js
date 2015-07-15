$(document).ready(function () {
    $.post("_inc/function.php", {fn: "getflaglanguage"}, function (r)
    {
        var json = JSON.parse(r);
        var html = '';
        $.each(json, function (i, d) {
            html += '<li data-language="' + d.l_initial + '" style="cursor: pointer" title="' + d.l_name + '"><img src="images/flag/' + d.l_flag + '"></li>';
        });
        $('[data-role="language"]').html(html);
    });
});