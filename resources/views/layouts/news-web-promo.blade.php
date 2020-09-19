<div id="promo-box">
@foreach ($news as $new)
    @if ($loop->first)
        <div id="promo-bullets"></div>
        <div class="promo-container" style="background-image: url({{$new->image}})">
            <div class="promo-content">
                <div class="title">{{$new->title}}</div>
                <div class="body">{{$new->short}}</div>
            </div>
            <a href="http://www.facebook.com/{$config->facebook}" target="_blank" class="facebook-link"
               onclick="recordOutboundLink('Promo','Horses Facebook Button');"></a>
            <a href="http://twitter.com/{$config->twitter}" target="_blank" class="twitter-link"
               onclick="recordOutboundLink('Promo','Horses Twitter Button');"></a>
            @if ($new->button_link_display == 1)
                <div class="enter-hotel-btn">
                    <div class="open enter-btn">
                        @if ($new->button_link_me == "hotel")
                            <a href="{$config->url_site}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99"
                               onclick="HabboClient.openOrFocus(this); return false;">{#Enterhotel#}<i></i></a>
                        @elseif ($new->button_link_me)
                            <a href="events.php?id={{$new->id}}">{{$new->button_text_me}}<i></i></a>
                        @else
                            <a href="{{$new->button_link_me}}">{{$new->button_text_me}}<i></i></a>
                        @endif
                        <b></b>
                    </div>
                </div>
            @endif
        </div>
    @else
        <div class="promo-container" style="display: none; background-image: url({{$new->image}});">
            <div class="promo-content">
                <div class="title">{{$new->title}}</div>
                <div class="body">{{$new->short}}</div>
            </div>
            <a href="http://www.facebook.com/{$config->facebook}" target="_blank" class="facebook-link"
               onclick="recordOutboundLink('Promo','SnowStorm Facebook Button');"></a>
            <a href="http://twitter.com/{$config->twitter}" target="_blank" class="twitter-link"
               onclick="recordOutboundLink('Promo','SnowStorm Twitter Button');"></a>
            @if ($new->button_link_display == 1)
                <div class="enter-hotel-btn">
                    <div class="open enter-btn">
                        {{ $new->button_link_me }}
                        @if ($new->button_link_me == "hotel")
                            <a href="{$config->url_site}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99"
                               onclick="HabboClient.openOrFocus(this); return false;">@lang('enterhotel')<i></i></a><b></b>
                        @elseif ($new->button_link_me)
                            <a href="events.php?id={{$new->id}}">{{$new->button_text_me}}<i></i></a><b></b>
                        @else
                            <a href="{{$new->button_link_me}}">{{$new->button_text_me}}<i></i></a><b></b>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    @endif
@endforeach
</div>

<script type="text/javascript">
    document.observe("dom:loaded", function () {
        PromoSlideShow.init();
    });
</script>
