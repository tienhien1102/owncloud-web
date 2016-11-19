<div id="header">
    <a href="http://localhost/index.php" id="owncloud" tabindex="1">
        <div class="logo-icon svg" style="background-image: url({{ URL::asset('login/image/logo-icon.svg') }})">
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