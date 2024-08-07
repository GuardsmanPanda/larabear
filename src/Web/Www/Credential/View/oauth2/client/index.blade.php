<?php declare(strict_types=1); ?>
<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Oauth2 Clients</h1>
        <p class="mt-2 text-sm text-gray-600">All oauth2 clients, here you can edit clients or list and add users for each client.</p>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Id</th>
        <th scope="col" class="px-2 py-2">Type</th>
        <th scope="col" class="whitespace-nowrap px-2 py-2">Description</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2 ">Actions</th>
    </x-slot>
    @foreach($clients as $client)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$client->id}}</td>
            <td class="px-2 py-2">{{$client->oauth2_client_type_enum}}</td>
            <td class="px-2 py-2">{{$client->description}}</td>
            <x-bear::table.cell.relative>{{$client->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$client->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::button.dark icon="user-plus" size="tiny" hx-get='{{"/bear/credential/oauth2/client/$client->id/add-user"}}'>Add User</x-bear::button.dark>
                <x-bear::button.outline icon="pencil" size="tiny" hx-get='{{"/bear/credential/oauth2/client/$client->id/update"}}'>Update Secret</x-bear::button.outline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
