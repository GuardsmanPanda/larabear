<?php declare(strict_types=1); ?>
<x-bear::dialog.crud type="create" submitText="Create" title="New API Access Token" endpoint="/bear/config" class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="config_key" pattern="\S+::\S+" required placeholder="namespace::key"></x-bear::form.text>
        <x-bear::form.select id="config_data_type" required>
            <option value="STRING">STRING</option>
            <option value="ENCRYPTED_STRING">ENCRYPTED_STRING</option>
            <option value="INTEGER">INTEGER</option>
            <option value="BOOLEAN">BOOLEAN</option>
            <option value="DATE">DATE</option>
            <option value="TIMESTAMP">TIMESTAMP</option>
            <option value="JSON">JSON</option>
            <option value="MULTI_VALUE">MULTI_VALUE</option>
        </x-bear::form.select>
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
</x-bear::dialog.crud>