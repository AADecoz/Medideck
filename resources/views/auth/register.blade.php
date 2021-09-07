<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->

                <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

                <!-- Select Option Role Type -->
                <div class="mt-4">
                    <x-label for="role_id" value="{{__('Register as:')}}"/>
                    <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="user" >User</option>
                        <option value="target" >Specialist</option>
                        <option value="moderator" >Moderator</option>
                        <option value="administrator" >Admin</option>
                    </select>
                </div>


                <div class="mt-4 pb-2">
                    <x-label :class="{'block': open, 'hidden': ! open}" for="company" value="{{__('Company:')}} "/>
                    <select name="sender_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        @foreach($sender as $senders)
                        <option value="{{$senders->sender_id}}">{{$senders->sender_name}}</option>
                        @endforeach
                    </select>

                </div>


                <div class="flex items-center justify-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <div>
                <x-button class="ml-3" style="background: rgb(0,120,98)">
                    {{ __('Support')}}
                </x-button>
                <x-button class="ml-4" style="background: rgb(9,40,105)">
                    {{ __('Register') }}
                </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
