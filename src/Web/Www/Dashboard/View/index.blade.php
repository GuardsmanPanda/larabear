<?php declare(strict_types=1); ?>
<x-bear::heading.h1-section subtitle="A brief overview of the system state.">Larabear Dashboard</x-bear::heading.h1-section>
<div class="grid grid-cols-3 gap-4" xmlns:x-bear="http://www.w3.org/1999/html">
    <div class="col-span-2 flex flex-col gap-4">
        <x-bear::section.basic title="Database Changes">
            <div id="database-table" hx-get="/bear/log/database-change/table?limit=30" hx-trigger="load,every 15s" hx-target="this"></div>
        </x-bear::section.basic>
        <x-bear::section.basic title="Emails">
            <div id="email-table" hx-get="/bear/email/table?limit=10" hx-trigger="load,every 15s" hx-target="this"></div>
        </x-bear::section.basic>
    </div>
    <div class="flex flex-col gap-4">
        <x-bear::section.basic title="Laravel">laravel stuff</x-bear::section.basic>
        <x-bear::section.basic title="PHP">PHP Stuff</x-bear::section.basic>
        <x-bear::section.basic title="🖥️ {{$system['host']['Static hostname']}}">
            <div class="grid grid-cols-2 gap-4">
                <div>Operating System</div>
                <div>{{$system['host']['Operating System']}}</div>
                <div>Kernel</div>
                <div>{{$system['host']['Kernel']}}</div>
                <div>Architecture</div>
                <div>{{$system['host']['Architecture']}}</div>
            </div>
        </x-bear::section.basic>
    </div>
</div>
