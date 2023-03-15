<?php declare(strict_types=1); ?>
<div class="grid grid-cols-2" xmlns:x-bear="http://www.w3.org/1999/html">
    <div>
        <x-bear::table.layout.standard>
            <x-slot name="tableHead">
                <th scope="col" class="px-2 py-2">Name</th>
                <th scope="col" class="px-2 py-2">Value</th>
                <th scope="col" class="px-2 py-2">Info</th>
            </x-slot>
            @foreach($php_info as $info)
                <tr class="hover:bg-sky-50">
                    <td class="px-2 py-2 font-medium">{{$info['name']}}</td>
                    <td class="px-2 py-2">{{$info['value']}}</td>
                    <td class="px-2 py-2">
                        @foreach($info['info'] as $key => $info_item)
                            <div>{{$key}}, {{$info_item}}</div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </x-bear::table.layout.standard>
    </div>
    <div></div>
</div>
