<x-bear::dialog.crud type="create" submitText="Create" title="New role" endpoint="/bear/access/role" class="w-[50rem]">
    <x-bear::form.text id="role_slug" required pattern="[^|,]+"></x-bear::form.text>
    <x-bear::form.text class="pt-4" id="role_description" required placeholder="What does the role grant access to"></x-bear::form.text>
</x-bear::dialog.crud>