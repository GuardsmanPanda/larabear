<div {{ $attributes->whereStartsWith('class') }}>
    @if($attributes->has('required'))
        <div class="flex justify-between">
            <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
            <span class="text-sm text-gray-500">Required</span>
        </div>
    @else
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    @endif
    <div class="mt-0.5">
        <input type="datetime-local" name="{{ $id }}" id="{{ $id }}" value="{{ $slot }}" placeholder="{!!$placeholder!!}" aria-describedby="{{ $label }}" {{ $attributes->whereDoesntStartWith('class') }}
        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded placeholder-gray-400">
    </div>
    <input type="hidden" name="{{ $id }}_timezone" id="{{ $id }}_timezone">
    <script>
        document.querySelector('#{{ $id }}_timezone').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
    </script>
</div>
