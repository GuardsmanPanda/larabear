<?php declare(strict_types=1); ?>
<x-bear::dialog.crud type="create" submitText="Create" title="New API Access Token" endpoint="/bear/access/token/app" class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="access_token" required pattern="token/[a-zA-Z0-9_.~+/-]+" placeholder="token/[a-zA-Z0-9_.~+/-]+"></x-bear::form.text>
        <x-bear::form.text id="api_primary_key" placeholder="Available In BearGlobalStateService::getApiPrimaryKey()"></x-bear::form.text>
        <x-bear::form.text id="access_token_purpose" required placeholder="Describe the usage of the token.." class="col-span-2"></x-bear::form.text>
        <x-bear::form.text id="route_prefix_restriction" required>/</x-bear::form.text>
        <x-bear::form.text id="request_ip_restriction" required>0.0.0.0/0</x-bear::form.text>
        <x-bear::form.datetime-local id="expires_at"></x-bear::form.datetime-local>
    </div>
</x-bear::dialog.crud>
