<a href="{{$path}}" hx-fastnav="sidebar-active" {{$attributes->merge(['class' => $classes])}}>
    <x-bear::icon class="mr-3 flex-shrink-0" size="6" name="{{$icon}}"/>
    <span class="flex-1">{{$slot}}</span>
</a>