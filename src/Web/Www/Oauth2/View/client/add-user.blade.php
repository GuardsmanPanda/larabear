<form id="dialog-form" action="/bear/auth/oauth2-client/{{$oauth2_client_id}}/redirect" class ="py-4 px-6">
    <input type="hidden" name="redirect-patch" value="{{urlencode('/bear/oauth2/client')}}">
    <input type="hidden" name="login-user" value="false">
    <input type="hidden" name="account-prompt" value="true">
    <x-bear::form.text id="special-scope" required></x-bear::form.text>
</form>
<div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
    <form method="dialog"><x-bear::button type="submit">Close</x-bear::button></form>
    <x-bear::button-dark form="dialog-form" type="submit">Add User</x-bear::button-dark>
</div>
<div id="dialog-title" hx-swap-oob="true">Add User To Client</div>