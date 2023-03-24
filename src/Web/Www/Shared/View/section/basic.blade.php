<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => $classes]) }}>
    <h2 class="font-medium text-2xl">{{$title}}</h2>
    {{$slot}}
</div>
