<?php declare(strict_types=1); ?>
<table {{ $attributes->merge(['class' => $classes]) }}>
    <thead class="{{$headerClasses}}">
    <tr>
        {{$tableHead}}
    </tr>
    </thead>
    <tbody class="{{$bodyClasses}}">
    {{$slot}}
    </tbody>
</table>
