<form id="dialog-form" action="/bear/oauth2/client/{{$oauth2_client_id}}/redirect?test=22" autocomplete="off" class ="py-4 px-6">
    <x-bear::form.text id="scope" required></x-bear::form.text>
</form>
<div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
    <form method="dialog"><x-bear::button type="submit">Close</x-bear::button></form>
    <x-bear::button-dark form="dialog-form" type="submit">Add User</x-bear::button-dark>
</div>
<div id="dialog-title" hx-swap-oob="true">Add User To Client</div>