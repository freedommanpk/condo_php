// Slider in header
$(document).ready(function () {
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        autoControls: true
    });


    function resetTabs() {
        $("#content > div").hide(); //Hide all content
        $("#tabs a").attr("id", ""); //Reset id's      
    }

    var myUrl = window.location.href; //get URL
    var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2     
    var myUrlTabName = myUrlTab.substring(0, 4); // For the above example, myUrlTabName = #tab

    (function () {
        $("#content > div").hide(); // Initially hide all content
        $("#tabs li:first a").attr("id", "current"); // Activate first tab
        $("#content > div:first").fadeIn(); // Show first tab content
        $("#tabs a").on("click", function (e) {
            e.preventDefault();
            if ($(this).attr("id") == "current") { //detection for current tab
                return;
            }
            else {
                resetTabs();
                var tabname = $(this).attr('name');
                $(tabname).fadeOut().load($(this).attr('href'), function (response, status, xhr) {
                    if (status == "error") {
                        $(this).html('Error').fadeIn();
                    }
                    else
                    {
                        $(this).fadeIn();
                    }
                });
                $(this).attr("id", "current");
            }

        });

        for (i = 1; i <= $("#tabs li").length; i++) {
            if (myUrlTab == myUrlTabName + i) {
                resetTabs();
                $("a[name='" + myUrlTab + "']").attr("id", "current"); // Activate url tab
                $(myUrlTab).fadeIn(); // Show url tab content        
            }
        }
    })();
});
