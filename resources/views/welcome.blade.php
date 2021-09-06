<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline"></a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-lg-12" style="background-color: white; min-height: 65vh;">
                        <div class="col-lg-12" id="home">
                            <br>
                            <h1 class="text-3xl">Welkom bij Medideck, @guest
                                    Gast
                                @endguest @auth
                                    Authenticated
                                @endauth</h1>
                            <p>
                                Onze website is nog in ontwikkeling, maar u kunt al het een en ander bekijken, klik hiervoor op het menu hierboven.
                            </p>
                            <br>
                            <div class="flex">
                                <p>
                                    <strong>Vestiging Breda</strong><br>
                                    Ceresstraat 13<br>
                                    4811 CA Breda<br>
                                    T +31 (0)76 30 300 39<br>
                                </p>
                            </div>
                            <div class="p-3">
                                <div class="flex flex-row">

                                    <img class="flex-col w-1/2 p-2" src="{{ asset('/img/header-for-you-breda.jpg') }}">

                                    <img class="flex-col w-1/2 p-2" src="{{ asset('/img/header-for-you-breda3.jpg') }}">
                                </div>
                                <div class="flex flex-row">

                                    <img class="flex-col w-1/2 p-2" src="{{ asset('/img/header-for-you-breda5.jpg') }}">

                                    <img class="flex-col w-1/4 p-2" src="{{ asset('/img/for-you-breda-images4.jpg') }}">
                                </div>

                            </div>
                        </div>
                        {{--                        <div id="contact" class="col-lg-12" style="display: none;">--}}
                        {{--                            <br>--}}
                        {{--                            <h5>U kunt contact opmenen met ons via:--}}
                        {{--                            </h5>--}}
                        {{--                            <br>--}}
                        {{--                            <div class="col-lg-4">--}}
                        {{--                                <strong>Postadres:</strong><br>--}}
                        {{--                                Postbus 1145<br>--}}
                        {{--                                4801 BC Breda<br>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-4">--}}
                        {{--                                <strong>Telefoon:</strong><br>--}}
                        {{--                                +31 (0) 35 7676 707<br>--}}
                        {{--                                +31 (0) 6 51402340<br>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-4">--}}
                        {{--                                <strong>E-mail</strong><br>--}}
                        {{--                                <a href="mailto:powerfulcards@medideck.nl">powerfulcards@medideck.nl</a><br>--}}
                        {{--                            </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>




