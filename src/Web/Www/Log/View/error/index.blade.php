<?php declare(strict_types=1); ?>
<div class="mb-4 sm:flex sm:items-end">
    <h1 class="text-2xl font-semibold text-gray-800">Application Error Log</h1>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Namespace</th>
        <th scope="col" class="px-2.5 py-3">Key</th>
        <th scope="col" class="px-2.5 py-3">Severity</th>
        <th scope="col" class="px-2.5 py-3">Message</th>
        <th scope="col" class="px-2.5 py-3">Remedy</th>
        <th scope="col" class="px-2.5 py-3">Exception Message</th>
        <th scope="col" class="px-2.5 py-3">Exception Trace</th>
        <th scope="col" class="px-2.5 py-3">User ID</th>
        <th scope="col" class="px-2.5 py-3">Country</th>
        <th scope="col" class="px-2.5 py-3">Method</th>
        <th scope="col" class="px-2.5 py-3">Action / Path</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3">Actions</th>
    </x-slot>
    @foreach($errors as $error)
        <tr class="hover:bg-sky-50">
            <td class="px-2.5 py-2.5 cursor-pointer">{{$error->error_key}}</td>
            <td class="px-2.5 py-2.5">{{$error->error_severity}}</td>
            <td class="px-2.5 py-2.5">{{$error->error_message}}</td>
            <td class="px-2.5 py-2.5">{{$error->error_remedy}}</td>
            <td class="px-2.5 py-2.5">{{$error->exception_message}}</td>
            <td class="px-2.5 py-2.5">{{$error->exception_trace}}</td>
            <td class="px-2.5 py-2.5">{{$error->user_id}}</td>
            <td class="px-2.5 py-2.5">{{$error->request_country_code}}</td>
            <td class="px-2.5 py-2.5">{{$error->request_http_method}}</td>
            <td class="px-2.5 py-2.5">{{$error->app_action_name ?? $error->request_http_path}}</td>
            <x-bear::table.cell.relative>{{$error->created_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" hx-delete='{{"/bear/log/error?id=$error->id"}}'>Delete</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" class="pl-2" hx-delete='{{"/bear/log/error?error_key=$error->error_key"}}' tippy="Delete all errors with same Key">Key
                </x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" icon="trash" size="tiny" class="pl-2" hx-delete='{{"/bear/log/error?app_action_name=$error->app_action_name"}}' tippy="Delete all errors with same App Action">Action</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
