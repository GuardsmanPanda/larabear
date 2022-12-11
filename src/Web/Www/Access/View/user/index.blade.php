<div class="mb-4 sm:flex sm:items-end">
    <div class="sm:flex-auto">
        <h1 class="text-2xl font-semibold text-gray-800">Application Users</h1>
        <p class="mt-2 text-sm text-gray-600">A list of all users in the system, manage users, roles and permissions.</p>
    </div>
    <div class="mt-2 sm:mt-0 sm:ml-16 sm:flex-none">
        <x-bear::buttonDark icon="user" hx-get="/bear/access/user/create" hx-target="#dialog-content">New user</x-bear::buttonDark>
    </div>
</div>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">User Id</th>
        <th scope="col" class="px-2.5 py-3">Country</th>
        <th scope="col" class="px-2.5 py-3">User Name</th>
        <th scope="col" class="px-2.5 py-3">User Email</th>
        <th scope="col" class="px-2.5 py-3">Active</th>
        <th scope="col" class="px-2.5 py-3">Last Login</th>
        <th scope="col" class="px-2.5 py-3">Created</th>
        <th scope="col" class="px-2.5 py-3">Actions</th>
    </x-slot>
    @foreach($users as $user)
        <tr class="hover:bg-sky-50">
            <x-bear::table.cell.uuid>{{$user->id}}</x-bear::table.cell.uuid>
            <x-bear::table.cell.flag :countryCode="$user->user_country_iso2_code" :countryName="$user->user_country_iso2_cod"/>
            <td class="px-2.5 py-2.5">{{$user->user_display_name}}</td>
            <td class="px-2.5 py-2.5">{{$user->user_display_name}}</td>
            <td class="px-2.5 py-2.5">{{$user->is_user_activated ? 'True' : ''}}</td>
            <x-bear::table.cell.relative>{{$user->last_login_at}}</x-bear::table.cell.relative>
            <x-bear::table.cell.relative>{{$user->created_at}}</x-bear::table.cell.relative>
            <td class="px-2.5">
                <x-bear::buttonOutline icon="lock-closed" size="tiny" hx-get='{{"/bear/access/user/$user->id/role-and-permission"}}' hx-target="#dialog-content">Roles & Permissions</x-bear::buttonOutline>
                <x-bear::buttonOutline color="red" class="ml-1" icon="trash" size="tiny" hx-confirm="Are you sure you wish to delete {{$user->user_display_name}}" hx-delete='{{"/bear/access/user/$user->id"}}' hx-target="closest tr">Delete</x-bear::buttonOutline>
            </td>
        </tr>
    @endforeach
</x-bear::table.layout.standard>