<link href="{{ asset('css/table.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border rounded overflow-hidden flex p-6">
                        <input type="text" class="px-4 py-2 border-2 w-1/2 shadow-md" placeholder="Filter...">
                        <button class="flex items-center justify-center px-4 border-l bg-green-700">
                            <svg class="h-5 w-5 text-white " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                        </button>
                    </div>
                    <table class="table-fixed shadow-md">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Satus</th>
                            <th>Company</th>
                            <th>Subscriptions</th>
                            <th></th>
                            <th></th>
                        </tr>

                    @foreach($user as $users)
                            <tr>
                            <td class="p-2">{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td><a href="mailto:{{$users->email}}" class="p-2 hover:text-blue-900">{{$users->email}}</a></td>
                            <td>Logged In</td>
                            <td>Glaxo Smith Kline</td>
                            <td>Immunologie, Endocrinologie</td>
                            <td><x-button class="ml-3" style="background: rgb(0,120,98)">
                                {{ __('Show') }}
                            </x-button></td>
                            <td><x-button class="ml-3" style="background: rgb(9,40,105)">
                                {{ __('Edit') }}
                            </x-button></td>
                            <td><x-button class="ml-3 bg-red-600">
                                    {{ __('Delete') }}
                            </x-button></td>
                            </tr>
                    @endforeach

                    </table>
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
