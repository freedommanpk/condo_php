<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="Condo">
        <meta name="description" content="Condo">
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
        </style>
        <?php include ("_inc/metadata.php"); ?>
        <!-- Libs -->
        <script src="rs/js/libs/jquery.cookie.js" type="text/javascript"></script>
        <script src="rs/js/libs/jquery.js" type="text/javascript"></script>
        <script src="rs/js/libs/bootstrap.min.js" type="text/javascript"></script>
        <script src="rs/js/libs/html5shiv.js" type="text/javascript"></script> <!-- ไว้แสดงผลกับ ie8 -->
        <script src="rs/js/libs/site.min.js" type="text/javascript"></script>
        <script src="rs/js/libs/fn.js" type="text/javascript"></script>
        <script src="rs/js/libs/jqueryui/jquery-ui.js" type="text/javascript"></script>
        <script src="rs/js/libs/popup.js" type="text/javascript"></script>
        <script src="rs/js/libs/jquery.bxslider.js" type="text/javascript"></script>
        <script src="rs/js/libs/jquery.bxslider.min.js" type="text/javascript"></script>
        <!-- pop up --> 
        <script src="rs/popup/jquery.magnific-popup.js" type="text/javascript"></script>
        <script src="rs/js/libs/jquery.showmore.min.js"></script>


        <!-- Index page -->
        <script src="rs/js/libs/index.js" type="text/javascript"></script>
        <!-- CSS -->
        <link href="rs/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="rs/css/site.css" rel="stylesheet" type="text/css"/>
        <!--<link href="rs/css/site.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="rs/css/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
        <link href="rs/js/libs/jqueryui/css/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="rs/popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="width:1024px"><strong>Under Construction</strong>
        <div id="wrap">
            <div id="header">
                <div class="logo"><img src="images/header_logo.png"></div>
            </div>
            <div id="slider">
                <ul class="bxslider slider">
                    <li><img src="images/t4.png" title="โครงการบ้านอุดมสุข สุขสนุกสุขสันต์" /></li>
                    <li><img src="images/t2.png" title="โครงการบ้านคลองแสนแสบ" /></li>
                    <li><img src="images/t3.png" title="ชีวิตดี๊ ดีกับโปรโมชั่นลดลมร้อน" /></li>
                    <li><img src="images/t.png" title="โครงการใหม่ ใส่ใจดูแลคุณ" /></li>
                </ul>
            </div>
            <div id="nav">
                <ul>
                    <li>
                        <img src="images/th.png">
                    </li>
                    <li>
                        <img src="images/flag_uk_b.gif">
                    </li>
                </ul>
                <span>
                    <a href="#login" class="popup_login">Login/Register</a>
                </span>
            </div>
            <div id="main">
                <ul id="tabs">
                    <li><a href="news.php" name="#tab1">ข่าว</a></li>
                    <li><a href="buy.php" name="#tab2">หาซื้อ</a></li>
                    <li><a href="buy.html" name="#tab3">โพสขาย</a></li>
                    <li><a href="tem.html" name="#tab4">หาเช่า</a></li> 
                    <li><a href="tem.html" name="#tab5">ปล่อยเช่า</a></li>
                    <li><a href="tem.html" name="#tab6">ดูแล</a></li>
                </ul>
                <div id="content"> 
                    <div id="tab1" data-role="tab_defualt">
                    </div>
                    <div id="tab2" class="output"> 
                    </div>
                    <div id="tab3"> 
                    </div>
                    <div id="tab4"> 
                    </div>
                    <div id="tab5"> 
                    </div>
                    <div id="tab6"> 
                    </div>
                </div>
            </div>

            <div id="sidebar">
                <div id="hireme" class="orange looking tagged">
                    <a class="top">โฆษณา</a>
                    <ul>
                        <li>
                            <img src="http://pagead2.googlesyndication.com/simgad/15253963400181261768">
                        </li>
                    </ul>
                </div>
            </div>
            <div id="footer" class="site-footer">
                <p>บริษัท ออลคอนโด จำกัด | 999 ม.4 ต.ฉลอง อ.เมือง จ.ภูเก็ต 84444<br>
                    โทร.0989898989 อีเมล์.homephuket@gmail.com </p>
            </div>
        </div>
        <script>
            function resetTabs() {
                $("#content > div").hide(); //Hide all content
                $("#tabs a").attr("id", ""); //Reset id's      
            }

            var myUrl = window.location.href; //get URL
            var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2     
            var myUrlTabName = myUrlTab.substring(0, 4); // For the above example, myUrlTabName = #tab

            (function () {
                $('[data-role="tab_defualt"]').load('news.php');
                $("#content > div").hide(); // Initially hide all content
                $("#tabs li:first a").attr("id", "current"); // Activate first tab
                $("#content > div:first").fadeIn(); // Show first tab content
                $("#tabs a").on("click", function (e) {
                    var $self = $(this);
                    e.preventDefault();
                    if ($self.attr("id") == "current") { //detection for current tab
                        return;
                    }
                    else {
                        resetTabs();
                        var tabname = $self.attr('name');
                        $.ajax({
                            type: "POST",
                            url: $self.attr('href'),
                            success: function (html) {
                                $(tabname).fadeIn().html(html);
                            },
                            error: function (ajaxContext) {
                                $(tabname).fadeIn().html(ajaxContext.responseText);
                            }
                        });
//                        $(tabname).fadeOut().load($(this).attr('href'), function (response, status, xhr) {
//                            if (status == "error") {
//                                $(this).html('Error').fadeIn();
//                            }
//                            else
//                            {
//                                $(this).fadeIn();
//                            }
//                        });
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
        </script>
        <div id="login" class="white-popup mfp-hide">
            <div align="center">
                <h3>เข้าสู่ระบบ/<a href="#register" data-name="register">สมัครสมาชิก</a></h3>
                <div class="omb_login">
                    <div class="row omb_row-sm-offset-3 omb_socialButtons">
                        <div class="col-xs-4 col-sm-6">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                <i class="fa fa-facebook visible-xs"></i>
                                <span class="hidden-xs">Facebook</span>
                            </a>
                        </div>
                        <!--div class="col-xs-4 col-sm-4">
                            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                <i class="fa fa-twitter visible-xs"></i>
                                <span class="hidden-xs">Twitter</span>
                            </a>
                        </div>	-->
                        <div class="col-xs-4 col-sm-6">
                            <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                <i class="fa fa-google-plus visible-xs"></i>
                                <span class="hidden-xs">Google+</span>
                            </a>
                        </div>	
                    </div>

                    <div class="row omb_row-sm-offset-3 omb_loginOr">
                        <div class="col-xs-12 col-sm-12">
                            <hr class="omb_hrOr">
                            <span class="omb_spanOr">หรือ</span>
                        </div>
                    </div>

                    <div class="row omb_row-sm-offset-3">
                        <div class="col-xs-12 col-sm-12">	
                            <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="อีเมล์">
                                </div>
                                <span class="help-block"></span>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                                </div>
                                <span class="help-block"></span>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
                            </form>
                        </div>
                    </div>
                    <div class="row omb_row-sm-offset-3">
                        <div class="col-xs-12 col-sm-5">
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me">จดจำฉัน
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <p class="omb_forgotPwd">
                                <a href="#">ลืมรหัสผ่าน?</a>
                            </p>
                        </div>
                    </div>	    	
                </div>
            </div>
        </div>
        <div id="register" class="white-popup mfp-hide">
            <div align="center">
                <h3>สมัครสมาชิก</h3>
                <form action="save.php" onsubmit="return false;">
                    <input class="btn btn-danger" type="button"  data-name="register" value="สมัครสมาชิก">
                </form>
            </div>
        </div>
    </body>
</html>
