<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Oauth2 Clients</h1>
        <p class="mt-2 text-sm text-gray-600">All oauth2 clients, here you can edit clients or list and add users for each client.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonDark icon="rectangle-group" hx-get="/bear/oauth2/client/create" dialog="true">New Client</x-bear::buttonDark>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Id</th>
        <th scope="col" class="px-2.5 py-3">Slug</th>
        <th scope="col" class="px-2.5 py-3">Type</th>
        <th scope="col" class="whitespace-nowrap px-2.5 py-3">Description</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3 ">Actions</th>
    </x-slot>
    @foreach($clients as $client)
        <tr class="hover:bg-sky-50">
            <x-bear::table.cell.uuid>{{$client->oauth2_client_id}}</x-bear::table.cell.uuid>
            <td class="px-2.5 py-2.5">{{$client->oauth2_client_slug}}</td>
            <td class="px-2.5 py-2.5">{{$client->oauth2_client_type}}</td>
            <td class="px-2.5 py-2.5">{{$client->oauth2_client_description}}</td>
            <x-bear::table.cell.relative>{{$client->created_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="pencil" size="tiny" hx-get='{{"/bear/config/$client->oauth2_client_id/update"}}' dialog="true">Edit</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
