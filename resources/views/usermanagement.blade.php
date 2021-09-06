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
                    <svg class="w-6 h-6 fill-current text-gray-500 -ml-8 z-10 absolute left-1/3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
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
