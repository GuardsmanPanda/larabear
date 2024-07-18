<?php declare(strict_types=1); ?>
<x-bear::dialog.create hx-post="/bear/config" class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="config_key" pattern="\S+::\S+" required placeholder="namespace::key"></x-bear::form.text>
        <x-bear::form.text id="config_description" required class="col-span-2 mb-4"></x-bear::form.text>
        <x-bear::form.text id="config_string"></x-bear::form.text>
        <x-bear::form.text id="encrypted_config_string"></x-bear::form.text>
        <x-bear::form.select id="config_boolean">
            <option value="" selected>Null</option>
            <option value="true">True</option>
            <option value="false">False</option>
        </x-bear::form.select>
        <x-bear::form.text id="config_integer" pattern="[0-9]*" placeholder="[0-9]*"></x-bear::form.text>
        <x-bear::form.date id="config_date"></x-bear::form.date>
        <x-bear::form.datetime-local id="config_timestamp"></x-bear::form.datetime-local>
    </div>
</x-bear::dialog.create>
