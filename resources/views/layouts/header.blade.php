<ul id="navi">
    <li class="metab @if(Route::current()->getName() === 'me') selected @endif">
    <a   href="{{ env('APP_URL') }}/me.php">
        {{ $user->username }}( {{ $user->id }} <i style="background-image: url({{ env('APP_URL') }}/web-gallery/images/id_icon.png)"> )</i>
    </a>
<span></span>
</li>
    <li class="@if(Route::current()->getName() === 'community') community @endif">
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