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
        <input type="url" name="{{ $id }}" id="{{ $id }}" value="{{ $slot }}" aria-describedby="{{ $label }}" {{ $attributes->whereDoesntStartWith('class') }}
               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded placeholder-gray-400">
    </div>
</div>
