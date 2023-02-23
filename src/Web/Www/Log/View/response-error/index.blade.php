<?php declare(strict_types=1); ?>
<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Application Response Error Log</h1>
        <p class="mt-2 text-sm text-gray-600">A list of all responses with status code >= 400.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonOutline icon="trash" hx-delete="/bear/log/response-error?response_status_code=404">Delete All 404</x-bear::buttonOutline>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2 w-16">Code</th>
        <th scope="col" class="px-2 py-2 w-20">User ID</th>
        <th scope="col" class="px-1 py-2">Country</th>
        <th scope="col" class="px-2 py-2">Method</th>
        <th scope="col" class="px-2 py-2">Action / Path</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($errors as $error)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 @if($error->response_status_code >= 500) font-medium text-red-700 @endif">{{$error->response_status_code}}</td>
            <x-bear::table.cell.uuid>{{$error->user_id}}</x-bear::table.cell.uuid>
            <x-bear::table.cell.flag :countryCode="$error->request_country_code" :countryName="$error->request_country_code" :ip="$error->request_ip"/>
            <td class="px-2 py-2">{{$error->request_http_method}}</td>
            <td class="px-2 py-2">{{$error->app_action_name ?? $error->request_http_path}}</td>
            <x-bear::table.cell.relative>{{$error->created_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" hx-delete='{{"/bear/log/response-error?id=$error->id"}}'>Delete</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" hx-delete='{{"/bear/log/response-error?app_action_name=$error->app_action_name"}}' tippy="Delete all errors with same App Action">Action</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" hx-delete='{{"/bear/log/response-error?request_http_path=$error->request_http_path"}}' tippy="Delete all errors with same Path">Path</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
