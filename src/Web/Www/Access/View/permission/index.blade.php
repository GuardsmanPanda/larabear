<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Application Permissions</h1>
        <p class="mt-2 text-sm text-gray-600">A list of all permissions in the system.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonDark icon="lock-closed" hx-get="/bear/access/permission/create" hx-target="#dialog-content">New Permission</x-bear::buttonDark>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Permission Slug</th>
        <th scope="col" class="px-2.5 py-3">Permission Description</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3">Updated</th>
        <th scope="col" class="px-2.5 py-3">Actions</th>
    </x-slot>
    @foreach($permissions as $permission)
        <tr class="hover:bg-sky-50">
            <td class="px-2.5 py-2.5 font-medium">{{$permission->permission_slug}}</td>
            <td class="px-2.5 py-2.5">{{$permission->permission_description}}</td>
            <x-bear::table.cell.relative>{{$permission->created_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$permission->updated_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="pencil" size="tiny" hx-get='{{"/bear/access/permission/$permission->permission_slug/update"}}' hx-target="#dialog-content">Edit</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-delete='{{"/bear/access/permission/$permission->permission_slug"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
