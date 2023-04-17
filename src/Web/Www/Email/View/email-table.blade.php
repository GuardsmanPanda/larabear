<?php declare(strict_types=1); ?>
<x-bear::table.layout.standard>
    <x-slot name="tableHead">
        <th scope="col" class="px-2 py-2">Email To</th>
        <th scope="col" class="px-2 py-2">Email CC</th>
        <th scope="col" class="px-2 py-2">Email Subject</th>
        <th scope="col" class="px-2 py-2">Email Sent</th>
        <th scope="col" class="px-2 py-2">Error</th>
        <th scope="col" class="px-2 py-2">Dev</th>
        <th scope="col" class="px-2 py-2">Created At</th>
    </x-slot>
    @foreach($emails as $email)
        <tr class="hover:bg-sky-50">
            <td class="cursor-pointer h-full py-2 px-2" hx-get="/bear/email/{{$email->id}}/content-dialog">{{$email->email_to}}</td>
            <td class="cursor-pointer h-full py-2 px-2" hx-get="/bear/email/{{$email->id}}/content-dialog">{{$email->email_cc}}</td>
            <td class="cursor-pointer h-full py-2 px-2" hx-get="/bear/email/{{$email->id}}/content-dialog">{{$email->email_subject}}</td>
            <x-bear::table.cell.relative>{{$email->email_sent_at}}</x-bear::table.cell.relative>
            <td class="px-2 py-2">{{$email->email_error_message}}</td>
            <td class="px-2 py-2">{{$email->is_sandboxed}}</td>
            <x-bear::table.cell.relative>{{$email->created_at}}</x-bear::table.cell.relative>
        </tr>
    @endforeach
</x-bear::table.layout.standard>
