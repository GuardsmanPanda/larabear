<?php declare(strict_types=1); ?>
<x-bear::heading.h1 subtitle="A list of all application (API) access tokens.">Application Access Tokens
    <x-slot name="extra">
        <x-bear::buttonDark icon="key" hx-get="/bear/access/token/app/create" hx-target="#dialog-content">New Token</x-bear::buttonDark>
    </x-slot>
</x-bear::heading.h1>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">ID</th>
        <th scope="col" class="px-2.5 py-3">Primary Key</th>
        <th scope="col" class="px-2.5 py-3">Prefix</th>
        <th scope="col" class="px-2.5 py-3">IP</th>
        <th scope="col" class="px-2.5 py-3">Expiry</th>
        <th scope="col" class="px-2.5 py-3">Purpose</th>
        <th scope="col" class="px-2.5 py-3 ">Last Usage</th>
        <th scope="col" class="px-2.5 py-3">Hostname</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3">Updated</th>
        <th scope="col" class="px-2.5 py-3">Actions</th>
    </x-slot>
    @foreach($access_tokens as $token)
        <tr class="hover:bg-sky-50">
            <x-bear::table.cell.uuid class="font-medium">{{$token->id}}</x-bear::table.cell.uuid>
            <td class="px-2.5 py-2.5">{{$token->api_primary_key}}</td>
            <td class="px-2.5 py-2.5">{{$token->route_prefix_restriction}}</td>
            <td class="px-2.5 py-2.5">{{$token->request_ip_restriction}}</td>
            <x-bear::table.cell.relative>{{$token->expires_at}}</x-bear::table.cell.relative>
            <td class="px-2.5 py-2.5" tippy="{{$token->access_token_purpose}}">{{$token->access_token_purpose}}</td>
            <x-bear::table.cell.relative>{{$token->last_usage_at}}</x-bear::table.cell.relative>
            <td class="px-2.5 py-2.5">{{$token->server_hostname_restriction}}</td>
            <x-bear::table.cell.relative>{{$token->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$token->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="pencil" size="tiny" hx-get='{{"/bear/access/token/app/$token->id/update"}}' hx-target="#dialog-content">Edit</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/access/token/app/$token->id"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
