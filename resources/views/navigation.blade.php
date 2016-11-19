<div id="app-navigation">
    <ul class="with-icon">
        <li data-id="files" class="nav-files active">
            <a href="/" class="nav-icon-files svg">All files </a>
        </li>
        <li data-id="sharingin" class="nav-sharingout" style="margin-bottom: 0px">
            <a href="/sharingin" class="nav-icon-sharingin svg">Shared with you </a>
        </li>
        <li data-id="sharingout" class="nav-sharingout">
            <a href="/shareother" class="nav-icon-sharingout svg">Shared with others </a>
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