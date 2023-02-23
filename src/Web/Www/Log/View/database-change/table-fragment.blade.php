<?php declare(strict_types=1); ?>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Table Name</th>
        <th scope="col" class="px-2 py-2">Data Field</th>
        <th scope="col" class="px-2 py-2">Old Value</th>
        <th scope="col" class="px-2 py-2">New Value</th>
        <th scope="col" class="px-2 py-2">Changed By</th>
        <th scope="col" class="px-2 py-2">Changed</th>
    </x-slot>
    @foreach($changes as $change)
        <tr class="hover:bg-sky-50">
            <td class="px-2 py-2">{{$change->table_name}}</td>
            <td class="px-2 py-2">{{$change->column_name}}</td>
            <td class="px-2 py-2">{{$change->old_value}}</td>
            <td class="px-2 py-2">{{$change->new_value}}</td>
            <td class="px-2 py-2">{{$change->user_name}}</td>
            <x-bear::table.cell.relative>{{$change->created_at}}</x-bear::table.cell.relative>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
