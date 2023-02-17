<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => 'mb-2 pb-1 border-b border-gray-100']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h2 class="text-lg font-semibold text-gray-700">{{$slot}}</h2>
            @if($subtitle !== '')
                <div class="mt-0.5 text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
