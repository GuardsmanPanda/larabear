<?php declare(strict_types=1); ?>
<table class="min-w-full shadow">
    <thead class="border-b-2 bg-gray-50 font-semibold text-left">
    <tr>
        {{$tableHead}}
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white text-sm text-gray-600">
    {{$slot}}
    </tbody>
</table>
