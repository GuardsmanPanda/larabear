<?php declare(strict_types=1); ?>
<a href="{{$path}}" hx-fastnav="sidebar-active" {{$attributes->merge(['class' => $classes])}}>
    <x-bear::icon class="mr-2 flex-shrink-0" size="5" name="{{$icon}}"/>
    <span class="flex-1">{{$slot}}</span>
</a>
