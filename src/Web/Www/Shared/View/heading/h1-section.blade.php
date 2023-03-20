<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => '-mx-4 bg-white mb-4 px-6 py-2 shadow']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h1 class="text-3xl font-semibold text-gray-900">{{$slot}}</h1>
            @if($subtitle !== '')
                <div class="text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
