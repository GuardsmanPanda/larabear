<?php declare(strict_types=1); ?>
<td {{ $attributes->merge(['class' => 'px-2 py-2 cursor-pointer']) }} @if((string)$slot !== '') tippy="{{$slot}}" copy="{{$slot}}" @endif>{{substr((string)$slot, 0, 8)}}</td>
