<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="{{ env('APP_URL') }}/me.php"></a></h1>
<div id="subnavi"> 
			<div id="subnavi-user"> 
				<ul> 
					<li id="myfriends"><a href="#"><span>Mes Amis</span></a><span class="r"></span></li> 
					
					<li id="myrooms"><a href="#"><span>Mes Apparts</span></a><span class="r"></span></li> 
				</ul> 
						</div> 
			            <div id="subnavi-search" style="text-align:left;"> 
                <div id="subnavi-search-upper"> 
                <ul id="subnavi-search-links"> 
                    <li><a href="{{ env('APP_URL') }}/help" target="_new">Questions fréquentes</a></li> 
					<li>
					<form method="post" action="{{ env('APP_URL') }}/logout.php">
                     <button class="link" id="signout" type="submit"><span>Quitter</span></button>
                    </form>
					</li> 
				</ul> 
                </div> 
            </div> 
            <div id="to-hotel"> 
					   <a href="client.php" class="new-button green-button" target="5582b925d39a3b57fc3e178ad726bd2798015099" onclick="HabboClient.openOrFocus(this); return false;"><b>@lang('enterin') {{ env('APP_NAME') }}</b><i></i></a> 
						
						</div>      					
        </div>		{{ $config->checkMaintenance }}
<ul id="navi">
        <li class="metab @if(Route::current()->getName() === 'me') selected @endif">
		<a   href="{{ env('APP_URL') }}/me.php">
			{{ $user->username }}( {{ $user->id }} <i style="background-image: url({{ env('APP_URL') }}/web-gallery/images/id_icon.png)"> )</i>
		</a>
<span></span>
</li>
		<li class="{if $groups eq 'community'}selected{/if}">
			<a href="{{ env('APP_URL') }}/community.php">@lang('community')</a>
			<span></span>
		</li>
		<li class="{if $groups eq 'shop'}selected{/if}">
			<a href="{{ env('APP_URL') }}/shop.php">@lang('shop') ({{$user->jetons}} {{$config->moneyname}})</a>
			<span></span>
		</li>
		<!--
		<li class="{if $groups eq 'respect'}selected{/if}">
			<a href="{{ env('APP_URL') }}/s_attitude.php">{#Securite#}</a>
			<span></span>
		</li>
		-->
		@if ($user->rank >= 6)
			<li id="tab-register-now" class="">
			<a href="{{ env('APP_URL') }}/admin">@lang('housekeeping')</a>
			<span></span>
		</li>
		@endif
</ul>
        <div id="habbos-online"><div class="rounded"><span style="color:#000;">{{ $config->users_online }}<br/>@lang('online')</span></div></div>
        
	</div>
</div>
<div id="content-container">
	<div id="navi2-container" class="pngbg">
		@if(Route::current()->getName() === 'me')
			<div id="navi2" class="pngbg clearfix">
			<ul>
					<li class="@if(Route::current()->getName() === 'me') selected @endif">
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