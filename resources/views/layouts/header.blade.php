<div id="navi2-container" class="pngbg">
    @if(Route::current()->getName() === 'me')
        <div id="navi2" class="pngbg clearfix">
        <ul>
                <li class="{if $url eq 'me.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/me.php">@lang('home')</a>
                </li>
                <li class="{if $url eq 'home.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/home.php?username={{ $user->username }}">@lang('myhomepage')</a>
                </li>
                <li class="{if $url eq 'profile.php'}selected{/if} last">
                    <a href="{{ env('APP_URL') }}/profile.php?page=index">@lang('mypreferences')</a>
                </li>
        </ul>
        </div>
        @endif
        @if(Route::current()->getName() === 'community')
        <div id="navi2" class="pngbg clearfix">
        <ul>
                <li class="{if $url eq 'community.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/community.php">{#Community#}</a>
                </li>
                <li class="{if $url eq 'events.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/events.php">{#Events#}</a>
                </li>
                <li class="{if $url eq 'staff.php'}selected{/if} last">
                    <a href="{{ env('APP_URL') }}/staff.php">Staff</a>
                </li>
        </ul>
        </div>
        @endif
        @if(Route::current()->getName() === 'shop')
        <div id="navi2" class="pngbg clearfix">
        <ul>
                <li class="{if $url eq 'shop.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/shop.php">{#Buy#} {$config->moneyname}</a>
                </li>
                <li class="{if $url eq 'vip.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/vip.php">VIP</a>
                </li>
                <li class="{if $url eq 'badges.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/badges.php">{#BuyBadges#}</a>
                </li>
                <li class="{if $url eq 'rares.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/rares.php">{#BuyRares#}</a>
                </li>
                <li class="{if $url eq 'winwin.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/winwin.php">{#BuyWinWins#}</a>
                </li>
                <li class="{if $url eq 'bots.php'}selected{/if} last">
                    <a href="{{ env('APP_URL') }}/bots.php">{#BuyBots#}</a>
                </li>
                
        </ul>
        </div>
     @endif
    <!--
        <div id="navi2" class="pngbg clearfix" style="display:none">
        <ul>
                <li class="{if $url eq 's_attitude.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/s_attitude.php">{#HabboAttitude#}</a>
                </li>
                <li class="{if $url eq 's_security.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/s_security.php">{#ConseilsSecurity#}</a>
                </li>
                <li class="{if $url eq 's_cs.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/s_cs.php">{#CentreSecurity#}</a>
                </li>
                <li class="{if $url eq 's_repport.php'}selected{/if}">
                    <a href="{{ env('APP_URL') }}/s_repport.php">{#Signalerdesabus#}</a>
                </li>
        </ul>
        </div>
     -->
    </div>