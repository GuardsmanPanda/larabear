<?php declare(strict_types=1); ?>
<div class="mb-6 pb-1.5 border-b border-gray-300">
    <h1 class="text-2xl font-semibold text-gray-900">{{$slot}}</h1>
    @if($subtitle !== '')
        <div class="text-sm text-gray-500">{{$subtitle}}</div>
    @endif
</div>
