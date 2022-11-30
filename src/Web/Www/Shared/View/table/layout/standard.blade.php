<table class="min-w-full divide-y divide-gray-300 border shadow">
    <thead class="bg-gray-50 text-left text-sm font-semibold text-gray-800">
    <tr>
        {{$tableHead}}
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white text-sm text-gray-500">
    {{$slot}}
    </tbody>
</table>