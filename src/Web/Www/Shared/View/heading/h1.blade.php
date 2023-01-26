<?php declare(strict_types=1); ?>
<div class="mb-4 pb-1.5 border-b border-gray-300">
    @if(($extra ?? null) !== null)
        <div class="flex items-center">
            <div class="flex-auto">
                @endif
                <h1 class="text-2xl font-semibold text-gray-900">{{$slot}}</h1>
                @if($subtitle !== '')
                    <div class="mt-0.5 text-sm text-gray-500">{{$subtitle}}</div>
                @endif
                @if(($extra ?? null) !== null)
            </div>
            <div  {{ $extra->attributes }}>{{$extra}}</div>
        </div>
    @endif
</div>
