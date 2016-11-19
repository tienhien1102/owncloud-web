@extends('layouts.master')
@section('content')
    <header role="banner">
        <div id="header">
            <a href="http://localhost/index.php" id="owncloud" tabindex="1">
                <div class="logo-icon svg">
                    <h1 class="hidden-visually">ownCloud </h1>
                </div>
            </a>

            <a href="#" class="header-appname-container menutoggle" tabindex="2">
                <h1 class="header-appname">Files </h1>
                <div class="icon-caret svg"></div>
            </a>

            <div id="logo-claim" style="display:none;"></div>
            <div id="settings" class="svg">
                <div id="expand" tabindex="6" role="link">
                    <div class="avatardiv" style="display: none"></div>
                    <span id="expandDisplayName">admin</span>
                    <img class="svg" alt="" src="img/caret.svg">
                </div>
                <div id="expanddiv" style="">
                    <ul>
                        <li>
                            <a href=""><img class="svg" alt="" src="img/personal.svg">Personal </a>
                        </li>
                        <li>
                            <a href=""><img class="svg" alt="" src="img/users.svg">Users </a>
                        </li>
                        <li>
                            <a href=""><img class="svg" alt="" src="img/admin.svg">Admin </a>
                        </li>
                        <li>
                            <a href=""><img class="svg" alt="" src="img/help.svg">Help </a>
                        </li>
                        <li>
                            <a id="logout" href=""><img class="svg" alt="" src="img/logout.svg">Log out </a>
                        </li>
                    </ul>
                </div>
            </div>

            <form class="searchbox" action="#" method="post" role="search">
                <label for="searchbox" class="hidden-visually">Search </label>
                <input id="searchbox" class="svg" type="search" name="query" value="" autocomplete="off" tabindex="5"
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
            <div id="app-navigation">
                <ul class="with-icon">
                    <li data-id="files" class="nav-files active">
                        <a href="#" class="nav-icon-files svg">All files </a>
                    </li>
                    <li data-id="favorites" class="nav-favorites">
                        <a href="#" class="nav-icon-favorites svg">Favorites </a>
                    </li>
                    <li data-id="sharingin" class="nav-sharingin">
                        <a href="#" class="nav-icon-sharingin svg">Shared with you </a>
                    </li>
                    <li data-id="sharingout" class="nav-sharingout">
                        <a href="#" class="nav-icon-sharingout svg">Shared with others </a>
                    </li>
                    <li data-id="sharinglinks" class="nav-sharinglinks">
                        <a href="#" class="nav-icon-sharinglinks svg">Shared by link </a>
                    </li>
                    <li data-id="trashbin" class="nav-trashbin">
                        <a href="#" class="nav-icon-trashbin svg">Deleted files </a>
                    </li>
                </ul>
                <div id="app-settings">
                    <div id="app-settings-header">
                        <button class="settings-button" data-apps-slide-toggle="#app-settings-content">
                            Settings
                        </button>
                    </div>
                    <div id="app-settings-content">
                        <h2><label for="webdavurl">WebDAV</label></h2>
                        <input id="webdavurl" type="text" readonly="readonly" value="" original-title="">
                        <em>Use this address to <a href="" target="_blank">access your Files via WebDAV</a></em>
                    </div>
                </div>
            </div>

            <div id="app-content" style="transition: all 0.3s ease;">
                <div id="app-navigation-toggle" class="icon-menu" style="display: none;"></div>
                <div id="app-content-files" class="viewcontainer has-favorites" style="min-height: initial;">
                    <div id="controls" style="width: 1073px; min-width: 1073px;">
                        <div class="breadcrumb">
                            <div class="crumb svg last" data-dir="/">
                                <a href=""><img class="svg" src="img/home.svg" alt="Home"></a>
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
                                       multiple="multiple">
                                <label for="file_upload_start" class="svg icon-upload">
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
                                        <img class="svg" alt="" src="img/download.svg">Download
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
                                    <img class="svg" alt="" src="img/delete.svg">
                                </a>
                            </span>
                            </th>
                        </tr>
                        </thead>
                        <tbody id="fileList">
                        <tr data-id="3" data-type="dir" data-size="36227" data-file="Documents"
                            data-mime="httpd/unix-directory" data-mtime="1478185893000" data-etag="581b53a5ee00a"
                            data-permissions="31" data-share-permissions="31">
                            <td class="filename ui-draggable ui-droppable">
                                <a href="#" class="action action-favorite"
                                   data-action="favorite" original-title="">
                                    <img class="svg" alt="Favorite" src="img/star.svg">
                                </a>
                                <input id="select-files-3" type="checkbox" class="selectCheckBox">
                                <label for="select-files-3">
                                    <div class="thumbnail" style="background-image:
                                url(img/file_folder.svg); background-size: 32px;">
                                    </div>
                                    <span class="hidden-visually">Select</span>
                                </label>
                                <a class="name" href="">
                                <span class="nametext">
                                    <span class="innernametext">Documents</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="img/rename.svg">
                                    </a>
                                </span>
                                    <span class="uploadtext" currentuploads="0"></span>
                                    <span class="fileactions">
                                    <a href="#" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="img/download.svg">
                                        <span> Download</span>
                                    </a>
                                    <a href="#" class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="img/share.svg">
                                        <span> Share</span>
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
                        <tr data-id="5" data-type="dir" data-size="678556" data-file="Photos"
                            data-mime="httpd/unix-directory" data-mtime="1478185895000"
                            data-etag="581b53a716ec6" data-permissions="31" data-share-permissions="31">
                            <td class="filename ui-draggable ui-droppable">
                                <a href="#" class="action action-favorite"
                                   data-action="favorite" original-title="">
                                    <img class="svg" alt="Favorite" src="img/star.svg">
                                </a>
                                <input id="select-files-5" type="checkbox" class="selectCheckBox">
                                <label for="select-files-5">
                                    <div class="thumbnail"
                                         style="background-image:url(img/file_folder.svg); background-size: 32px;">
                                    </div>
                                    <span class="hidden-visually">Select</span>
                                </label>
                                <a class="name" href="">
                                <span class="nametext">
                                    <span class="innernametext">Photos</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="img/rename.svg">
                                    </a>
                                </span>
                                    <span class="uploadtext" currentuploads="0"></span>
                                    <span class="fileactions">
                                    <a href="#" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="img/download.svg">
                                        <span> Download</span>
                                    </a>
                                    <a href="#" class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="img/share.svg">
                                        <span> Share</span>
                                    </a>
                                </span>
                                </a>
                            </td>
                            <td class="filesize" style="color:rgb(160,160,160)">663 kB</td>
                            <td class="date">
                                <span class="modified" title="November 3, 2016 10:11 PM" style="color:rgb(0,0,0)">a few seconds ago</span>
                                <a href="#" original-title="Delete" class="action delete icon-delete action-delete"
                                   data-action="Delete">
                                    <span class="hidden-visually">Delete</span>
                                </a>
                            </td>
                        </tr>
                        <tr data-id="9" data-type="file" data-size="2307164" data-file="ownCloud_User_Manual.pdf"
                            data-mime="application/pdf" data-mtime="1478185895000"
                            data-etag="df24c98cc0d5cc841d3706518acb0197" data-permissions="27" data-share-permissions="19">
                            <td class="filename ui-draggable">
                                <a href="#" class="action action-favorite" data-action="favorite" original-title="">
                                    <img class="svg" alt="Favorite" src="img/star.svg">
                                </a>
                                <input id="select-files-9" type="checkbox" class="selectCheckBox">
                                <label for="select-files-9">
                                    <div class="thumbnail"
                                         style="background-image:url(img/application-pdf.svg); background-size: 32px;">
                                    </div>
                                    <span class="hidden-visually">Select</span>
                                </label>
                                <a class="name" href="">
                                <span class="nametext">
                                    <span class="innernametext">ownCloud_User_Manual</span>
                                    <span class="extension">.pdf</span>
                                    <a href="#" class="action action-rename" data-action="Rename">
                                        <img class="svg" alt="Rename" src="img/rename.svg">
                                    </a>
                                </span>
                                    <span class="fileactions">
                                    <a href="#" class="action action-download" data-action="Download">
                                        <img class="svg" alt="" src="img/download.svg">
                                        <span> Download</span>
                                    </a>
                                    <a href="#" class="action action-versions" data-action="Versions">
                                        <img class="svg" alt="" src="img/history.svg">
                                        <span> Versions</span>
                                    </a>
                                    <a href="#" class="action action-share" data-action="Share">
                                        <img class="svg" alt="" src="img/share.svg"><span> Share</span>
                                    </a>
                                </span>
                                </a>
                            </td>
                            <td class="filesize" style="color:rgb(155,155,155)">2.2 MB</td>
                            <td class="date">
                                <span class="modified" title="November 3, 2016 10:11 PM" style="color:rgb(0,0,0)">a few seconds ago</span>
                                <a href="#" original-title="Delete"
                                   class="action delete icon-delete action-delete" data-action="Delete">
                                    <span class="hidden-visually">Delete</span>
                                </a>
                            </td>
                        </tr>
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
                    <!-- FIXME Do not use this div in your app! It is deprecated and will be removed in the future! -->
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
    <script src="./file_files/inject_jq.js"></script>