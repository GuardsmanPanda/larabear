<?php declare(strict_types=1); ?>
<x-bear::dialog.create hx-post="/bear/credential/oauth2/client" class="w-[50rem]">
    <div class="grid grid-cols-3 gap-4">
        <x-bear::form.text id="oauth2_client_id" required></x-bear::form.text>
        <x-bear::form.select id="oauth2_client_type" required>
            <option value="MICROSOFT">MICROSOFT</option>
            <option value="GOOGLE">GOOGLE</option>
            <option value="META">META</option>
            <option value="HELP_SCOUT">HELP_SCOUT</option>
        </x-bear::form.select>
        <x-bear::form.text id="encrypted_oauth2_client_secret" required></x-bear::form.text>
    </div>
    <div class="grid gap-4">
        <x-bear::form.text id="oauth2_client_description" required></x-bear::form.text>
        <x-bear::form.text id="oauth2_client_base_url"></x-bear::form.text>
        <x-bear::form.text id="oauth2_client_scope"></x-bear::form.text>
        <x-bear::form.text id="oauth2_authorize_uri" required></x-bear::form.text>
        <x-bear::form.text id="oauth2_token_uri" required></x-bear::form.text>
        <x-bear::form.text id="oauth2_user_scope"></x-bear::form.text>
        <x-bear::form.text id="oauth2_client_redirect_path"></x-bear::form.text>
    </div>
</x-bear::dialog.create>
