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

<div>
    @if($data['type']=='jpg')
        <div id="slideshow" class="icon-loading-dark" style="display: block; background-position: -10000px 0px;">
            <input type="button" class="svg next icon-view-next" value="Next" style="display: none;">
            <input type="button" class="svg play icon-view-play" value="Play" style="display: inline-block;">
            <input type="button" class="svg pause icon-view-pause" value="Pause" style="display: none;">
            <input type="button" class="svg previous icon-view-previous" value="Previous" style="display: none;">
            <input type="button" class="svg exit icon-view-close" value="Close">

            <div class="progress icon-view-pause" style="height: 6px;"></div>
            <img src="{{$data['filepath']}}" alt="aha.png" style="top: 0px; width: 654px; height: 654px;"></div>
    @elseif($data['type']=='mp3')
        <div id="content-wrapper">
            <div id="content" class="app-files" role="main">
                @include('navigation')
                <div style="margin-left: 500px;padding-top: 20px">
                    <audio controls>
                        <source src="horse.ogg" type="audio/ogg">
                        <source src="{{$data['filepath']}}" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
    @endif
</div>
</body>
</html>