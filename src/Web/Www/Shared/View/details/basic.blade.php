<details {{ $attributes->merge(['class' => 'bg-gray-100 rounded-b']) }}>
    <summary class="select-none bg-gray-200 text-lg font-semibold text-gray-900 cursor-pointer py-2 px-4 rounded-t shadow">{{$summary}}</summary>
    <div class="p-4"> {{$slot}} </div>
</details>