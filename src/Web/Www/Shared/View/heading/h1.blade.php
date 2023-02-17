<?php declare(strict_types=1); ?>
<div {{ $attributes->merge(['class' => 'mb-4 pb-1 border-b border-gray-300']) }}>
    <div class="flex items-center">
        <div class="flex-auto">
            <h1 class="text-2xl font-semibold text-gray-900">{{$slot}}</h1>
            @if($subtitle !== '')
                <div class="mt-0.5 text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        @if(($extra ?? null) !== null)
            <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
        @endif
    </div>
</div>
