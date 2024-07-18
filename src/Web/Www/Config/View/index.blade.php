<?php declare(strict_types=1); ?>
<x-bear::heading.h1-section subtitle="A list of all roles in the system.">Application Configuration
    <x-slot name="extra">
        <x-bear::button.dark icon="wrench" hx-get="/bear/config/create">New Config</x-bear::button.dark>
    </x-slot>
</x-bear::heading.h1-section>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Config Key</th>
        <th scope="col" class="px-2 py-2">Config Description</th>
        <th scope="col" class="whitespace-nowrap px-2 py-2">Config Type</th>
        <th scope="col" class="whitespace-nowrap px-2 py-2">Config Value</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="hidden 2xl:table-cell px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2 ">Actions</th>
    </x-slot>
    @foreach($configs as $config)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$config->config_key}}</td>
            <td class="px-2 py-2">{{$config->config_description}}</td>
            <td class="px-2 py-2">
                @if($config->encrypted_sctring !== null)
                    HIDDEN
                @elseif($config->config_boolean !== null)
                    {{$config->config_boolean ? 'TRUE' : 'FALSE'}}
                @else
                    {{$config->config_string ?? $config->config_integer ?? $config->config_date ?? $config->config_timestamp ?? $config->config_json ?? 'NULL'}}
                @endif
            </td>
            <x-bear::table.cell.relative>{{$config->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative class="hidden 2xl:table-cell">{{$config->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::button.outline icon="pencil" size="tiny" hx-get='{{"/bear/config/$config->config_key/update"}}'>Edit</x-bear::button.outline>
                @if(!str_starts_with(haystack: $config->config_key, needle: 'larabear'))
                    <x-bear::button.outline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/config/$config->config_key"}}' hx-target="closest tr">Delete</x-bear::button.outline>
                @endif
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
