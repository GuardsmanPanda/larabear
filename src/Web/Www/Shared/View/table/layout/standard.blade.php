<div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50 text-left text-sm font-semibold text-gray-800">
                <tr>
                    {{$tableHead}}
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white text-sm text-gray-500">
                {{$slot}}
                </tbody>
            </table>
        </div>
    </div>
</div>
