@include('layouts.header')
<!--Ne pas supprimer se input -->
<script>
    function get() {
        jQuery.extend(jQuery.gritter.options, {
            position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
            //fade_in_speed: 'medium', // how fast notifications fade in (string or int)
            //fade_out_speed: 2000, // how fast the notices fade out
            //time: 10000 // hang on the screen for...
        });
        jQuery.get('{{ env('APP_URL') }}/ajax/notif.php', function (data) {
            if (data) {
                jQuery.gritter.add({
                    title: data.title,
                    text: data.text,
                    image: data.image,
                    time: 5000,
                });
            }
        }, "json");
    }

    setInterval('get()', 5000);
</script>
<div id="container">

    <div id="content" style="position: relative" class="clearfix">

        <div id="wide-personal-info">
            <div id="habbo-plate">
                <a href="{{ env('APP_URL') }}/profile.php?page=index">
                    <img alt="@lang('name')"
                         src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure={{ $user->look }}&size=b&direction=3&head_direction=3&gesture=sml"/>
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
                <div class="content">{{ date('d/m/Y H:i:s', $user->last_login) }}</div>
            </div>

            <div class="enter-hotel-btn">
                <div class="open enter-btn">
                    <a href="{{ env('APP_URL') }}/client.php" target="38bad4312a9f27ce591f69f49725def36283fe99"
                       onclick="HabboClient.openOrFocus(this); return false;">@lang('enterhotel')<i></i></a>
                    <b></b>
                </div>
            </div>

        </div>

        @include('layouts.news-web-promo', ['news' => $news])


    </div>
    <script type="text/javascript">
        document.observe("dom:loaded", function () {
            PromoSlideShow.init();
        });
    </script>

    <div id="column1" class="column" style="display:none">

        <div class="habblet-container ">
            <div class="cbb clearfix blue ">

                <h2 class="title">Grupper
                </h2>
                <ul class="active-discussions-toplist">

                    <li class="odd">
                        <a href="/groups/16764/id/discussions/155172/id" class="topic">
                            <span>Habbo X kommer tillbaka</span>
                        </a>
                        <div class="topic-info post-icon">
                            <span class="grey">(</span>
                            <a href="/groups/16764/id/discussions/155172/id/page/1" class="topiclist-page-link secondary">1</a>
                            <span class="grey">)</span>
                        </div>
                    </li>
                    <li class="even">
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
                        <li class="odd">
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
                        <li class="even">
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
                    var discussionMoreDataHelper = new MoreDataHelper("discussions-toggle-more-data-h3", "active-discussions-toplist-hidden-h3", "discussions");
                </script>


            </div>
        </div>
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
                Rounder.init();
            }</script>


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
                    }).render().setUser('{{ $config->twitter }}').start();
                </script>
                <div style="float:left;">
                    {{$config->ads300x250}}
                </div>
                <div style="clear:both;"></div>


            </div>
        </div>
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
                Rounder.init();
            }</script>


    </div>
    <script type="text/javascript">
        HabboView.run();
    </script>
