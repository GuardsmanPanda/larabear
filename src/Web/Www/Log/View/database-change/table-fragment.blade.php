<?php declare(strict_types=1); ?>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2.5 py-3">Table Name</th>
        <th scope="col" class="px-2.5 py-3">Data Field</th>
        <th scope="col" class="px-2.5 py-3">Old Value</th>
        <th scope="col" class="px-2.5 py-3">New Value</th>
        <th scope="col" class="px-2.5 py-3">Changed By</th>
        <th scope="col" class="px-2.5 py-3">Changed</th>
    </x-slot>
    @foreach($changes as $change)
        <tr class="hover:bg-sky-50">
            <td class="px-2.5 py-2.5">{{$change->table_name}}</td>
            <td class="px-2.5 py-2.5">{{$change->column_name}}</td>
            <td class="px-2.5 py-2.5">{{$change->old_value}}</td>
            <td class="px-2.5 py-2.5">{{$change->new_value}}</td>
            <td class="px-2.5 py-2.5">{{$change->user_name}}</td>
            <x-bear::table.cell.relative>{{$change->created_at}}</x-bear::table.cell.relative>
        </tr>
    @endforeach
</x-bear::table.layout.standard>