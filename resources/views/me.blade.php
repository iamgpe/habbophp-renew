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



<!--
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/styles/myhabbo/skins.css" type="text/css" /> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/styles/myhabbo/dialogs.css" type="text/css" /> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/styles/myhabbo/buttons.css" type="text/css" /> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/styles/myhabbo/control.textarea.css" type="text/css" /> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/styles/myhabbo/boxes.css" type="text/css" />
<link href="http://habbo.fr/myhabbo/styles/assets/backgrounds.css?v=ea94443d10aaedf816393a144f4c0164" type="text/css" rel="stylesheet" /> 
<link href="http://habbo.fr/myhabbo/styles/assets/stickers.css?v=09991b1a03621a9a16adf9f4fe5d0009" type="text/css" rel="stylesheet" />
<link href="http://habbo.fr/myhabbo/styles/assets/other.css?v=44a13f2cf6bc653b3c96488813634f63" type="text/css" rel="stylesheet" /> 
 <!--
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/js/homeview.js" type="text/javascript"></script> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/styles/lightwindow.css" type="text/css" /> 

<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/js/homeauth.js" type="text/javascript"></script> 
-
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/styles/group.css" type="text/css" /> 
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/static/styles/home.css" type="text/css" /> 

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
-->
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
        </div>		{{ $config->checkMaintenance }}
<ul id="navi">
        <li class="metab {if $groups eq 'index'}selected{/if}">
		<a   href="{{ env('APP_URL') }}/me.php">
			{{ $user->username }}( <i style="background-image: url({{ env('APP_URL') }}/web-gallery/images/id_icon.png)"> )</i>
		</a>
<span></span>
</li>
		<li class="{if $groups eq 'community'}selected{/if}">
			<a href="{{ env('APP_URL') }}/community.php">{#Community#}</a>
			<span></span>
		</li>
		<li class="{if $groups eq 'shop'}selected{/if}">
			<a href="{{ env('APP_URL') }}/shop.php">{#Shop#} ({$user->jetons} {$config->moneyname})</a>
			<span></span>
		</li>
		<!--
		<li class="{if $groups eq 'respect'}selected{/if}">
			<a href="{{ env('APP_URL') }}/s_attitude.php">{#Securite#}</a>
			<span></span>
		</li>
		-->
		{if $user->rank eq 6 or $user->rank eq 7 or $user->rank eq 8 }<li id="tab-register-now" class="">
			<a href="{{ env('APP_URL') }}/admin">Housekeeping</a>
			<span></span>{/if}
		</li>
</ul>

        <div id="habbos-online"><div class="rounded"><span style="color:#000;">{if isset($config->users_online)}{$config->users_online}{/if}<br/>{#online#}</span></div></div>
        
	</div>
</div>
<div id="content-container">
<div id="navi2-container" class="pngbg">
{if $groups eq 'index'}
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="{if $url eq 'me.php'}selected{/if}">
				<a href="{{ env('APP_URL') }}/me.php">{#Home#}</a>
			</li>
    		<li class="{if $url eq 'home.php'}selected{/if}">
				<a href="{{ env('APP_URL') }}/home.php?username={{ $user->username }}">{#MyHomePage#}</a>
    		</li>
    		<li class="{if $url eq 'profile.php'}selected{/if} last">
				<a href="{{ env('APP_URL') }}/profile.php?page=index">{#MyPreferences#}</a>
    		</li>
	</ul>
    </div>
 {/if}
 {if $groups eq 'community'}
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
 {/if}
 {if $groups eq 'shop'}
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
 {/if}
  {if $groups eq 'respect'}
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
 {/if}
</div>
<!--Ne pas supprimer se input -->
<script>
function get(){
	jQuery.extend(jQuery.gritter.options, { 
        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
        //fade_in_speed: 'medium', // how fast notifications fade in (string or int)
        //fade_out_speed: 2000, // how fast the notices fade out
		//time: 10000 // hang on the screen for...
	});
	jQuery.get('{{ env('APP_URL') }}/ajax/notif.php',function(data){
	if(data){
		jQuery.gritter.add({
			title: data.title,
			text: data.text,
			image : data.image,
			time: 5000,
		});
	}
	},"json");
}
setInterval('get()', 5000);
</script>
<input type="hidden" value="{if isset($token)}{$token}{/if}" id="token"/>
<div id="container">

	<div id="content" style="position: relative" class="clearfix">
	
    <div id="wide-personal-info">
    <div id="habbo-plate">
            <a href="{{ env('APP_URL') }}/profile.php?page=index">
            <img alt="@lang('name')" src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure={{ $user->look }}&size=b&direction=3&head_direction=3&gesture=sml"/>
        </a>
    </div>

    <div id="name-box" class="info-box">
        <div class="label">@lang('name'):</div>
        <div class="content">{{ $user->username }} {$vip}</div>
    </div>
    <div id="motto-box" class="info-box">
        <div class="label">@lang('motto'):</div>
        <div class="content">{{ $user->motto }}</div>
    </div>
    <div id="last-logged-in-box" class="info-box">
        <div class="label">@lang('lastlogin'):</div>
        <div class="content">{{ $user->last_online }}</div>
    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="{{ env('APP_URL') }}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99" onclick="HabboClient.openOrFocus(this); return false;">@lang('enterhotel')<i></i></a>
        <b></b>
    </div>
</div>

</div>


{section name=customer loop=$news}

	 {if $smarty.section.customer.first}
<div id="promo-box">

    <div id="promo-bullets"></div>

    <div class="promo-container" style="background-image: url({$news[customer].image})">
        <div class="promo-content">
            <div class="title">{$news[customer].title}</div>
            <div class="body">{$news[customer].short}</div>
        </div>
        <a href="http://www.facebook.com/{{ $config->facebook }}" target="_blank" class="facebook-link" onclick="recordOutboundLink('Promo','Horses Facebook Button');"></a>
        <a href="http://twitter.com/{{ $config->twitter }}" target="_blank" class="twitter-link" onclick="recordOutboundLink('Promo','Horses Twitter Button');"></a>
          {if $news[customer].button_link_display eq 1}
<div class="enter-hotel-btn">
    <div class="open enter-btn">
  
    	{if $news[customer].button_link_me eq 'hotel'}
			    <a href="{{ env('APP_URL') }}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99" onclick="HabboClient.openOrFocus(this); return false;">{#Enterhotel#}<i></i></a>
			    {elseif  empty($news[customer].button_link_me)}
			    	<a href="events.php?id={$news[customer].id}">{$news[customer].button_text_me}<i></i></a>
			    {else}
			     
			     <a href="{$news[customer].button_link_me}">{$news[customer].button_text_me}<i></i></a>
    		{/if}
       
        <b></b>
    </div>
</div>
{/if}
    </div>
{/if}
{if  $smarty.section.customer.index ge '1'}
    <div class="promo-container" style="display: none; background-image: url({$news[customer].image});">
        <div class="promo-content">
            <div class="title">{$news[customer].title}</div>
            <div class="body">{$news[customer].short}</div>
        </div>
        <a href="http://www.facebook.com/{$config->facebook}" target="_blank" class="facebook-link" onclick="recordOutboundLink('Promo','SnowStorm Facebook Button');"></a>
        <a href="http://twitter.com/{$config->twitter}" target="_blank" class="twitter-link" onclick="recordOutboundLink('Promo','SnowStorm Twitter Button');"></a>
          {if $news[customer].button_link_display eq 1}
<div class="enter-hotel-btn">
    <div class="open enter-btn">
  
    		{if $news[customer].button_link_me eq 'hotel'}
			    <a href="{{ env('APP_URL') }}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99" onclick="HabboClient.openOrFocus(this); return false;">{#Enterhotel#}<i></i></a>
			    {elseif  empty($news[customer].button_link_me)}
			    	<a href="events.php?id={$news[customer].id}">{$news[customer].button_text_me}<i></i></a>
			    {else}
			     
			     <a href="{$news[customer].button_link_me}">{$news[customer].button_text_me}<i></i></a>
    		{/if}
       
        <b></b>
    </div>
</div>
{/if}
    </div>
    {/if}
{/section}




</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script>

<div id="column1" class="column" style="display:none">
			     		
				<div class="habblet-container " >		
						<div class="cbb clearfix blue ">
	
							<h2 class="title">Grupper
							</h2>
						<ul class="active-discussions-toplist">
						
	<li class="odd" >
		<a href="/groups/16764/id/discussions/155172/id" class="topic">
			<span>Habbo X kommer tillbaka</span>
		</a>
		<div class="topic-info post-icon">
            <span class="grey">(</span>
                     <a href="/groups/16764/id/discussions/155172/id/page/1" class="topiclist-page-link secondary">1</a>
             <span class="grey">)</span>
		 </div>
	</li>
	<li class="even" >
		<a href="/groups/16764/id/discussions/155168/id" class="topic">
			<span>Katy Perry gör en film!</span>
		</a>
		<div class="topic-info post-icon">
            <span class="grey">(</span>
                     <a href="/groups/16764/id/discussions/155168/id/page/1" class="topiclist-page-link secondary">1</a>
             <span class="grey">)</span>
		 </div>
	</li>
	
	</ul>
<div id="active-discussions-toplist-hidden-h3" style="display: none">
    <ul class="active-discussions-toplist">
	<li class="odd" >
		<a href="/groups/21650/id/discussions/152662/id" class="topic">
			<span>2012 - undergången?</span>
		</a>
		<div class="topic-info post-icon">
            <span class="grey">(</span>
                     <a href="/groups/21650/id/discussions/152662/id/page/1" class="topiclist-page-link secondary">1</a>
                     <a href="/groups/21650/id/discussions/152662/id/page/2" class="topiclist-page-link secondary">2</a>
                     <a href="/groups/21650/id/discussions/152662/id/page/3" class="topiclist-page-link secondary">3</a>
                     <a href="/groups/21650/id/discussions/152662/id/page/4" class="topiclist-page-link secondary">4</a>
             <span class="grey">)</span>
		 </div>
	</li>
	<li class="even" >
		<a href="/groups/21650/id/discussions/129630/id" class="topic">
			<span>[LEK] Lektråd [LEK]</span>
		</a>
		<div class="topic-info post-icon">
            <span class="grey">(</span>
                 <a href="/groups/21650/id/discussions/129630/id/page/1" class="topiclist-page-link secondary">1</a>
                 …
                     <a href="/groups/21650/id/discussions/129630/id/page/591" class="topiclist-page-link secondary">591</a>
                     <a href="/groups/21650/id/discussions/129630/id/page/592" class="topiclist-page-link secondary">592</a>
                     <a href="/groups/21650/id/discussions/129630/id/page/593" class="topiclist-page-link secondary">593</a>
             <span class="grey">)</span>
		 </div>
	</li>
	
	</ul>
</div>
<div class="clearfix">
    <a href="#" class="discussions-toggle-more-data secondary" id="discussions-toggle-more-data-h3">{#Seemore#}</a>
</div>
<script type="text/javascript">
L10N.put("show.more.discussions", "{#Seemore#}");
L10N.put("show.less.discussions", "{#Seeless#}");
var discussionMoreDataHelper = new MoreDataHelper("discussions-toggle-more-data-h3", "active-discussions-toplist-hidden-h3","discussions");
</script>

						
							
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<div id="column1" class="column">
			     		
				<div class="habblet-container ">		
	
						<div style="float:left;" id="twitterfeed-habblet-container">

<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 453,
   height: 161,
  theme: {
    shell: {
      background: '#4a4d4f',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#4a4d4f',
      links: '#fe6201'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('{$config->twitter}').start();
</script>
<div style="float:left;">
{$config->ads300x250}
</div>
<div style="clear:both;"></div>

						
		</div>			
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
				
			 

</div>
<script type="text/javascript">
HabboView.run();
</script>
