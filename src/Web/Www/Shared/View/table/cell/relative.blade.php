<?php declare(strict_types=1); ?>
@if((string)$slot !== '')
    <td {{ $attributes->merge(['class' => 'px-2.5 py-2.5']) }} tippy="{{$slot}}" >{{\Carbon\Carbon::parse($slot)->diffForHumans()}}</td>
@else
    <td {{ $attributes->merge(['class' => 'px-2.5 py-2.5']) }}></td>
@endif