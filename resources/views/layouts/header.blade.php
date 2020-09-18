<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>{{ env('APP_NAME') }}: {{ $user->username }} </title>
      <script type="text/javascript">
         var andSoItBegins = (new Date()).getTime();
      </script>
      <meta name="generator" content="HabboPHP"/>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/common.css" type="text/css" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/fr.css" type="text/css" />
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript">
         $.noConflict();
         // Code that uses other library's $ can follow here.
      </script>
      <!--Start Javascript-->
      <script src="{{ env('APP_URL') }}/web-gallery/js/libs2.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/visual.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/libs.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/common.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/fullcontent.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/lightweightmepage.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/moredata.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/homeedit.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/homeview.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/web-gallery/js/homeauth.js" type="text/javascript"></script>
      <script src="{{ env('APP_URL') }}/themes/assets/js/jquery.gritter.min.js" type="text/javascript"></script>
      <!--End Javascript-->
      <!--Start Stylesheet-->
      <link href="{{ env('APP_URL') }}/web-gallery/styles/other.css" type="text/css" rel="stylesheet" />
      <link href="{{ env('APP_URL') }}/web-gallery/styles/backgrounds.css" type="text/css" rel="stylesheet" />
      <link href="{{ env('APP_URL') }}/web-gallery/styles/stickers.css" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/lightwindow.css" type="text/css" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/group.css" type="text/css" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/custom.css" type="text/css" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/cbs2credits.css" type="text/css"/>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/newcredits.css" type="text/css"/>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/lightweightmepage.css" type="text/css" />
      <link rel="stylesheet" href="{{ env('APP_URL') }}/themes/assets/css/jquery.gritter.css" type="text/css" />
      <!--End Stylesheet-->
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/group.css" type="text/css" />
      <script type="text/javascript"> 
         var andSoItBegins = (new Date()).getTime();
         var ad_keywords = "";
         document.habboLoggedIn = true;
         var habboName = "";
         var habboId = 134512;
         var facebookUser = false;
         var habboReqPath = "{{ env('APP_URL') }}/modules";
         var habboStaticFilePath = "{{ env('APP_URL') }}/web-gallery";
         var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
         var habboPartner = "";
         var habboDefaultClientPopupUrl = "{{ env('APP_URL') }}/client";
         window.name = "habboMain";
         if (typeof HabboClient != "undefined") {
         HabboClient.windowName = "57a07a19b77f0d8ced3676b28bff848bd33560a3";
         HabboClient.maximizeWindow = true;
         }
      </script> 
      <style type="text/css">
         #playground, #playground-outer {
         width: 927px;
         height: 1360px;
         }
         #column1 {
         width: auto;
         }
      </style>
      <!--[if IE 8]>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/ie8.css" type="text/css" />
      <![endif]-->
      <!--[if lt IE 8]>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/ie.css" type="text/css" />
      <![endif]-->
      <!--[if lt IE 7]>
      <link rel="stylesheet" href="{{ env('APP_URL') }}/web-gallery/styles/ie6.css" type="text/css" />
      <script src="{{ env('APP_URL') }}/web-gallery/js/pngfix.js" type="text/javascript"></script>
      <script type="text/javascript">
         try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
      </script>
      <style type="text/css">
         body { behavior: url(/js/csshover.htc); }
      </style>
      <![endif]-->
      <meta name="build" content="HabboPHP Renew" />
   </head>
   <body id="view mode" class="impor body_classic_width">
      <div id="overlay"></div>
      <div id="updated" style="position:fixed;width:150px;text-align:center;left:50%;right:50%;margin-left:-75px;font-size:19px;padding:5px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;text-shadow:0 1px 0 #fff;background:#feffba;color:#333;display:none;z-index:9999999;">Mis &agrave; jour</div>
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
            </div>
            {{ $config->checkMaintenance }}
            <ul id="navi">
               <li class="metab @if(Str::contains(Route::current()->getName(), 'me.')) selected @endif">
                  <a href="{{ env('APP_URL') }}/me.php">
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
            <div id="habbos-online">
               <div class="rounded"><span style="color:#000;">{{ $config->users_online }}<br/>@lang('online')</span></div>
            </div>
         </div>
      </div>
      <div id="content-container">
         <div id="navi2-container" class="pngbg">
            @if(Str::contains(Route::current()->getName(), 'me.'))
            <div id="navi2" class="pngbg clearfix">
               <ul>
                  <li class="@if(Route::current()->getName() === 'me.me') selected @endif">
                     <a href="{{ env('APP_URL') }}/me">@lang('home')</a>
                  </li>
                  <li class="@if(Route::current()->getName() === 'me.homepage') selected @endif">
                     <a href="{{ env('APP_URL') }}/home.php?username={{ $user->username }}">@lang('myhomepage')</a>
                  </li>
                  <li class="@if(Route::current()->getName() === 'me.profile')selected @endif last">
                     <a href="{{ env('APP_URL') }}/profile">@lang('mypreferences')</a>
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
	  </div>
   </body>
</html>