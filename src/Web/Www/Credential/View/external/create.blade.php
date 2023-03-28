<?php declare(strict_types=1); ?>
<x-bear::dialog.create title="New External Api" hx-post="/bear/credential/external" class="w-[50rem]">
    <div class="grid grid-cols-2 gap-4">
        <x-bear::form.text id="external_api_slug" required></x-bear::form.text>
        <x-bear::form.text id="external_api_description" required placeholder="What is the external api for.."></x-bear::form.text>
        <x-bear::form.select id="external_api_type" required :options="$external_api_types" selected="OAUTH2"></x-bear::form.select>
        <x-bear::form.text id="encrypted_external_api_token" placeholder="username:password for basic auth"></x-bear::form.text>
        <x-bear::form.datalist id="oauth2_client_id" :options="$oauth2_clients"></x-bear::form.datalist>
        <x-bear::form.datalist id="oauth2_user_id" :options="$oauth2_users"></x-bear::form.datalist>
    </div>
</x-bear::dialog.create>
