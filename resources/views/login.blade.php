<html>
<head>
    <title>Study and Share</title>
  
    <link rel="stylesheet" href="{{ URL::asset('login/css/styles.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/header.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/mobile.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/icons.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/fonts.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/apps.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/fixes.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/multiselect.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/jquery-ui.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/jquery-ui-fixes.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/jquery-tipsy.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/jquery.ocdialog.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/share.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/versions.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/mediaelementplayer.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/colorbox.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/firstrunwizard.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('login/css/slideshow.css') }}" media="screen">
    <script src="{{ URL::asset('ownCloud_files/js/jquery-2.1.4.min.js')}}"></script>
</head>
<body id="body-login">
<div class="wrapper">
    <div class="v-align">
        <header role="banner">
            <div id="header">
                <div class="logo svg" style="background-image: url({{ URL::asset('login/image/login_cloud.jpg') }});width: 350px;height: 150px;margin-left: 20px">
                    <h1 class="hidden-visually">Study and Share</h1>
                </div>
                <div id="logo-claim" style="display:none;"></div>
            </div>
        </header>

        <!--[if IE 8]>
        <style>input[type="checkbox"] {
            padding: 0;
        }</style><![endif]-->
        <!-- Form login -->
        <form  id="login" name="login" action="info.php" method="post">
            <fieldset>
                <div id="message" class="hidden">
                    <img class="float-spinner" alt="" src="{{ URL::asset('login/image/loading-dark.gif') }}">
                    <span id="messageText"></span>
                    <!-- the following div ensures that the spinner is always inside the #message div -->
                    <div style="clear: both;"></div>
                </div>
                <p class="grouptop">
                    <input type="text" name="user" id="user" placeholder="Username" value="" autofocus=""
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="user" class="infield">Username</label>
                    <img class="svg" alt="" srcset="{{ URL::asset('login/image/user.svg') }}">
                </p>

                <p class="groupbottom">
                    <input type="password" name="password" id="password" value="" placeholder="Password"
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="password" class="infield">Password</label>
                    <img class="svg" id="password-icon" srcset="{{ URL::asset('login/image/pass.svg') }}" alt="">
                </p>

                <input type="checkbox" name="remember_login" value="1" id="remember_login" original-title="">
                <label for="remember_login">remember</label>
                <input type="hidden" name="timezone-offset" id="timezone-offset" original-title="" value="7">
                <input type="hidden" name="timezone" id="timezone" original-title="" value="Asia/Jakarta">
                <input type="hidden" name="requesttoken" value="3f9s8jCPg3Rs1FynmPEUHj1+4VHzX6"
                       original-title="">
                <input type="button" id="submit" class="login primary" value="Log in" original-title="">
                <a href="#" id="Register_form" style="color: white;text-decoration: blink">Register</a>
                <script>
                    $('#submit').click(function () {
                            var username = $('#user').val();
                            var password = $('#password').val();
                        var formData = {
                            username: username,
                            password: password,
                        }
                        $.ajax({

                            type: 'GET',
                            url: '/loginAccount',
                            data: formData,
                            dataType: 'json',
                            success: function (data) {
                                console.log(JSON.parse(data));
                                var dataobj = JSON.parse(data);
                                if(dataobj.code =='200'){
                                    location.reload();
                                    console.log('code 200');
                                }else{
                                    $('#message').show();
                                    $('#messageText').html('Username or password not correct!')
                                }
                            },
                            error: function (data) {
                                console.log('error');
                                console.log('Error:', data);
                            }
                        });

                    })
                    $('#Register_form').click(function () {
                        $('#login').hide();
                        $('#register').show();
                    })
//                    $('#login_form').click(function () {
//                        $('#register').hide();
//                        $('#login').show();
//
//                    })
                </script>
            </fieldset>
        </form>
        <form  id="register" name="register" action="info.php" method="post" style="display: none">
            <fieldset>
                <div id="message_register" class="hidden">
                    <img class="float-spinner" alt="" src="{{ URL::asset('login/image/loading-dark.gif') }}">
                    <span id="messageText_register"></span>
                    <!-- the following div ensures that the spinner is always inside the #message div -->
                    <div style="clear: both;"></div>
                </div>
                <p >
                    <input type="text" name="user" id="email" placeholder="email" value="" autofocus=""
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="user" class="infield">Email</label>
                    {{--<img class="svg" alt="" srcset="{{ URL::asset('login/image/user.svg') }}">--}}
                </p>
                <p >
                    <input type="text" name="user" id="displayname" placeholder="display name" value="" autofocus=""
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="user" class="infield">Username</label>
                    {{--<img class="svg" alt="" srcset="{{ URL::asset('login/image/user.svg') }}">--}}
                </p>

                <p >
                    <input type="password" name="password" id="password_register" value="" placeholder="Password"
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="password" class="infield">Password</label>
                    {{--<img class="svg" id="password-icon" srcset="{{ URL::asset('login/image/pass.svg') }}" alt="">--}}
                </p>
                <p >
                    <input type="password" name="password" id="repassword_register" value="" placeholder="repeat password"
                           autocomplete="on" autocapitalize="off" autocorrect="off" required=""
                           original-title="">
                    <label for="password" class="infield"> repeat password</label>
                    {{--<img class="svg" id="password-icon" srcset="{{ URL::asset('login/image/pass.svg') }}" alt="">--}}
                </p>

                <input type="checkbox" name="remember_login" value="1" id="remember_login" original-title="">
                <label for="remember_login">remember</label>
                <input type="hidden" name="timezone-offset" id="timezone-offset" original-title="" value="7">
                <input type="hidden" name="timezone" id="timezone" original-title="" value="Asia/Jakarta">
                <input type="hidden" name="requesttoken" value="3f9s8jCPg3Rs1FynmPEUHj1+4VHzX6"
                       original-title="">
                <input type="button" id="submit_register" class="login primary" value="Register" original-title="">
                <a href="/"  style="color: white;text-decoration: blink" >Login</a>
                <script>
                    $('#submit_register').click(function () {
                        var email = $('#email').val();
                        var displayname = $('#displayname').val();
                        var password = $('#password_register').val();
                        var repassword = $('#repassword_register').val();
                        var formData = {
                            email   : email,
                            displayname: displayname,
                            password: password,
                        }

                        $.ajax({

                            type: 'GET',
                            url: '/registerAccount',
                            data: formData,
                            dataType: 'json',
                            success: function (data) {
                                  console.log(data);
                                console.log(JSON.parse(data));
                                var dataobj = JSON.parse(data);
                                if(dataobj.code =='200'){
                                    $('#message_register').show();
                                    $('#messageText_register').html('register success!')
                                    console.log('code 200');
                                }else{
                                    $('#message_register').show();
                                    $('#messageText_register').html(dataobj.message)
                                }
                            },
                            error: function (data) {
                                console.log('error');
                                console.log('Error:', data);
                            }
                        });

                    })
                </script>
            </fieldset>
        </form>
        <div class="push"></div><!-- for sticky footer -->
    </div>
</div>
<footer role="contentinfo">
    <p class="info">
        <a href="#" target="_blank" rel="noreferrer">Study and Share</a> – Web services under your
        control
    </p>
</footer>
<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxLoadedContent"
                     style="width: 0px; height: 0px; overflow: hidden; float: left;"></div>
                <div id="cboxTitle" style="float: left;"></div>
                <div id="cboxCurrent" style="float: left;"></div>
                <div id="cboxNext" style="float: left;"></div>
                <div id="cboxPrevious" style="float: left;"></div>
                <div id="cboxSlideshow" style="float: left;"></div>
                <div id="cboxClose" style="float: left;"></div>
            </div>
            <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>