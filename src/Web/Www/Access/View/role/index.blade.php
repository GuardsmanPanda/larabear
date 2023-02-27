<?php declare(strict_types=1); ?>
<x-bear::heading.h1 subtitle="A list of all roles in the system.">Application Roles
    <x-slot name="extra">
        <x-bear::button.dark icon="lock-closed" hx-get="/bear/access/role/create" hx-target="#dialog-content">New Role</x-bear::button.dark>
    </x-slot>
</x-bear::heading.h1>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Role Slug</th>
        <th scope="col" class="px-2 py-2">Role Description</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($roles as $role)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$role->role_slug}}</td>
            <td class="px-2 py-2">{{$role->role_description}}</td>
            <x-bear::table.cell.relative>{{$role->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$role->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::button.outline icon="lock-closed" size="tiny" hx-get='{{"/bear/access/role/$role->role_slug/permission"}}' hx-target="#dialog-content">{{$role->permission_count}} Permissions</x-bear::button.outline>
                <x-bear::button.outline icon="pencil" size="tiny" hx-get='{{"/bear/access/role/$role->role_slug/update"}}' hx-target="#dialog-content">Edit</x-bear::button.outline>
                <x-bear::button.outline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/access/role/$role->role_slug"}}' hx-target="closest tr">Delete</x-bear::button.outline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
