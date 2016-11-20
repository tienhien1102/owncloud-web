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
                <div id="controls" style="width: 1073px; min-width: 1073px;">
                    <div class="breadcrumb">
                        <div class="crumb svg last" data-dir="/">
                            <a href=""><img class="svg" src="{{ URL::asset('files/image/home.svg')}}" alt="Home"></a>
                        </div>
                    </div>
                    <div class="actions creatable">

                        <div id="uploadprogresswrapper">
                            <div id="uploadprogressbar"></div>
                            <button class="stop icon-close" style="display:none">
                                <span class="hidden-visually">Cancel upload	</span>
                            </button>
                        </div>
                    </div>
                    <div id="file_action_panel" activeaction="false"></div>
                    <div class="notCreatable notPublic hidden">
                        You don’t have permission to upload or create files here
                    </div>
                    <input type="hidden" name="permissions" value="31" id="permissions" original-title="">
                </div>

                <div id="emptycontent" class="hidden">
                    <div class="icon-folder"></div>
                    <h2>No files in here</h2>
                    <p class="uploadmessage hidden">Upload some content or sync with your devices!</p>
                </div>

                <div class="nofilterresults emptycontent hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable" data-allow-public-upload="yes" data-preview-x="36" data-preview-y="36" class="">
                    <thead>
                    <tr>
                        <th id="headerName" class="column-name">
                            <div id="headerName-container">
                                <input type="checkbox" id="select_all_files" class="select-all" original-title="">
                                <label for="select_all_files">
                                    <span class="hidden-visually">Select all</span>
                                </label>
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator icon-triangle-n"></span>
                                </a>
                                <span id="selectedActionsList" class="selectedActions hidden">
                                    <a href="" class="download">
                                        <img class="svg" alt=""  src="{{ URL::asset('files/image/download.svg')}}" >Download
                                    </a>
                                </span>
                            </div>
                        </th>

                        <th id="headerSize" class="column-size">
                            <a class="size sort columntitle" data-sort="size">
                                <span>Size</span>
                                <span class="sort-indicator hidden icon-triangle-s"></span>
                            </a>
                        </th>
                        <th id="headerDate" class="column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Modified</span>
                                <span class="sort-indicator hidden icon-triangle-s"></span>
                            </a>
                            <span class="selectedActions hidden">
                                <a href="" class="delete-selected">Delete
                                    <img class="svg" alt="" src="{{ URL::asset('files/image/delete.svg')}}">
                                </a>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <?php
                    function getTypeFile($file_name){

                        if (strpos($file_name, '.') == false) {
                            return 'file_folder.svg';

                        }else{
                           $list_split = explode(".",$file_name);
                           $type = $list_split[count($list_split)-1];
                            switch ($type) {
                                case "png":
                                    return "application-file.svg";
                                case "svg":
                                    return "application-file.svg";
                                case "pdf":
                                    return "application-pdf.svg";
                                case "mp3":
                                    return "application-office.svg";
                                case "doc":
                                    return "application-office.svg";
                                case "docx":
                                    return "application-office.svg";
                                case "opt":
                                    return "application-office.svg";
                                default:
                                    return "application-file.svg";
                            }
                        }
                        return ;
                    }
                    ?>
                    <tbody id="fileList">

                    @foreach($datas['usersharedata'] as $data)
                        <tr data-id="3" data-type="dir" data-size="36227" data-file="Documents"
                            data-mime="httpd/unix-directory" data-mtime="1478185893000" data-etag="581b53a5ee00a"
                            data-permissions="31" data-share-permissions="31">
                            <td class="filename ui-draggable ui-droppable">
                                <a href="#" class="action action-favorite"
                                   data-action="favorite" original-title="">
                                    <img class="svg" alt="Favorite" src="{{ URL::asset('files/image/star.svg')}}">
                                </a>
                                <input id="select-files-3" type="checkbox" class="selectCheckBox">
                                <label for="select-files-3">
                                    <div class="thumbnail" style="background-image: url({{ URL::asset('files/image')}}/{{getTypeFile($data->nameFile)}}); background-size: 32px;">
                                    </div>
                                    <span class="hidden-visually">Select</span>
                                </label>
                                <a class="name" href="">
                                <span class="nametext">
                                    <span class="innernametext">{{$data->nameFile}}</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="{{ URL::asset('files/image/rename.svg')}}">
                                    </a>
                                </span>
                                    <span class="uploadtext" currentuploads="0"></span>
                                    <span class="fileactions">
                                    <a href="#" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/download.svg')}}">
                                        <span> Download</span>
                                    </a>
                                    <a href="#" class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span> Share</span>
                                    </a>
                                    <a href="#" class="action action-share permanent" data-action="Share" original-title="">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span>{{$data->owner}}</span>
                                    </a>
                                </span>
                                </a>
                            </td>
                            <td class="filesize" style="color:rgb(160,160,160)">35 kB</td>
                            <td class="date">
                            <span class="modified" title="November 3, 2016 10:11 PM"
                                  style="color:rgb(0,0,0)">a few seconds ago
                            </span>
                                <a href="#" original-title="Delete"
                                   class="action delete icon-delete action-delete" data-action="Delete">
                                    <span class="hidden-visually">Delete</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr class="summary">
                        <td>
                            <span class="info"><span class="dirinfo">2 folders</span>
                                <span class="connector"> and </span>
                                <span class="fileinfo">1 file</span>
                                <span class="filter hidden"></span>
                            </span>
                        </td>
                        <td class="filesize">2.9 MB</td>
                        <td class="date"></td>
                    </tr>
                    </tfoot>
                </table>
                <input type="hidden" name="dir" id="dir" value="/" original-title="">
                <div id="editor"></div>
                <!-- FIXME Do not use this div in your app! It is deprecated and will be removed in the future!
                <div id="uploadsize-message" title="Upload too large">
                    <p>The files you are trying to upload exceed the maximum size for file uploads on this server.</p>
                </div>
                <div id="scanning-message">
                    <h3>
                        Files are being scanned, please wait.
                        <span id="scan-count"></span>
                    </h3>
                    <p>
                        Currently scanning
                        <span id="scan-current"></span>
                    </p>
                </div>
            </div>
            <div id="app-content-favorites" class="hidden viewcontainer" style="min-height: initial;">
                <div id="controls">
                    <div id="file_action_panel"></div>
                </div>
                <div id="notification"></div>
                <div id="emptycontent" class="hidden">
                    <div class="icon-starred"></div>
                    <h2>No favorites</h2>
                    <p>Files and folders you mark as favorite will show up here</p>
                </div>

                <input type="hidden" name="dir" value="" id="dir" original-title="">

                <div class="nofilterresults hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable">
                    <thead>
                    <tr>
                        <th id="headerName" class="hidden column-name">
                            <div id="headerName-container">
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator"></span>
                                </a>
                            </div>
                        </th>
                        <th id="headerSize" class="hidden column-size">
                            <a class="size sort columntitle" data-sort="size">
                                <span>Size</span>
                                <span class="sort-indicator"></span>
                            </a>
                        </th>
                        <th id="headerDate" class="hidden column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Modified</span>
                                <span class="sort-indicator"></span>
                            </a>
                            <span class="selectedActions">
                                <a href="" class="delete-selected">Delete
                                    <img class="svg" alt="Delete" src="img/delete.svg">
                                </a>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="fileList">
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div id="app-content-sharingin" class="hidden viewcontainer" style="min-height: initial;">
                <div id="controls">
                    <div id="file_action_panel"></div>
                </div>
                <div id="notification"></div>
                <div id="emptycontent" class="hidden"></div>
                <input type="hidden" name="dir" value="" id="dir" original-title="">
                <div class="nofilterresults hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable">
                    <thead>
                    <tr>
                        <th id="headerName" class="hidden column-name">
                            <div id="headerName-container">
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator"></span>
                                </a>
                            </div>
                        </th>
                        <th id="headerDate" class="hidden column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Share time</span>
                                <span class="sort-indicator"></span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="fileList">
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div id="app-content-sharingout" class="hidden viewcontainer" style="min-height: initial;">
                <div id="controls">
                    <div id="file_action_panel"></div>
                </div>
                <div id="notification"></div>
                <div id="emptycontent" class="hidden"></div>
                <input type="hidden" name="dir" value="" id="dir" original-title="">
                <div class="nofilterresults hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable">
                    <thead>
                    <tr>
                        <th id="headerName" class="hidden column-name">
                            <div id="headerName-container">
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator"></span>
                                </a>
                            </div>
                        </th>
                        <th id="headerDate" class="hidden column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Share time</span>
                                <span class="sort-indicator"></span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="fileList">
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div id="app-content-sharinglinks" class="hidden viewcontainer" style="min-height: initial;">
                <div id="controls">
                    <div id="file_action_panel"></div>
                </div>
                <div id="notification"></div>
                <div id="emptycontent" class="hidden"></div>
                <input type="hidden" name="dir" value="" id="dir" original-title="">
                <div class="nofilterresults hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable">
                    <thead>
                    <tr>
                        <th id="headerName" class="hidden column-name">
                            <div id="headerName-container">
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator"></span>
                                </a>
                            </div>
                        </th>
                        <th id="headerDate" class="hidden column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Share time</span>
                                <span class="sort-indicator"></span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="fileList">
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div id="app-content-trashbin" class="hidden viewcontainer" style="min-height: initial;">
                <div id="controls">
                    <div id="file_action_panel"></div>
                </div>
                <div id="notification"></div>

                <div id="emptycontent" class="hidden">
                    <div class="icon-delete"></div>
                    <h2>No deleted files</h2>
                    <p>You will be able to recover deleted files from here</p>
                </div>

                <input type="hidden" name="dir" value="" id="dir" original-title="">

                <div class="nofilterresults hidden">
                    <div class="icon-search"></div>
                    <h2>No entries found in this folder</h2>
                    <p></p>
                </div>

                <table id="filestable">
                    <thead>
                    <tr>
                        <th id="headerName" class="hidden column-name">
                            <div id="headerName-container">
                                <input type="checkbox" id="select_all_trash" class="select-all" original-title="">
                                <label for="select_all_trash">
                                    <span class="hidden-visually">Select all</span>
                                </label>
                                <a class="name sort columntitle" data-sort="name">
                                    <span>Name</span>
                                    <span class="sort-indicator"></span>
                                </a>
                                <span id="selectedActionsList" class="selectedActions">
                                    <a href="" class="undelete">
                                        <img class="svg" alt="" src="img/history.svg">Restore
                                    </a>
                                </span>
                            </div>
                        </th>
                        <th id="headerDate" class="hidden column-mtime">
                            <a id="modified" class="columntitle" data-sort="mtime">
                                <span>Deleted</span>
                                <span class="sort-indicator"></span>
                            </a>
                            <span class="selectedActions">
                                <a href="" class="delete-selected">Delete
                                    <img class="svg" alt="" src="img/delete.svg">
                                </a>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="fileList">
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div id="searchresults" class="hidden">
                <div id="status"></div>
                <table>
                    <tbody>
                    <tr class="template">
                        <td class="icon"></td>
                        <td class="info">
                            <a class="link">
                                <div class="name"></div>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- closing app-content -->

        <!-- config hints for javascript -->
        <input type="hidden" name="filesApp" id="filesApp" value="1" original-title="">
        <input type="hidden" name="usedSpacePercent" id="usedSpacePercent" value="0" original-title="">
        <input type="hidden" name="owner" id="owner" value="admin" original-title="">
        <input type="hidden" name="ownerDisplayName" id="ownerDisplayName" value="admin" original-title="">
        <input type="hidden" name="mailNotificationEnabled" id="mailNotificationEnabled" value="no" original-title="">
        <input type="hidden" name="mailPublicNotificationEnabled" id="mailPublicNotificationEnabled" value="no"
               original-title="">
        <input type="hidden" name="allowShareWithLink" id="allowShareWithLink" value="yes" original-title="">
    </div>
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