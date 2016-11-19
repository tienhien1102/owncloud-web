<html>
<head>
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">--}}
    {{--<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/reset.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/jquery-ui.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ URL::asset('assets/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<script src="{{ URL::asset('{{ URL::asset('assets/js/backgroundjobs.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('{{ URL::asset('assets/js/bootstrap.js') }}"></script>--}}
{{----------------------------------------------------------------------}}
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
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/styles.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/header.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/mobile.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/icons.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/fonts.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/apps.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/fixes.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/multiselect.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/jquery-ui.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/jquery-ui-fixes.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/jquery-tipsy.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/jquery.ocdialog.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/share.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/stylesheet.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/style.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/mobile(1).css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/versions.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/style(1).css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/mediaelementplayer.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/colorbox.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/firstrunwizard.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/slideshow.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/files.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/upload.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/mobile(2).css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('assets/css/trash.css')}}" media="screen">
    {{--<script src="{{ URL::asset('assets/js/oc.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery-migrate.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery-ui.custom.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/underscore.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/moment-with-locales.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/handlebars.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/md5.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/placeholders.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery-tipsy.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/compatibility.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.ocdialog.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/oc-dialogs.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/js.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/l10n.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/octemplate.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/eventsource.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/config.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/search.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/oc-requesttoken.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/apps.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/snap.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/placeholder.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.avatar.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/avatar.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/backgroundjobs.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/previewplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/share.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/share(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/external.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/editor.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/ace.js')}}"></script>--}}

    {{--<script src="{{ URL::asset('assets/js/versions.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/viewer.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.colorbox.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/firstrunwizard.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/activate.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.mousewheel-3.1.1.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/slideshow.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/public.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/app.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/file-upload.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.iframe-transport.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery.fileupload.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/jquery-visibility.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/filesummary.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/breadcrumb.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/filelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/search(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/favoritesfilelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/tagsplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/favoritesplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/handlebars.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/app(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/sharedfilelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/app(2).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/filelist(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/fileactions.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/files.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/navigation.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/keyboardshortcuts.js')}}"></script>--}}




    <title>Mangasoft - @yield('title')</title>
</head>
<body>
@yield('content')

</body>

</html>