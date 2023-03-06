<?php declare(strict_types=1); ?>
<form id="dialog-form" action="/bear/auth/oauth2-client/{{$oauth2_client_id}}/redirect" class ="py-4 px-6">
    <input type="hidden" name="redirect_path" value="{{urlencode('/bear/credential/oauth2/client')}}">
    <input type="hidden" name="login_user" value="false">
    <input type="hidden" name="account_prompt" value="true">
    <input type="hidden" name="internal_redirect" value="true">
    <x-bear::form.text id="special_scope"></x-bear::form.text>
</form>
<div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
    <form method="dialog"><x-bear::button.light type="submit">Close</x-bear::button.light></form>
    <x-bear::button.dark form="dialog-form" type="submit">Add User</x-bear::button.dark>
</div>
<div id="dialog-title" hx-swap-oob="true">Add User To Client</div>
