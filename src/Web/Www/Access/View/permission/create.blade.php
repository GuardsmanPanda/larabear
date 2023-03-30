<?php declare(strict_types=1); ?>
<x-bear::dialog.create hx-post="/bear/access/permission" class="w-[50rem]">
    <x-bear::form.text id="permission_slug"  pattern="[^|,]+" required></x-bear::form.text>
    <x-bear::form.text class="pt-4" id="permission_description" placeholder="What does the permission grant access to" required></x-bear::form.text>
</x-bear::dialog.create>
