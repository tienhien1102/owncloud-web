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
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 999; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }
</style>

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
                            <a id="link_click_new">New Folder</a>
                            <ul id="form_create" style="display: none;">

                                <li class="icon-filetype-folder svg" data-type="folder" data-newname="New folder">

                                    <input type="input" style="height:32px;margin-right: 10px" id="forlder_name_add" original-title=""><button id="create_folder" style="margin-right: 5px">create</button> <button id="cancel_folder">Cancel</button>
                                    <label >
                                        <span class="hidden-visually">Create</span>
                                    </label>
                                </li>
                            </ul>

                        </div>
                        <div class="button">
                            <form action="http://45.58.54.200/service/uploader.php" method="POST" enctype="multipart/form-data">
                                <input id="fileserviceupload" type="file" name="image" />
                                <input type="submit" style="height: 25px;"/>

                            </form>
                        </div>
                        <div class="button">
                            <input id="uploadphp" type="button" value="upload">
                        </div>

                        <script>
                           $('#link_click_new').click(function () {
                               $('#form_create').show();
                           })
                           $('#cancel_folder').click(function () {
                               $('#form_create').hide();
                           })
                        </script>

                        {{--<input type="file" id="file_upload_path" style="width: 300px;margin-left: 50px;"/>--}}
                        {{--<div id="upload" class="button">--}}

                            {{--<label for="file_upload_start" style="background-image: url({{ URL::asset('login/image/upload.svg') }})" class="svg icon-upload">--}}
                                {{--<span class="hidden-visually">Upload</span>--}}
                            {{--</label>--}}
                        {{--</div>--}}


                        <div id="uploadprogresswrapper">
                            <div id="uploadprogressbar"></div>
                            <button class="stop icon-close" style="display:none">
                                <span class="hidden-visually">Cancel upload	</span>
                            </button>
                        </div>
                        <script>
                            $("form").submit(function(){
                                 var filename = $('#fileserviceupload').val();
                                filename = filename.replace('C:\\fakepath\\','');
                                localStorage.setItem('filename',filename);

//                                alert(localStorage.getItem('filename'));
                            });
                            $('#uploadphp').click(function () {
                                filename =  localStorage.getItem('filename');
                                if(filename==''){
                                    alert('path file incorrect!')
                                    return;
                                }
                                var formData = {
                                    fileName: filename,
                                }
                                $.ajax({

                                type: 'GET',
                                url: '/uploadfile',
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    console.log(data);
                                    location.reload();
                                },
                                error: function (data) {
                                    console.log('error');
                                    console.log('Error:', data);
                                    location.reload();
                                }
                            });

                            })
                        </script>
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

                     function getFileExtension($file_name){
                         $list_split = explode(".",$file_name);
                         $type = $list_split[count($list_split)-1];
                         return $type;
                     }
                    function getTypeFile($file_name, $typefile){

                        if ($typefile=="Collection") {
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
                    <tr data-id="3" data-type="dir" data-size="36227" data-file="{{$data['pathFile']}}"
                        data-mime="httpd/unix-directory" data-mtime="1478185893000" data-etag="581b53a5ee00a"
                        data-permissions="31" data-share-permissions="31">
                        <td class="filename ui-draggable ui-droppable">
                            <a href="#" class="action action-favorite"
                               data-action="favorite" original-title="">
                                <img class="svg" alt="Favorite" src="{{ URL::asset('files/image/star.svg')}}">
                            </a>
                            <input id="select-files-3" type="checkbox" class="selectCheckBox">
                            <label for="select-files-3">

                                @if (in_array(getFileExtension($data['nameFile']), array("png","jpg","gif")))
                                    {{--<div class="thumbnail" style="background-image: url('http://45.76.151.128/owncloud/data/{{session('current_user') }}/{{ $data->pathFile}}'); background-size: 32px;"> </div>--}}
                                    <div class="thumbnail" style="background-image: url({{ URL::asset('files/image/icon_image.png')}}); background-size: 32px;"> </div>
                                @else
                                    <div class="thumbnail" style="background-image: url({{ URL::asset('files/image')}}/{{getTypeFile($data['nameFile'],$data['typeFile'])}}); background-size: 32px;"> </div>
                                @endif


                                <span class="hidden-visually">Select</span>
                            </label>
                            @if($data['typeFile'] == 'Collection')
                            <a class="name" href="/openfoldercloud?folder={{$data['pathFile']}}">
                                <span class="nametext">
                                    <span class="innernametext">{{$data['nameFile']}}</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="{{ URL::asset('files/image/rename.svg')}}">
                                    </a>
                                </span>
                                <span class="uploadtext" currentuploads="0"></span>
                                <span class="fileactions">
                                    <a href="/downloadfilecloud?filepath={{$data['pathFile']}}" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/download.svg')}}">
                                        <span> Download</span>
                                    </a>
                                    <a  class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span> Share</span>
                                    </a>
                                </span>
                            </a>
                            @else
                                <a class="name" href="/openfilecloud?filepath={{$data['pathFile']}}">
                                <span class="nametext">
                                    <span class="innernametext">{{$data['nameFile']}}</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="{{ URL::asset('files/image/rename.svg')}}">
                                    </a>
                                </span>
                                    <span class="uploadtext" currentuploads="0"></span>
                                    <span class="fileactions">
                                    <a href="/downloadfilecloud?filepath={{$data['pathFile']}}" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/download.svg')}}">
                                        <span> Download</span>
                                    </a>
                                    <a  class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span> Share</span>
                                    </a>
                                   <a  onclick="getComment('{{$data['pathFile']}}')" class="action " data-action="Share">
                                        <img class="svg" alt="">
                                        <span> Comment</span>
                                    </a>

                                </span>
                                </a>
                            @endif

                        </td>
                        <td class="filesize" style="color:rgb(160,160,160)"></td>
                        <td class="date">
                            <span class="modified" title="November 3, 2016 10:11 PM"
                                  style="color:rgb(0,0,0)">
                            </span>
                            <a onclick="deletefilefolder('{{$data['pathFile']}}')" original-title="Delete" style="background-image: url({{ URL::asset('files/image/delete.svg')}}"
                               class="action delete icon-delete action-delete" data-action="Delete">
                                <span class="hidden-visually" >Delete</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <script>
//

                        // When the user clicks on <span> (x), close the modal

                        var filecomment_public = ''

                        function getComment(filecomment) {
                              var modal = document.getElementById('myModal');
                              modal.style.display = "block";
                            $('.modal-body').html('');
                              filecomment_public = filecomment
                            var formData = {
                                filecomment: filecomment_public,
                            }
                            $.ajax({

                                type: 'GET',
                                url: '/commentfiledata',
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    var dataobj = JSON.parse(data);
                                    if(dataobj.code=="200"){
                                       var comments =  dataobj.message;
                                       for(var i =0; i< comments.length;i++){
                                           $('.modal-body').append('<p>'+'<b>'+comments[i].username+'</b> :'+comments[i].comment+'</p>');
                                       }

                                    }
                                    console.log(data);

                                },
                                error: function (data) {
                                    console.log('error');
                                    console.log('Error:', data);

                                }
                            });
                            $('.close').click(function () {
                                var modal = document.getElementById('myModal');
                                modal.style.display = "none";
                            })
                        }

                        function addcomment() {
                            var formData = {
                                filecomment: filecomment_public,
                                comment_content : $('#comment_textarea').val()
                            }
//                            console.log( $('#comment_textarea').val())
                            if($('#comment_textarea').val()==""){
                                alert('content comment not null')
                                return;
                            }
                            $.ajax({

                                type: 'GET',
                                url: '/addcommentdata',
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    var dataobj = JSON.parse(data);
                                    if(dataobj.code=="200"){
                                        $('.modal-body').append('<p><b>{{session('current_user')}}</b> :'+$('#comment_textarea').val()+'</p>');
                                    }else {
                                        $('.modal-body').append('<p style="color:red">comment error!</p>')
                                    }
                                    $('#comment_textarea').val('')
                                    console.log(data);

                                },
                                error: function (data) {
                                    console.log('error');
                                    console.log('Error:', data);
                                    $('#comment_textarea').val('')

                                }
                            });
                        }
                    </script>
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
                                    <div class="thumbnail" style="background-image: url({{ URL::asset('files/image')}}/{{getTypeFile($data['nameFile'],'')}}); background-size: 32px;"></div>
                                    <div class="thumbnail" style="background-size: 32px;"></div>
                                    <span class="hidden-visually">Select</span>
                                </label>
                                <a class="name" href="">
                                <span class="nametext">
                                    <span class="innernametext">{{$data->filepath}}</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="{{ URL::asset('files/image/rename.svg')}}">
                                    </a>
                                </span>
                                    <span class="uploadtext" currentuploads="0"></span>
                                    <span class="fileactions">
                                    <a href="#" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/download.svg')}}">
                                        <span> </span>
                                    </a>
                                    <a href="#" class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="{{ URL::asset('files/image/share.svg')}}">
                                        <span> </span>
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
//                        console(pathfile);
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
                        $("#upload").click(function (){
                            var fileName = $('#file_upload_path').val();
                            alert(fileName);
                           if(fileName==''){
                               alert('path file incorrect!')
                               return;
                           }
                            var formData = {
                                image: fileName,
                            }
                            var file_data = $('#file_upload_path').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('file', file_data);
                            alert(form_data);
                            $.ajax({
                                url: 'uploadphpservice', // point to server-side PHP script
                                dataType: 'text',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,
                                type: 'post',
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
//                            $.ajax({
//
//                                type: 'GET',
//                                url: '/uploadfile',
//                                data: formData,
//                                dataType: 'json',
//                                success: function (data) {
//                                    console.log(data);
//                                    location.reload();
//                                },
//                                error: function (data) {
//                                    console.log('error');
//                                    console.log('Error:', data);
//                                    location.reload();
//                                }
//                            });
                        });
                    });
                    function deletefilefolder(pathfile) {

                        var formData = {
                            pathfile: pathfile,
                        }
                        $.ajax({

                            type: 'GET',
                            url: '/deletefilefolder',
                            data: formData,
                            dataType: 'json',
                            success: function (data) {
                                console.log(data);
                                location.reload();
                            },
                            error: function (data) {
                                console.log('error');
                                console.log('Error:', data);
                                location.reload();
                            }
                        });
                    }
                    $('#create_folder').click(function () {
                        var folder_name = $('#forlder_name_add').val();
                       if(folder_name==''){
                           return
                       }else {
                           var formData = {
                               foldername: folder_name,
                           }
                           $.ajax({

                               type: 'GET',
                               url: '/createfolder',
                               data: formData,
                               dataType: 'json',
                               success: function (data) {
                                   console.log(data);
                                   location.reload();
                               },
                               error: function (data) {
                                   console.log('error');
                                   console.log('Error:', data);
                                   location.reload();
                               }
                           });
                       }
                    })


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

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">×</span>
                    <h2>Comment</h2>
                </div>
                <div class="modal-body">

                </div>
                <div class="container">
                    <textarea id="comment_textarea" placeholder="type comment" style="width: 75%; margin-left: 10px;"></textarea><span><button style="float: right; margin-top: 15px;margin-right: 10px;" onclick="addcomment()">Add Comment</button></span>

                </div>

                <div class="modal-footer">
                </div>

            </div>

        </div>


        <script>

            // Get the modal


            // Get the button that opens the modal

        </script>
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

</div>
</div>
        <script src="{{ URL::asset('files/js/inject_jq.js')}}"></script>
</body>
</html>