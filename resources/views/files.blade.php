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

</head>
<body id="body-user">
<header role="banner">
    <div id="header">
        <a href="http://localhost/index.php" id="owncloud" tabindex="1">
            <div class="logo-icon svg" style="background-image: url({{ URL::asset('login/image/logo-icon.svg') }})">
                <h1 class="hidden-visually">ownCloud </h1>
            </div>
        </a>

        <a href="/" class="header-appname-container menutoggle" tabindex="2">
            <h1 class="header-appname">Files </h1>
            <div class="icon-caret svg"></div>
        </a>

        <div id="logo-claim" style="display:none;"></div>
        <div id="settings" class="svg">
            <div id="expand" tabindex="6" role="link">
                <div class="avatardiv" style="display: none"></div>
                <span id="expandDisplayName">{{session('current_user')}}</span>
                <img class="svg" alt="" src="img/caret.svg">
            </div>
            <div id="expanddiv" style="">
                <ul>
                    <li>
                        <a href="/personal" title="">
                            <img class="svg" alt="" src="{{ URL::asset('files/image/personal.svg')}}">
                            Personal
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            <img class="svg" alt="" src="{{ URL::asset('files/image/help.svg')}}">
                            Help
                        </a>
                    </li>
                    <li>
                        <a id="logout" href="/logout">
                            <img class="svg" alt="" src="{{ URL::asset('login/image/logout.svg')}}">
                            Log out						</a>
                    </li>
                </ul>

            </div>
            <script>
                var count_click = 0;
                $('#expand').click(function () {
                    count_click = count_click +1;
                    if(count_click%2==0) {
                        $('#expanddiv').hide();
                    }else {
                        $('#expanddiv').show();
                    }
                })
            </script>
        </div>


        <form class="searchbox" action="#" method="post" role="search">
            <label for="searchbox" class="hidden-visually">Search </label>
            <input id="searchbox" style="background-image: url({{ URL::asset('login/image/search.svg') }})" class="svg" type="search" name="query" value="" autocomplete="off" tabindex="5"
                   original-title="">
        </form>
    </div>
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
                        <div id="new" class="button">
                            <a>New</a>
                            <ul style="display: none;">
                                <li class="icon-filetype-text svg" data-type="file" data-newname="New text file.txt">
                                    <p>Text file</p>
                                </li>
                                <li class="icon-filetype-folder svg" data-type="folder" data-newname="New folder">
                                    <p>Folder</p>
                                </li>
                            </ul>
                        </div>
                        <div id="upload" class="button" original-title="Upload (max. 513 MB)">
                            <input type="hidden" id="max_upload" name="MAX_FILE_SIZE" value="537919488"
                                   original-title="">
                            <input type="hidden" id="upload_limit" value="537919488" original-title="">
                            <input type="hidden" id="free_space" value="178767515648" original-title="">
                            <input type="hidden" class="max_human_file_size" value="(max )" original-title="">
                            <input type="file" id="file_upload_start" name="files[]" data-url="" original-title=""
                                   multiple="multiple" >
                            <label for="file_upload_start" style="background-image: url({{ URL::asset('login/image/upload.svg') }})" class="svg icon-upload">
                                <span class="hidden-visually">Upload</span>
                            </label>
                        </div>
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
                                    return "application-mp3.png";
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
                    @foreach($datas['userdata'] as $data)
                    <tr data-id="3" data-type="dir" data-size="36227" data-file="{{$data->nameFile}}"
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
                            <a class="name" href="/openfilecloud?filepath={{$data->pathFile}}">
                                <span class="nametext">
                                    <span class="innernametext">{{$data->nameFile}}</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="{{ URL::asset('files/image/rename.svg')}}">
                                    </a>
                                </span>
                                <span class="uploadtext" currentuploads="0"></span>
                                <span class="fileactions">
                                    <a href="/downloadfilecloud?filepath={{$data->pathFile}}" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/download.svg')}}">
                                        <span> Download</span>
                                    </a>
                                    <a  class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span> Share</span>
                                    </a>
                                </span>
                            </a>
                        </td>
                        <td class="filesize" style="color:rgb(160,160,160)"></td>
                        <td class="date">
                            <span class="modified" title="November 3, 2016 10:11 PM"
                                  style="color:rgb(0,0,0)">
                            </span>
                            <a href="#" original-title="Delete" style="background-image: url({{ URL::asset('files/image/delete.svg')}}"
                               class="action delete icon-delete action-delete" data-action="Delete">
                                <span class="hidden-visually">Delete</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
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
                                    <div class="thumbnail" style="background-image: url({{ URL::asset('files/image')}}/{{getTypeFile($data->nameFile)}}); background-size: 32px;"></div>
                                    <div class="thumbnail" style="background-size: 32px;"></div>
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
                            <td class="filesize" style="color:rgb(160,160,160)"></td>
                            <td class="date">
                            <span class="modified" title="November 3, 2016 10:11 PM"
                                  style="color:rgb(0,0,0)">
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
                <script>

                    $('.action-share').click(function () {
                        $('.shareDropDown').remove();
                        $(this).parent().parent().append("<div id='dropdown' class='drop shareDropDown' data-item-type='file' data-item-source='510' data-item-source-name='ownCloudUserManual.pdf'><label for='shareWith' class='hidden-visually'>Share</label><input id='shareWith' type='text' placeholder='Share with user or group …' class='ui-autocomplete-input' autocomplete='off'><input type='button' class='share_file' value='share'><span role='status' aria-live='polite' class='ui-helper-hidden-accessible'></span><span class='shareWithLoading icon-loading-small hidden'></span><ul id='shareWithList'></ul> <div id='passworderror'></div></div>")
                    });

                    $(document).delegate('.share_file', 'click', function(){
                        var usernameshare = $(this).prev().val();
                        var pathfile    = $(this).parent().parent().parent().attr('data-file');
                        var formData = {
                            usernameshare: usernameshare,
                            pathfile: pathfile,
                        }
                        console.log(usernameshare+'--'+pathfile);
                        $.ajax({

                            type: 'GET',
                            url: '/sharefile',
                            data: formData,
                            dataType: 'json',
                            success: function (data) {
                                console.log(data);

                                var dataobj = JSON.parse(data);

                                if(dataobj.code =="100"){
                                    console.log(dataobj.code);
                                    $('#passworderror').html('share success');
                                }else{
                                    $('#passworderror').html('share error');
                                }
                            },
                            error: function (data) {
                                console.log('error');
                                console.log('Error:', data);
                            }
                        });

                    });
                    $(function() {
                        $("input:file").change(function (){
                            var fileName = $(this).val();
                            console.log(fileName);
                            var formData = {
                                fileName: fileName,
                            }
                            $.ajax({

                                type: 'GET',
                                url: '/uploadfile',
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    console.log(data);
//                                    location.reload();
                                },
                                error: function (data) {
                                    console.log('error');
                                    console.log('Error:', data);
//                                    location.reload();
                                }
                            });
                        });
                    });
                </script>
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