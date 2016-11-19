<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Files - ownCloud</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-itunes-app" content="app-id=543672169">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ownCloud">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/png" href="http://localhost/core/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/core/img/favicon-touch.png">
    <link rel="stylesheet" href="{{ URL::asset('files/css/styles.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/header.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/mobile.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/icons.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/fonts.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/apps.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/fixes.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/multiselect.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/jquery-ui.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/jquery-ui-fixes.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/jquery-tipsy.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/jquery.ocdialog.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/share.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/stylesheet.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/style.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/mobile(1).css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/versions.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/style(1).css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/mediaelementplayer.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/colorbox.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/firstrunwizard.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/slideshow.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/files.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/upload.css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/mobile(2).css')}}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('files/css/trash.css')}}" media="screen">
    {{--<script src="{{ URL::asset('files/js/oc.js') }}"></script>--}}
    <script src="{{ URL::asset('files/js/jquery.min.js') }}"></script>
    {{--<script src="{{ URL::asset('files/js/jquery-migrate.min.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery-ui.custom.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/underscore.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/moment-with-locales.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/handlebars.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/md5.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/placeholders.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery-tipsy.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/compatibility.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.ocdialog.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/oc-dialogs.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/js.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/l10n.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/octemplate.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/eventsource.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/config.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/search.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/oc-requesttoken.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/apps.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/snap.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/placeholder.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.avatar.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/avatar.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/backgroundjobs.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/previewplugin.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/share.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/share(1).js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/external.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/editor.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/ace.js') }}"></script>--}}

    {{--<script src="{{ URL::asset('files/js/versions.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/viewer.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.colorbox.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/firstrunwizard.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/activate.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.mousewheel-3.1.1.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/slideshow.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/public.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/app.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/file-upload.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.iframe-transport.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery.fileupload.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/jquery-visibility.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/filesummary.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/breadcrumb.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/filelist.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/search(1).js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/favoritesfilelist.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/tagsplugin.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/favoritesplugin.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/handlebars.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/app(1).js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/sharedfilelist.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/app(2).js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/filelist(1).js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/fileactions.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/files.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/navigation.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('files/js/keyboardshortcuts.js') }}"></script>--}}
</head>
<body id="body-user">
<header role="banner">
    @include('header')
</header>

<nav role="navigation">
    <div id="navigation" class="menu" style="display: none;">
        <div id="apps" class="svg">
            <ul>
                <li data-id="files_index">
                    <a href="" tabindex="3" class="active">
                        <img class="app-icon svg" alt="" src="img/files.svg">
                        <div class="icon-loading-dark" style="display:none;"></div>
                        <span>Files	</span>
                    </a>
                </li>
                <li data-id="activity">
                    <a href="" tabindex="3">
                        <img class="app-icon svg" alt="" src="img/activity.svg">
                        <div class="icon-loading-dark" style="display:none;"></div>
                        <span>Activity </span>
                    </a>
                </li>
                <li data-id="gallery_index">
                    <a href="" tabindex="3">
                        <img class="app-icon svg" alt="" src="img/gallery.svg">
                        <div class="icon-loading-dark" style="display:none;"></div>
                        <span>Pictures </span>
                    </a>
                </li>
                <li id="apps-management">
                    <a href="" tabindex="4">
                        <img class="app-icon svg" alt="" src="img/apps.svg">
                        <div class="icon-loading-dark" style="display:none;"></div>
                        <span>Apps</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="content-wrapper">
    <div id="content" class="app-files" role="main">
        @include('navigation')

        <div id="app-content" style="transition: all 0.3s ease;">
            <div id="app-navigation-toggle" class="icon-menu" style="display: none;"></div>
            <div id="app-content-files" class="viewcontainer has-favorites" style="min-height: initial;">
                <form id="passwordform" class="section">
                    <h2>Password</h2>
                    <div id="passwordchanged" style="display: none;">Success</div>
                    <div id="passworderror" style="display: none;">Unable to change your password</div>
                    <input type="password" id="pass1" name="oldpassword" placeholder="Current password" autocomplete="off" autocapitalize="off" autocorrect="off" original-title="">
                    <input type="password" id="pass2" name="personal-password" placeholder="New password" data-typetoggle="#personal-show" autocomplete="off" autocapitalize="off" autocorrect="off" original-title=""><input type="text" name="personal-password-clone" autocomplete="off" placeholder="New password" style="display: none;">
                    <input type="checkbox" id="personal-show" name="show" original-title=""><label for="personal-show"></label>
                    <input id="passwordbutton" type="button" value="Change password" original-title="">
                    <br>
                    <div class="strengthify-wrapper"><div class="strengthify-bg"></div><div class="strengthify-container"></div><div class="strengthify-separator" style="left: 25%"></div><div class="strengthify-separator" style="left: 50%"></div><div class="strengthify-separator" style="left: 75%"></div></div>
                </form>

                <form id="displaynameform" class="section">
                    <h2>
                        <label for="displayName">Full Name</label>
                    </h2>
                    <input type="text" id="displayName" style="width: 200px" name="displayName" value="{{session('current_user')}}" autocomplete="on" autocapitalize="off" autocorrect="off" original-title="" readonly>
                    <span class="msg"></span>
                    <input type="hidden" id="oldDisplayName" name="oldDisplayName" value="admin" original-title="">
                </form>

            </div>
            <script>
                $('#passwordbutton').click(function () {
                    var password1 = $('#pass1').val();
                    var password2 = $('#pass2').val();
                    var formData = {
                        password: password1,
//                        password2: password2,
                    }
                    if(password1!=password2){
//                        $('#passworderror').show();
                        alert('Password not maaping!')
                        return;
                    }
                    $.ajax({

                        type: 'GET',
                        url: '/setpassAccount',
                        data: formData,
                        dataType: 'json',
                        success: function (data) {
                            console.log(JSON.parse(data));
                            var dataobj = JSON.parse(data);
                            if(dataobj.code =='200'){
                                console.log('code 200');
                                $('#pass1').val('');
                                $('#pass2').val('');
                                alert('Success!')
//                                $('#passwordchanged').show();
                            }else{
                                $('#passworderror').show();
                            }
                        },
                        error: function (data) {
                            console.log('error');
                            console.log('Error:', data);
                        }
                    });

                })
            </script>
</div>


<div id="cboxOverlay" style="opacity: 1; cursor: auto; display: none;"></div>
<div id="colorbox" class=""
     style="padding-bottom: 20px; padding-right: 0px; top: 98px; left: 199px; position: absolute; width: 926px; height: 438px; opacity: 1; cursor: auto; display: none;">
    <div id="cboxWrapper" style="height: 458px; width: 926px;">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left; width: 926px;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left; height: 438px;"></div>
            <div id="cboxContent" style="float: left; width: 926px; height: 438px;">
                <div id="cboxTitle" style="float: left; display: block;"></div>
                <div id="cboxCurrent" style="float: left; display: none;"></div>
                <div id="cboxNext" style="float: left; display: none;"></div>
                <div id="cboxPrevious" style="float: left; display: none;"></div>
                <div id="cboxSlideshow" style="float: left; display: none;"></div>
                <div id="cboxClose" style="float: left;">close</div>
            </div>
            <div id="cboxMiddleRight" style="float: left; height: 438px;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left; width: 926px;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
<div id="slideshow" class="icon-loading-dark inactive">
    <input type="button" class="svg next icon-view-next" value="Next">
    <input type="button" class="svg play icon-view-play" value="Play">
    <input type="button" class="svg pause icon-view-pause" value="Pause">
    <input type="button" class="svg previous icon-view-previous" value="Previous">
    <input type="button" class="svg exit icon-view-close" value="Close">

    <div class="progress icon-view-pause"></div>
</div>
<div class="dummy-fileactions hidden"></div>
<script src="{{ URL::asset('files/js/inject_jq.js')}}"></script>
</body>
</html>