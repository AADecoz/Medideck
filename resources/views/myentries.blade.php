<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Here are your entries!
                </div>
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <h5 class="font-semibold text-md text-gray-800 leading-tight bottom-2">
            &copy; {{now()->year}}  Suncoast Management Ltd.
        </h5>
    </x-slot>

</x-app-layout>
