<?php declare(strict_types=1); ?>
<x-bear::dialog.update hx-patch='{{ "/bear/credential/external/$enum" }}'>
    <x-bear::form.text id="encrypted_token"></x-bear::form.text>
</x-bear::dialog.update>
