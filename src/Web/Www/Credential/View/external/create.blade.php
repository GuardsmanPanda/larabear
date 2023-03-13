<?php declare(strict_types=1); ?>
<x-bear::dialog.crud type="create" submitText="Create" title="New External Api" endpoint="/bear/credential/external" class="w-[50rem]">
    <x-bear::form.text id="external_api_slug" required pattern="[^|,]+"></x-bear::form.text>
    <x-bear::form.text class="pt-4" id="external_api_description" required placeholder="What is the external api for.."></x-bear::form.text>
    <x-bear::form.select class="pt-4" id="external_api_type" required>
        @foreach(\GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum::cases() as $type)
            <option value="{{$type}}">{{$type}}</option>
        @endforeach
    </x-bear::form.select>
</x-bear::dialog.crud>
