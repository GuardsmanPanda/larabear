<?php declare(strict_types=1); ?>
<x-bear::dialog.update title="Update {{$config_data->config_key}}" hx-patch='{{ "/bear/config/$config_data->config_key" }}' class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="config_key" pattern="\S+::\S+" required>{{$config_data->config_key}}</x-bear::form.text>
        <x-bear::form.select id="config_data_type" required>
            @foreach(['STRING', 'ENCRYPTED_STRING', 'INTEGER', 'BOOLEAN', 'DATE', 'TIMESTAMP', 'JSON', 'MULTI_VALUE'] as $type)
                <option value="{{$type}}" @if($config_data->config_data_type === $type) selected @endif>{{$type}}</option>
            @endforeach
        </x-bear::form.select>
        <x-bear::form.text id="config_description" required class="col-span-2 mb-4">{{$config_data->config_description}}</x-bear::form.text>
        <x-bear::form.text id="config_string">{{$config_data->config_string}}</x-bear::form.text>
        <x-bear::form.text id="encrypted_config_string">{{$config_data->encrypted_config_string}}</x-bear::form.text>
        <x-bear::form.select id="config_boolean">
            <option value="" @if($config_data->config_boolean === null) selected @endif>Null</option>
            <option value="true" @if($config_data->config_boolean === true) selected @endif>True</option>
            <option value="false" @if(!$config_data->config_boolean && $config_data->config_boolean !== null) selected @endif>False</option>
        </x-bear::form.select>
        <x-bear::form.text id="config_integer" pattern="[0-9]*" placeholder="[0-9]*">{{$config_data->config_integer}}</x-bear::form.text>
        <x-bear::form.date id="config_date">{{$config_data->config_date}}</x-bear::form.date>
        <x-bear::form.datetime-local id="config_timestamp">{{$config_data->config_timestamp}}</x-bear::form.datetime-local>
    </div>
</x-bear::dialog.update>
