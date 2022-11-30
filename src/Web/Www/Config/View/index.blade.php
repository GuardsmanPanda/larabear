<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Application Configuration</h1>
        <p class="mt-2 text-sm text-gray-600">A list of all roles in the system.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonDark icon="wrench" hx-get="/bear/config/create" hx-target="#dialog-content">New Config</x-bear::buttonDark>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Config Key</th>
        <th scope="col" class="px-2.5 py-3">Config Description</th>
        <th scope="col" class="whitespace-nowrap px-2.5 py-3">Config Type</th>
        <th scope="col" class="whitespace-nowrap px-2.5 py-3">Config Value</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="hidden 2xl:table-cell px-2.5 py-3">Updated</th>
        <th scope="col" class="px-2.5 py-3 ">Actions</th>
    </x-slot>
    @foreach($configs as $config)
        <tr class="hover:bg-sky-50">
            <td class="px-2.5 py-2.5">{{$config->config_key}}</td>
            <td class="px-2.5 py-2.5">{{$config->config_description}}</td>
            <td class="px-2.5 py-2.5">{{$config->config_data_type}}</td>
            <td class="px-2.5 py-2.5">
                @if($config->config_data_type === 'ENCRYPTED_STRING')
                    HIDDEN
                @elseif($config->config_boolean !== null)
                    {{$config->config_boolean ? 'TRUE' : 'FALSE'}}
                @else
                    {{$config->config_string ?? $config->config_integer ?? $config->config_date ?? $config->config_timestamp ?? $config->config_json ?? 'NULL'}}
                @endif
            </td>
            <x-bear::table.cell.relative>{{$config->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative class="hidden 2xl:table-cell">{{$config->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="pencil" size="tiny" hx-get='{{"/bear/config/$config->config_key/update"}}' hx-target="#dialog-content">Edit</x-bear::buttonOutline>
                @if(!str_starts_with(haystack: $config->config_key, needle: 'larabear'))
                    <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/config/$config->config_key"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
                @endif
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
