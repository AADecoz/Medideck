<link href="{{ asset('css/table.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border rounded overflow-hidden flex p-6">
                        <input type="text" class="px-4 py-2 border-2 w-1/2 shadow-md" placeholder="Filter...">
                        <button class="flex items-center justify-center px-4 border-l bg-green-700 shadow-md">
                            <svg class="h-5 w-5 text-white " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                        </button>
                    </div>
                    <table class="table-fixed shadow-md">
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Expires</th>
                            <th>Company</th>
                            <th>Subscriptions</th>
                            {{--                            <th>{{$user->sender_id}}</th>--}}
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach($sender as $senders)
                            <tr>
                                <td class="p-2">{{$senders->id}}</td>
                                <td>{{$senders->sender_name}}</td>
                                <td><a href="mailto:{{$senders->mail}}" class="p-2 hover:text-blue-900"></a></td>
                                <td></td>
                                <td></td>
                                {{--                            <td><label><input type="checkbox" class="text-indigo-500 w-8 h-8 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded" name="subscription" value=""><span>Immunologie</span></label></td>--}}
                                <td><x-button class="ml-3 shadow-md" style="background: rgb(0,120,98)">
                                        {{ __('Show') }}
                                    </x-button></td>
                                <td><x-button class="ml-3 shadow-md" style="background: rgb(9,40,105)">
                                        {{ __('Edit') }}
                                    </x-button></td>
                                <td><x-button class="ml-3 bg-red-600 shadow-md">
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
