<?php declare(strict_types=1); ?>
<details {{ $attributes->merge(['class' => $classes]) }}>
    <summary class="{{$summaryClasses}}">{{$summary}}</summary>
    <div class="p-4"> {{$slot}} </div>
</details>
