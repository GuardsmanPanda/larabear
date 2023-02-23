<?php declare(strict_types=1); ?>
<table class="min-w-full divide-y divide-gray-300 border shadow">
    <thead class="bg-gray-300 text-left text-sm font-semibold">
    <tr>
        {{$tableHead}}
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white text-sm text-gray-600">
    {{$slot}}
    </tbody>
</table>
