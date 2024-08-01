<?php declare(strict_types=1); ?>
<x-bear::dialog.update hx-patch='{{ "/bear/credential/oauth2/client/$client->id" }}' class="w-[50rem]">
    <x-bear::form.text id="encrypted_secret"></x-bear::form.text>
</x-bear::dialog.update>