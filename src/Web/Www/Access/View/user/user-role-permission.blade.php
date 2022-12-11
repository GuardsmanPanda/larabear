<x-bear::dialog.basic title="{{$user->user_display_name}}">
    <div>Edit roles and permissions for <span class="font-medium">{{$user->user_display_name}}</span></div>
    <div class="flex flex-col gap-2" hx-target="#dialog-content">
        @foreach($permissions as $permission)
            @if($permission->has_permission)
                <div class="w-48 px-2 py-1 border-2 border-blue-500 rounded cursor-pointer hover:scale-105 font-medium"
                     hx-delete='{{"/bear/access/user/$user_id/permission/$permission->permission_slug"}}'
                     tippy="{{$permission->permission_description}}" style="transition-duration: 50ms;">
                    ☑️ {{$permission->permission_slug}}
                </div>
            @else
                <div class="w-48 px-2 py-1 border-2 border-gray-200 rounded cursor-pointer hover:scale-105 pl-8"
                     hx-post='{{"/bear/access/user/$user_id/permission/$permission->permission_slug"}}'
                     tippy="{{$permission->permission_description}}" style="transition-duration: 50ms;">
                    {{$permission->permission_slug}}
                </div>
            @endif
        @endforeach
    </div>
</x-bear::dialog.basic>