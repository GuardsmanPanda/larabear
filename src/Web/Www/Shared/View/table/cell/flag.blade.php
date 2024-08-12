<?php declare(strict_types=1); ?>
<td class="px-1 py-1 cursor-pointer w-16 mx-auto" @if($countryName !== null) tippy="{{$countryName . ($ip === null ? '' : (' - ' . $ip))}}" @endif  @if($ip !== null) copy="{{$ip}}" @endif>
    <img class="h-7 shadow" src="/static/flag/svg/{{$countryCode}}.svg"  alt="{{$countryName ?? $countryCode}}"/>
</td>
