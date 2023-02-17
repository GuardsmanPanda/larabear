<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => 'mb-2 pb-0.5 border-b border-gray-200']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h3 class="text-xl font-semibold text-gray-700">{{$slot}}</h3>
            @if($subtitle !== '')
                <div class="mt-0.5 text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
