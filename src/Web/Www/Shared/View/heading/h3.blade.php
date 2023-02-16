<?php declare(strict_types=1); ?>
<div class="mb-4 pb-1 border-b border-gray-100">
    <div class="flex items-center">
        <div class="flex-auto">
            <h2 class="text-lg font-semibold text-gray-800">{{$slot}}</h2>
            @if($subtitle !== '')
                <div class="mt-0.5 text-sm text-gray-500">{!! $subtitle !!}</div>
            @endif
        </div>
        <div {{ $extra?->attributes ?? '' }}>{{$extra ?? ''}}</div>
    </div>
</div>
