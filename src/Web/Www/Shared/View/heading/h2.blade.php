<?php declare(strict_types=1); ?>
<div class="mb-4 pb-1.5 border-b border-gray-200">
    @if(($extra ?? null) !== null)
        <div class="flex items-center">
            <div class="flex-auto">
                @endif
                <h2 class="text-xl font-semibold text-gray-900">{{$slot}}</h2>
                @if($subtitle !== '')
                    <div class="mt-0.5 text-sm text-gray-500">{!! $subtitle !!}</div>
                @endif
                @if(($extra ?? null) !== null)
            </div>
            <div  {{ $extra->attributes }}>{{$extra}}</div>
        </div>
    @endif
</div>
