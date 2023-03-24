<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="flex">
        <h2 class="font-medium text-lg text-gray-800 mb-2 border-b pb-0.5">{{$title}}</h2>
    </div>
    {{$slot}}
</div>
