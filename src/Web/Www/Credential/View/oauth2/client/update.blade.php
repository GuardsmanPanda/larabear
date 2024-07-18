<?php declare(strict_types=1); ?>
<x-bear::dialog.create hx-post="/bear/credential/oauth2/client" class="w-[50rem]">
    <div class="grid grid-cols-3 gap-4">
        <x-bear::form.text id="oauth2_client_id" required>{{$client->oauth2_client_id}}</x-bear::form.text>
        <x-bear::form.select id="oauth2_client_type" required>
            <option value="MICROSOFT" @if($client->oauth2_client_type === 'MICROSOFT') selected @endif>MICROSOFT</option>
            <option value="GOOGLE" @if($client->oauth2_client_type === 'GOOGLE') selected @endif>GOOGLE</option>
            <option value="META" @if($client->oauth2_client_type === 'META') selected @endif>META</option>
            <option value="HELP_SCOUT" @if($client->oauth2_client_type === 'HELP_SCOUT') selected @endif>HELP_SCOUT</option>
        </x-bear::form.select>
        <x-bear::form.text id="encrypted_oauth2_client_secret" required>{{$client->encrypted_oauth2_client_secret}}</x-bear::form.text>
    </div>
    <div class="grid gap-4">
        <x-bear::form.text id="oauth2_client_description" required>{{$client->oauth2_client_description}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_client_base_url">{{$client->oauth2_client_base_url}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_client_scope">{{$client->oauth2_client_scope}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_authorize_uri" required>{{$client->oauth2_authorize_uri}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_token_uri" required>{{$client->oauth2_token_uri}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_user_scope">{{$client->oauth2_user_scope}}</x-bear::form.text>
        <x-bear::form.text id="oauth2_client_redirect_path">{{$client->oauth2_client_redirect_path}}</x-bear::form.text>
    </div>
</x-bear::dialog.create>
