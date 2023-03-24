<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => $classes]) }}>
    <h2 class="font-medium text-lg text-gray-800 mb-2">{{$title}}</h2>
    {{$slot}}
</div>
