<link href="{{ asset('css/table.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usermanagement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Subscriptions</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if ($user->role_id = 3)
                    @foreach($user as $users)
                            <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td><a href="mailto:{{$users->email}}">{{$users->email}}</a></td>
                            <td></td>
                                <td><x-button class="ml-3" style="background: rgb(0,120,98)">
                                    {{ __('Edit') }}
                                </x-button></td>
                                <td><x-button class="ml-3" style="background: rgb(9,40,105)">
                                        {{ __('Delete') }}
                                </x-button></td>
                            </tr>
                    @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
