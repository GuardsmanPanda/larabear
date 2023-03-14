<?php declare(strict_types=1); ?>
<x-bear::dialog.crud title="Update" endpoint='{!! "/bear/access/token/app/$access_token->id"!!}' class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="api_primary_key" label="API Primary Key" placeholder="Available In BearGlobalStateService::getApiPrimaryKey()" class="col-span-2">{{$access_token->api_primary_key}}</x-bear::form.text>
        <x-bear::form.text id="access_token_purpose" required placeholder="Describe the usage of the token.." class="col-span-2">{{$access_token->access_token_purpose}}</x-bear::form.text>
        <x-bear::form.text id="route_prefix_restriction" required>{{$access_token->route_prefix_restriction}}</x-bear::form.text>
        <x-bear::form.text id="request_ip_restriction" required>{{$access_token->request_ip_restriction}}</x-bear::form.text>
        <x-bear::form.datetime-local id="expires_at">{{$access_token->expires_at}}</x-bear::form.datetime-local>
    </div>
</x-bear::dialog.crud>
