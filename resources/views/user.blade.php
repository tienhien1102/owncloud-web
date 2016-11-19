{{--@include('layouts.master')--}}
{{--@section('content')--}}
<html>
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
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/styles.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/apps.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/colorbox.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/firstrunwizard.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/fixes.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/fonts.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/header.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/icons.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/jquery.ocdialog.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/jquery-tipsy.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/jquery-ui.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/jquery-ui-fixes.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/mediaelementplayer.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/mobile(1).css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/mobile.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/multiselect.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/settings.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/share.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/slideshow.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/styles.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/stylesheet.css')}}" media="screen">
    <link rel="stylesheet"   href="{{ URL::asset('ownCloud_files/css/versions.css')}}" media="screen">

    <script src="{{ URL::asset('ownCloud_files/js/jquery-2.1.4.min.js')}}"></script>

    <script src="{{ URL::asset('ownCloud_files/js/ace.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/apps.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/avatar.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/backgroundjobs.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/compatibility.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/config.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/deleteHandler.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/editor.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/eventsource.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/external.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/filter.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/firstrunwizard.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/groups.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery.avatar.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery.colorbox.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery.mousewheel-3.1.1.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery.ocdialog.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery-migrate.min.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery-tipsy.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/jquery-ui.custom.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/js.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/l10n.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/md5.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/moment-with-locales.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/multiselect.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/oc.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/oc-dialogs.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/oc-requesttoken.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/octemplate.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/placeholder.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/placeholders.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/previewplugin.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/public.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/search.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/share.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/singleselect.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/slideshow.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/snap.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/underscore.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/users.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/versions.js')}}"></script>
    <script src="{{ URL::asset('ownCloud_files/js/viewer.js')}}"></script>


    {{--<script src="{{ URL::asset('ownCloud_files/js/oc.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery-migrate.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery-ui.custom.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/underscore.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/moment-with-locales.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/handlebars.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/md5.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/placeholders.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery-tipsy.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/compatibility.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.ocdialog.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/oc-dialogs.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/js.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/l10n.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/octemplate.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/eventsource.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/config.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/search.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/oc-requesttoken.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/apps.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/snap.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/placeholder.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.avatar.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/avatar.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/backgroundjobs.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/previewplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/share.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/share(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/external.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/editor.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/ace.js')}}"></script>--}}

    {{--<script src="{{ URL::asset('ownCloud_files/js/versions.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/viewer.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.colorbox.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/firstrunwizard.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/activate.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.mousewheel-3.1.1.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/slideshow.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/public.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/app.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/file-upload.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.iframe-transport.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery.fileupload.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/jquery-visibility.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/filesummary.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/breadcrumb.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/filelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/search(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/favoritesfilelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/tagsplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/favoritesplugin.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/handlebars.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/app(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/sharedfilelist.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/app(2).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/filelist(1).js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/fileactions.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/files.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/navigation.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('ownCloud_files/js/keyboardshortcuts.js')}}"></script>--}}




    <title>Mangasoft - @yield('title')</title>
</head>
<body>
    <noscript>&lt;div id="nojavascript"&gt;&lt;div&gt;This application requires JavaScript for correct operation. Please &lt;a href="http://enable-javascript.com/" target="_blank"&gt;enable JavaScript&lt;/a&gt; and reload the page.&lt;/div&gt;&lt;/div&gt;</noscript>
    <div id="notification-container">
        <div id="notification"></div>
        <div id="update-notification" style="display: inline;"><a href="https://doc.owncloud.org/server/8.0/admin_manual/maintenance/upgrade.html">ownCloud 8.0.14 is available. Get more information on how to update.</a></div>
    </div>
    <header><div id="header">
            <a href="http://45.76.151.128/owncloud/index.php" title="" id="owncloud" tabindex="-1">
                <div class="logo-icon svg">
                    <h1 class="hidden-visually">
                        ownCloud					</h1>
                </div>
            </a>

            <a href="http://45.76.151.128/owncloud/index.php/settings/users#" class="menutoggle" tabindex="2">
                <h1 class="header-appname">
                    Apps				</h1>
                <div class="icon-caret svg"></div>
            </a>

            <div id="logo-claim" style="display:none;"></div>
            <div id="settings" class="svg">
                <div id="expand" tabindex="4" role="link">
                    <div class="avatardiv" style="display: none">
                    </div>
                    <span id="expandDisplayName">admin</span>
                    <img class="svg" alt="" src="./ownCloud_files/caret.svg">
                </div>
                <div id="expanddiv">
                    <ul>
                        <li>
                            <a href="http://45.76.151.128/owncloud/index.php/settings/personal" title="">
                                <img class="svg" alt="" src="./ownCloud_files/personal.svg">
                                Personal						</a>
                        </li>
                        <li>
                            <a href="http://45.76.151.128/owncloud/index.php/settings/users" title="" class="active">
                                <img class="svg" alt="" src="./ownCloud_files/users.svg">
                                Users						</a>
                        </li>
                        <li>
                            <a href="http://45.76.151.128/owncloud/index.php/settings/admin" title="">
                                <img class="svg" alt="" src="./ownCloud_files/admin.svg">
                                Admin						</a>
                        </li>
                        <li>
                            <a href="http://45.76.151.128/owncloud/index.php/settings/help" title="">
                                <img class="svg" alt="" src="./ownCloud_files/help.svg">
                                Help						</a>
                        </li>
                        <li>
                            <a id="logout" href="http://45.76.151.128/owncloud/index.php?logout=true&amp;requesttoken=7rNfa72di99gJOZf95.qyiLhnDTWGh">
                                <img class="svg" alt="" src="./ownCloud_files/logout.svg">
                                Log out						</a>
                        </li>
                    </ul>
                </div>
            </div>

            <form class="searchbox" action="http://45.76.151.128/owncloud/index.php/settings/users#" method="post">
                <label for="searchbox" class="hidden-visually">
                    Search				</label>
                <input id="searchbox" class="svg" type="search" name="query" value="" autocomplete="off" tabindex="3" original-title="">
            </form>
        </div></header>

    <nav><div id="navigation" class="menu" style="display: none;">
            <div id="apps" class="svg">
                <ul>
                    <li data-id="files_index">
                        <a href="http://45.76.151.128/owncloud/index.php/apps/files" title="">
                            <img class="app-icon svg" alt="" src="./ownCloud_files/files.svg">
                            <div class="icon-loading-dark" style="display:none;"></div>
                            <span>
								Files							</span>
                        </a>
                    </li>
                    <li data-id="activity">
                        <a href="http://45.76.151.128/owncloud/index.php/apps/activity/" title="">
                            <img class="app-icon svg" alt="" src="./ownCloud_files/activity.svg">
                            <div class="icon-loading-dark" style="display:none;"></div>
                            <span>
								Activity							</span>
                        </a>
                    </li>
                    <li data-id="gallery_index">
                        <a href="http://45.76.151.128/owncloud/index.php/apps/gallery/" title="">
                            <img class="app-icon svg" alt="" src="./ownCloud_files/gallery.svg">
                            <div class="icon-loading-dark" style="display:none;"></div>
                            <span>
								Pictures							</span>
                        </a>
                    </li>

                    <!-- show "More apps" link to app administration directly in app navigation, as last entry -->
                    <li id="apps-management">
                        <a href="http://45.76.151.128/owncloud/index.php/settings/apps" title="">
                            <img class="app-icon svg" alt="" src="./ownCloud_files/apps.svg">
                            <div class="icon-loading-dark" style="display:none;"></div>
                            <span>
								Apps							</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div></nav>

    <div id="content-wrapper">
        <div id="content" class="app-settings">

            <div id="app-navigation">
                <ul id="usergrouplist">
                    <!-- Add new group -->

                    <li id="newgroup-init">
                        <a href="#">
                            <span>Add Group</span>
                        </a>
                    </li>
                    <li id="newgroup-form" style="display: none">
                        <form>
                            <input type="text" id="newgroupname" placeholder="Group..." original-title="">
                            <input type="button"  onclick="addNewGroup($('#newgroupname').val())" class="button icon-add svg" value="Add" original-title="">
                        </form>
                    </li>
                    <!-- Everyone -->
                    <li id="everyonegroup" data-gid="_everyone" data-usercount="" class="isgroup">
                        <a href="http://45.76.151.128/owncloud/index.php/settings/users#">
			            <span class="groupname"> Everyone </span>
                        </a>
                        <span class="utils">
			                <span class="usercount" id="everyonecount">7</span>
		                </span>
                    </li>

                    <!-- The Admin Group -->
                    <li data-gid="admin" data-usercount="3" class="isgroup">
                        <a href="http://45.76.151.128/owncloud/index.php/settings/users#"><span class="groupname">Admins</span></a>
                        <span class="utils">
				             <span class="usercount">3</span>
			            </span>
                    </li>

                    <!--List of Groups-->

                    @foreach($results['listgroup'] as $group)
                    <li data-gid="nguyenthoai19.9.94@gmail.com@gh" data-usercount="3" class="isgroup">
                        <a href="http://45.76.151.128/owncloud/index.php/settings/users#" class="dorename">
                            <span class="groupname">{{$group->group}}</span>
                        </a>
                        <span class="utils">
				            <span class="usercount">3</span>
				                <a href="http://45.76.151.128/owncloud/index.php/settings/users#" class="action delete" original-title="Delete">
					            <img src="./ownCloud_files/delete.svg" class="svg">
				                </a>
			            </span>
                    </li>
                    @endforeach
                </ul>
                <div id="app-settings">
                    <div id="app-settings-header">
                        <button class="settings-button" tabindex="0" data-apps-slide-toggle="#app-settings-content"></button>
                    </div>
                    <div id="app-settings-content">
                        <div class="quota">
                            <!-- Default storage -->
                            <span>Default Quota</span>
                            <select id="default_quota" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" data-tipsy-gravity="s">
                                <option selected="selected" value="none">
                                    Unlimited			</option>
                                <option value="1 GB">
                                    1 GB					</option>
                                <option value="5 GB">
                                    5 GB					</option>
                                <option value="10 GB">
                                    10 GB					</option>
                                <option data-new="" value="other">
                                    Other				...
                                </option>
                            </select>
                        </div>

                        <div id="userlistoptions">
                            <p>
                                <input type="checkbox" name="StorageLocation" value="StorageLocation" id="CheckboxStorageLocation" original-title="">
                                <label for="CheckboxStorageLocation">
                                    Show storage location					</label>
                            </p>
                            <p>
                                <input type="checkbox" name="LastLogin" value="LastLogin" id="CheckboxLastLogin" original-title="">
                                <label for="CheckboxLastLogin">
                                    Show last log in					</label>
                            </p>
                            <p>
                                <input type="checkbox" name="UserBackend" value="UserBackend" id="CheckboxUserBackend" original-title="">
                                <label for="CheckboxUserBackend">
                                    Show user backend					</label>
                            </p>
                            <p>
                                <input type="checkbox" name="MailOnUserCreate" value="MailOnUserCreate" id="CheckboxMailOnUserCreate" original-title="">
                                <label for="CheckboxMailOnUserCreate">
                                    Send email to new user					</label>
                            </p>
                            <p>
                                <input type="checkbox" name="EmailAddress" value="EmailAddress" id="CheckboxEmailAddress" original-title="">
                                <label for="CheckboxEmailAddress">
                                    Show email address					</label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="app-content" style="transition: all 0.3s ease;"><div id="app-navigation-toggle" class="icon-menu" style="display:none;"></div>
                <div id="controls">
                    <form id="newuser" autocomplete="off">
                        <input id="newusername" type="text" placeholder="Username" autocomplete="off" autocapitalize="off" autocorrect="off" original-title="">
                        <input type="password" id="newuserpassword" placeholder="Password" autocomplete="off" autocapitalize="off" autocorrect="off" original-title="">
                        <input id="newemail" type="text" style="display:none" placeholder="E-Mail" autocomplete="off" autocapitalize="off" autocorrect="off" original-title="">
                        <span><div class="multiselect button" style="min-width: 100px;"><span>Groups</span><span>▾</span></div></span><select class="groupsselect" id="newusergroups" data-placeholder="groups" title="Groups" multiple="multiple" data-msid="0" style="display: none;">
                            <option value="admin">admin</option>
                            <option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option>
                            <option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option>
                            <option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option>
                            <option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option>
                            <option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option>
                            <option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option>
                            <option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option>
                        </select>
                        <input type="submit" class="button" value="Create" original-title="">
                    </form>
                    <form autocomplete="off" id="usersearchform">
                        <input type="text" class="input userFilter" placeholder="Search Users" original-title="">
                    </form>
                </div>
                <table id="userlist" class="hascontrols grid" data-groups="[&quot;nguyenthoai19.9.94@gmail.com@gh&quot;,&quot;nguyenthoai19.9.94@gmail.com@groupnametest&quot;,&quot;nguyenthoai19.9.94@gmail.com@qt&quot;,&quot;nguyenthoai19.9.94@gmail.com@x4&quot;,&quot;nguyenthoai19.9.94@gmail.com@xx2&quot;,&quot;phamvanbinh1909@gmail.com@haizz&quot;,&quot;nguyenthoai19.9.94@gmail.com@x5&quot;,&quot;admin&quot;]">
                    <thead>
                    <tr>
                        <th id="headerAvatar"></th>
                        <th id="headerName">Username</th>
                        <th id="headerDisplayName">Full Name</th>
                        <th id="headerPassword">Password</th>
                        <th class="mailAddress">Email</th>
                        <th id="headerGroups">Groups</th>
                        <th id="headerSubAdmins">Group Admin for</th>
                        <th id="headerQuota">Quota</th>
                        <th class="storageLocation">Storage Location</th>
                        <th class="userBackend">User Backend</th>
                        <th class="lastLogin">Last Login</th>
                        <th id="headerRemove">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- the following <tr> is used as a template for the JS part -->

                    <tr style="display:none">
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(85, 246, 184); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">X</div></td>
                        <td class="name"></td>
                        <td class="displayName"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"></td>
                        <td class="subadmins"></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation"></td>
                        <td class="userBackend"></td>
                        <td class="lastLogin" original-title=""></td>
                        <td class="remove"></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(246, 174, 85); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">A</div></td>
                        <td class="name">admin</td>
                        <td class="displayName"><span>admin</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" original-title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups">
                            <span>
                                <div class="multiselect button" style="min-width: 100px;">
                                    <span>nguyenthoai19.9.94@gmail.com@gh, admin</span>
                                    <span>▾</span>
                                </div>
                                {{--<ul class="multiselectoptions down" style="top: 53px; left: 516px; width: 215px; max-height: 493px;"><li class="checked"><input type="checkbox" id="ms14-option-admin" checked="checked"><label for="ms14-option-admin">admin</label></li><li class="checked"><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@gh" checked="checked"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</label></li><li><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@groupnametest"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</label></li><li><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@qt"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</label></li><li><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@x4"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</label></li><li><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@x5"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</label></li><li><input type="checkbox" id="ms14-option-nguyenthoai19.9.94@gmail.com@xx2"><label for="ms14-option-nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</label></li><li><input type="checkbox" id="ms14-option-phamvanbinh1909@gmail.com@haizz"><label for="ms14-option-phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</label></li><li class="creator">+ add group</li></ul>--}}
                            </span>
                            <select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="1" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh" selected="selected">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin" selected="selected">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="2" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/admin</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(85, 246, 134); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">B</div></td>
                        <td class="name">binhpham</td>
                        <td class="displayName"><span>binhpham</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" original-title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>nguyenthoai19.9.94@gmail.com@x4</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="3" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4" selected="selected">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="4" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/binhpham</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(246, 88, 85); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">H</div></td>
                        <td class="name">hainv</td>
                        <td class="displayName"><span>hainv</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="5" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="6" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/hainv</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">never</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(241, 246, 85); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">T</div></td>
                        <td class="name">nguyenthoai19.9.94@gmail.com</td>
                        <td class="displayName"><span>thoainm</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span>nguyenthoai19.9.94@gmail.com</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>nguyenthoai19.9.94@gmail.com@gh, nguyenthoai19.9.94@gmail.com@groupnametest, nguyenthoai19.9.94@gmail.com@qt, nguyenthoai19.9.94@gmail.com@xx2, admin</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="7" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh" selected="selected">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest" selected="selected">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt" selected="selected">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2" selected="selected">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin" selected="selected">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="8" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/nguyenthoai19.9.94@gmail.com</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(85, 126, 246); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">B</div></td>
                        <td class="name">phamvanbinh1909@gmail.com</td>
                        <td class="displayName"><span>BinhPham</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>phamvanbinh1909@gmail.com@haizz, admin</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="9" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz" selected="selected">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin" selected="selected">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="10" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/phamvanbinh1909@gmail.com</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(246, 96, 85); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">P</div></td>
                        <td class="name">ptpmpt2016@gmail.com</td>
                        <td class="displayName"><span>pppt</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span>ptpmpt2016@gmail.com</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>nguyenthoai19.9.94@gmail.com@gh</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="11" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh" selected="selected">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="12" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/ptpmpt2016@gmail.com</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr><tr>
                        <td class="avatar"><div class="avatardiv" style="height: 32px; width: 32px; background-color: rgb(85, 195, 246); color: rgb(255, 255, 255); font-weight: bold; text-align: center; line-height: 32px; font-size: 17.6px;">T</div></td>
                        <td class="name">thoainm</td>
                        <td class="displayName"><span>thoainm</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change full name" title="change full name">
                        </td>
                        <td class="password"><span>●●●●●●●</span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="set new password" title="set new password">
                        </td>
                        <td class="mailAddress"><span></span> <img class="svg action" src="./ownCloud_files/rename.svg" alt="change email address" title="change email address">
                        </td>
                        <td class="groups"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="groupsselect multiselect button" data-placehoder="Groups" title="no group" data-msid="13" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option><option value="admin">admin</option></select></td>
                        <td class="subadmins"><span><div class="multiselect button" style="min-width: 100px;"><span>no group</span><span>▾</span></div></span><select multiple="multiple" class="subadminsselect multiselect button" data-placehoder="subadmins" title="no group" data-msid="14" style="display: none;"><option value="nguyenthoai19.9.94@gmail.com@gh">nguyenthoai19.9.94@gmail.com@gh</option><option value="nguyenthoai19.9.94@gmail.com@groupnametest">nguyenthoai19.9.94@gmail.com@groupnametest</option><option value="nguyenthoai19.9.94@gmail.com@qt">nguyenthoai19.9.94@gmail.com@qt</option><option value="nguyenthoai19.9.94@gmail.com@x4">nguyenthoai19.9.94@gmail.com@x4</option><option value="nguyenthoai19.9.94@gmail.com@xx2">nguyenthoai19.9.94@gmail.com@xx2</option><option value="phamvanbinh1909@gmail.com@haizz">phamvanbinh1909@gmail.com@haizz</option><option value="nguyenthoai19.9.94@gmail.com@x5">nguyenthoai19.9.94@gmail.com@x5</option></select></td>
                        <td class="quota">
                            <select class="quota-user" data-inputtitle="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)">
                                <option value="default" selected="selected">
                                    Default					</option>
                                <option value="none">
                                    Unlimited					</option>
                                <option value="1 GB">
                                    1 GB						</option>
                                <option value="5 GB">
                                    5 GB						</option>
                                <option value="10 GB">
                                    10 GB						</option>
                                <option value="other" data-new="">
                                    Other ...
                                </option>
                            </select>
                        </td>
                        <td class="storageLocation">/var/www/html/owncloud/data/thoainm</td>
                        <td class="userBackend">Database</td>
                        <td class="lastLogin" original-title="" title="">a few seconds ago</td>
                        <td class="remove"><a class="action delete" href="http://45.76.151.128/owncloud/index.php/settings/users#" original-title="Delete"><img class="svg action" src="./ownCloud_files/delete.svg"></a></td>
                    </tr></tbody>
                </table><div class="loading" style="height: 200px; visibility: hidden;"></div>
                <div id="searchresults" class="hidden"><div id="status"></div>
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
                </div></div>
        </div>
    </div>


    <div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" style="width: 0px; height: 0px; overflow: hidden; float: left;"></div><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><div id="slideshow" class="icon-loading-dark inactive">
        <input type="button" class="svg next icon-view-next" value="Next">
        <input type="button" class="svg play icon-view-play" value="Play">
        <input type="button" class="svg pause icon-view-pause" value="Pause">
        <input type="button" class="svg previous icon-view-previous" value="Previous">
        <input type="button" class="svg exit icon-view-close" value="Close">

        <div class="progress icon-view-pause"></div>
    </div>
    <script>





        document.addEventListener("DOMContentLoaded", function(event) {



        });
        $('#newgroup-init').click(function () {
                            $('#newgroup-init').hide();
                            $('#newgroup-form').show();
        })

        function addNewGroup(group_name){
//            $.ajax({url: "http://45.76.151.128:12351/creategroup?username=admin&groupname="+group_name, success: function(result){
//                console.log(result);
//            }});
            var formData = {
                username: 'admin',
                groupname: group_name,
            }
            $.ajax({

                type: 'GET',
                url: '/addNewGroup',
                data: formData,
                dataType: 'json',
                success: function (data) {

                },
                error: function (data) {
                    console.log('error');
                    console.log('Error:', data);
                }
            });
        }

    </script>

    <script type="text/javascript">function d_log(s) {
            var ev = document.createEvent('events');
            ev.initEvent('heartbeat_log', true, false);
            document.body.setAttribute('heartbeat_attrib', s);
            document.dispatchEvent(ev);
        };

    </script>
    <div id="heartbeat_msg_wrap"></div><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;"><input title="Please enter storage quota (ex: &quot;512 MB&quot; or &quot;12 GB&quot;)" style="position: absolute; box-sizing: border-box; margin: 1px 0px 0px 1px; width: 113px; height: 30px; border: none; box-shadow: none; z-index: 1000; display: none;">
</body>
</html>