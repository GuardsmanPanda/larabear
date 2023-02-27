<?php declare(strict_types=1); ?>
<x-bear::heading.h1 subtitle="A list of all permissions in the system.">Application Permissions
    <x-slot name="extra">
        <x-bear::button.dark icon="lock-closed" hx-get="/bear/access/permission/create" hx-target="#dialog-content">New Permission</x-bear::button.dark>
    </x-slot>
</x-bear::heading.h1>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Permission Slug</th>
        <th scope="col" class="px-2 py-2">Permission Description</th>
        <th scope="col" class="px-2 py-2">Created</th>
        <th scope="col" class="px-2 py-2">Updated</th>
        <th scope="col" class="px-2 py-2">Actions</th>
    </x-slot>
    @foreach($permissions as $permission)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2 font-medium">{{$permission->permission_slug}}</td>
            <td class="px-2 py-2">{{$permission->permission_description}}</td>
            <x-bear::table.cell.relative>{{$permission->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$permission->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2">
                <x-bear::button.outline icon="pencil" size="tiny" hx-get='{{"/bear/access/permission/$permission->permission_slug/update"}}' hx-target="#dialog-content">Edit</x-bear::button.outline>
                <x-bear::button.outline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/access/permission/$permission->permission_slug"}}' hx-target="closest tr">Delete</x-bear::button.outline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
