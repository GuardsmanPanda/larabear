<?php declare(strict_types=1); ?>
<x-bear::dialog.update hx-patch='{{ "/bear/credential/external/$enum" }}'>
    <div class="grid gap-4">
        <x-bear::form.text id="encrypted_token"></x-bear::form.text>
    </div>
</x-bear::dialog.update>
