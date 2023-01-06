<?php declare(strict_types=1); ?>
<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Application Roles</h1>
        <p class="mt-2 text-sm text-gray-600">A list of all roles in the system.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonDark icon="clipboard-document" hx-get="/bear/access/role/create" hx-target="#dialog-content">New role</x-bear::buttonDark>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Role Slug</th>
        <th scope="col" class="px-2.5 py-3">Role Description</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3">Updated</th>
        <th scope="col" class="px-2.5 py-3">Actions</th>
    </x-slot>
    @foreach($roles as $role)
        <tr class="hover:bg-sky-50">
            <td class="px-2.5 py-2.5 font-medium">{{$role->role_slug}}</td>
            <td class="px-2.5 py-2.5">{{$role->role_description}}</td>
            <x-bear::table.cell.relative>{{$role->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$role->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="lock-closed" size="tiny" hx-get='{{"/bear/access/role/$role->role_slug/permission"}}' hx-target="#dialog-content">{{$role->permission_count}} Permissions</x-bear::buttonOutline>
                <x-bear::buttonOutline icon="pencil" size="tiny" hx-get='{{"/bear/access/role/$role->role_slug/update"}}' hx-target="#dialog-content">Edit</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/access/role/$role->role_slug"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>