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
                    <div class="container pb-4">
                    <input type="text" class="rounded-lg shadow-md focus:ring-blue-800 w-1/3" placeholder="search" >
                    </div>
                    <table class="table-fixed shadow-md">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Email</th>
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
                            <td></td>
                            <td></td>
                            <td><x-button class="ml-3" style="background: rgb(0,120,98)">
                                {{ __('Edit') }}
                            </x-button></td>
                            <td><x-button class="ml-3" style="background: rgb(9,40,105)">
                                    {{ __('Delete') }}
                            </x-button></td>
                            </tr>
                    @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
