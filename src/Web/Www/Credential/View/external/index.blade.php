<?php declare(strict_types=1); ?>
<x-bear::heading.h1-section subtitle="A list of all roles in the system.">External Api Credentials
</x-bear::heading.h1-section>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">External Slug</th>
        <th scope="col" class="px-2 py-2">External Description</th>
        <th scope="col" class="px-2 py-2">External Type</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($external_apis as $api)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$api->external_api_slug}}</td>
            <td class="px-2 py-2">{{$api->external_api_description}}</td>
            <td class="px-2 py-2">{{$api->external_api_type}}</td>
            <x-bear::table.cell.relative>{{$api->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$api->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
