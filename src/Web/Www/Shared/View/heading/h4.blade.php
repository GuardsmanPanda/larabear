<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => 'mb-1 pb-0.5 border-b border-gray-100']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h4 class="text-lg font-medium text-gray-700">{{$slot}}</h4>
            @if($subtitle !== '')
                <div class="text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
