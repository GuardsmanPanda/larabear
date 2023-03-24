<?php declare(strict_types=1); ?>
<x-bear::heading.h1-section subtitle="A brief overview of the system state.">Larabear Dashboard</x-bear::heading.h1-section>
<div class="grid grid-cols-3" xmlns:x-bear="http://www.w3.org/1999/html">
<div class="col-span-2">data</div>
<div class="grid gap-4">
    <x-bear::section.basic title="Laravel">laravel stuff</x-bear::section.basic>
    <x-bear::section.basic title="PHP">PHP Stuff</x-bear::section.basic>
    <x-bear::section.basic title="🖥️ {{$hostname}}"></x-bear::section.basic>
</div>
</div>
