<?php declare(strict_types=1); ?>
<x-bear::heading.h1-section subtitle="A list of all roles in the system.">External Api Credentials
</x-bear::heading.h1-section>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Enum</th>
        <th scope="col" class="px-2 py-2">Description</th>
        <th scope="col" class="px-2 py-2">Base URL</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($external_apis as $api)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$api->enum}}</td>
            <td class="px-2 py-2">{{$api->description}}</td>
            <td class="px-2 py-2">{{$api->base_url}}</td>
            <x-bear::table.cell.relative>{{$api->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$api->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::button.outline icon="pencil" size="tiny" hx-get='{{"/bear/credential/external/$api->enum/update"}}'>Edit Key</x-bear::button.outline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
