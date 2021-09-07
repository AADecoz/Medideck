<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DM Scope') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome in DMscope!
                </div>


                    <div class="border rounded overflow-hidden flex p-6">
                        <input type="text" class="px-4 py-2 border-2 w-1/2 shadow-md" placeholder="Search...">
                        <button class="flex items-center justify-center px-4 border-l bg-green-700 shadow-md">
                            <svg class="h-5 w-5 text-white shadow-md" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                        </button>
                    </div>


                    <section class="border rounded overflow-hidden xl:flex flex-wrap p-6 justify-between">
                        <div x-data="{ open: false }" class="grid items-center justify-center px-4 w-2/5 h-10 bg-blue-800 text-white shadow-md">
                            {{ __('ATC filtering') }}
                        </div>



                        <div x-data="{ open: false }" class="grid items-center justify-center px-4 w-2/5 h-10 bg-blue-800 text-white shadow-md">
                            {{ __('Indication filtering') }}
                        </div>



                    <div :class="{'block': open, 'hidden': ! open}" class=" grid px-4 w-2/5 h-96 bg-white text-white shadow-md">

                    </div>



                    <div :class="{'block': open, 'hidden': ! open}" class=" grid px-4 w-2/5 h-96 bg-white text-white shadow-md">

                    </div>
                    </section>



            </div>
        </div>
    </div>
    <x-slot name="footer">
        <h5 class="font-semibold text-md text-gray-800 leading-tight bottom-2">
            &copy; {{now()->year}}  Suncoast Management Ltd.
        </h5>
    </x-slot>
</x-app-layout>
