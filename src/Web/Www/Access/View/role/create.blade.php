<?php declare(strict_types=1); ?>
<x-bear::dialog.create hx-post="/bear/access/role" class="w-[50rem]">
    <x-bear::form.text id="role_slug" required pattern="[^|,]+"></x-bear::form.text>
    <x-bear::form.text class="pt-4" id="role_description" required placeholder="What does the role grant access to"></x-bear::form.text>
</x-bear::dialog.create>
