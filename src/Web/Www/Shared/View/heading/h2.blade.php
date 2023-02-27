<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => 'mb-3 pb-0.5 border-b border-gray-300']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h2 class="text-2xl font-semibold text-gray-800">{{$slot}}</h2>
            @if($subtitle !== '')
                <div class="text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
