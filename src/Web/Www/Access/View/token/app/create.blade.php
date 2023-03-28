<?php declare(strict_types=1); ?>
<x-bear::dialog.create title="New API Access Token" hx-post="/bear/access/token/app" class="w-[50rem]">
    <x-bear::section.basic title="Quick Actions" color="indigo-100" size="small" class="mb-4">
        <x-bear::button.dark icon="eye" size="small" hx-get="/bear/access/token/app/create?type=monitoring" hx-target="#dialog-content">Monitoring Token</x-bear::button.dark>
    </x-bear::section.basic>
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="access_token" pattern="token/[a-zA-Z0-9_.~+/-]+|" placeholder="token/[a-zA-Z0-9_.~+/-]+ (Leave blank to auto generate)"></x-bear::form.text>
        <x-bear::form.text id="api_primary_key" placeholder="Available In BearGlobalStateService::getApiPrimaryKey()"></x-bear::form.text>
        <x-bear::form.text id="access_token_purpose" required placeholder="Describe the usage of the token.." class="col-span-2">{{$access_token_purpose}}</x-bear::form.text>
        <x-bear::form.text id="route_prefix_restriction" required>{{$route_prefix_restriction}}</x-bear::form.text>
        <x-bear::form.text id="request_ip_restriction" required>0.0.0.0/0</x-bear::form.text>
        <x-bear::form.datetime-local id="expires_at"></x-bear::form.datetime-local>
    </div>
</x-bear::dialog.create>
