<?php declare(strict_types=1); ?>
<x-bear::heading.h1 subtitle="A list of all users in the system, manage users, roles and permissions.">Application Users
    <x-slot name="extra">
        <x-bear::buttonDark icon="user" hx-get="/bear/access/user/create" hx-target="#dialog-content">New user</x-bear::buttonDark>
    </x-slot>
</x-bear::heading.h1>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">User Id</th>
        <th scope="col" class="px-2 py-2">Country</th>
        <th scope="col" class="px-2 py-2">User Name</th>
        <th scope="col" class="px-2 py-2">User Email</th>
        <th scope="col" class="px-2 py-2">Active</th>
        <th scope="col" class="px-2 py-2">Last Login</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($users as $user)
        <tr class="hover:bg-sky-50">
            <x-bear::table.cell.uuid class="font-medium">{{$user->id}}</x-bear::table.cell.uuid>
            <x-bear::table.cell.flag :countryCode="$user->user_country_iso2_code" :countryName="$user->user_country_iso2_code"/>
            <td class="px-2 py-2">{{$user->user_display_name}}</td>
            <td class="px-2 py-2">{{$user->user_display_name}}</td>
            <td class="px-2 py-2">{{$user->is_user_activated ? 'True' : ''}}</td>
            <x-bear::table.cell.relative>{{$user->last_login_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$user->created_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::buttonOutline icon="lock-closed" size="tiny" hx-get='{{"/bear/access/user/$user->id/role-and-permission"}}' hx-target="#dialog-content">Roles & Permissions</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-confirm="Are you sure you wish to delete {{$user->user_display_name}}" hx-delete='{{"/bear/access/user/$user->id"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
