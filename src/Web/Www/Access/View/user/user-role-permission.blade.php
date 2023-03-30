<?php declare(strict_types=1); ?>
<x-bear::dialog.basic title="{{$user->user_display_name}}">
    <div>Edit roles and permissions for <span class="font-medium">{{$user->user_display_name}}</span></div>
    <div>A green ring around the permission means the user already has the permission from a role.</div>
    <div class="grid grid-cols-2 gap-8 mt-4">
        <div class="flex flex-col gap-2">
            @foreach($roles as $role)
                @if($role->has_role)
                    <div class="w-48 px-2 py-1 border-2 border-blue-500 rounded cursor-pointer hover:scale-105 font-medium"
                         hx-delete='{{"/bear/access/user/$user->id/role/$role->role_slug"}}'
                         tippy="{{$role->role_description}}" style="transition-duration: 50ms;">
                        ☑️ {{$role->role_slug}}
                    </div>
                @else
                    <div class="w-48 px-2 py-1 border-2 border-gray-200 rounded cursor-pointer hover:scale-105 pl-8"
                         hx-post='{{"/bear/access/user/$user->id/role/$role->role_slug"}}'
                         tippy="{{$role->role_description}}" style="transition-duration: 50ms;">
                        {{$role->role_slug}}
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-col gap-2">
            @foreach($permissions as $permission)
                @if($permission->has_permission)
                    <div class="w-48 px-2 py-1 border-2 border-blue-500 rounded cursor-pointer hover:scale-105 font-medium @if($permission->has_permission_from_role) ring ring-green-400 @endif"
                         hx-delete='{{"/bear/access/user/$user->id/permission/$permission->permission_slug"}}'
                         tippy="{{$permission->permission_description}}" style="transition-duration: 50ms;">
                        ☑️ {{$permission->permission_slug}}
                    </div>
                @else
                    <div class="w-48 px-2 py-1 border-2 border-gray-200 rounded cursor-pointer hover:scale-105 pl-8 @if($permission->has_permission_from_role) ring ring-green-400 @endif"
                         hx-post='{{"/bear/access/user/$user->id/permission/$permission->permission_slug"}}'
                         tippy="{{$permission->permission_description}}" style="transition-duration: 50ms;">
                        {{$permission->permission_slug}}
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</x-bear::dialog.basic>
