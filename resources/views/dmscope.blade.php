<link href="{{ asset('css/table.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DM Scope') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6 bg-white border-b border-gray-200">
                    Welcome in DMscope!
                    @if(Auth::user()->hasRole('administrator'))
                        <x-button class="ml-3 shadow-md bg-blue-800 h-10 font-bold"> {{ __('Create New Record') }} </x-button>
                    @endif
                </div>


                    <div class="border rounded overflow-hidden flex p-6 justify-center items-center w-full">
{{--                        <input type="text" class="px-4 py-2 border-2 w-1/2 shadow-md rounded" placeholder="Search...">--}}
                        <x-alpine-multiselect></x-alpine-multiselect>

                        <button class="flex items-center justify-center px-4 border-l bg-green-700 shadow-md rounded h-12">
                            <svg class="h-5 w-5 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                        </button>
                    </div>

{{--                Adding Tailwind Alpine Tag Multi Select https://codepen.io/atomgiant/pen/QWjWgKz --}}

                <section class="border rounded overflow-hidden flex p-6 justify-between">
                    <div class="flex flex-wrap items-start rounded justify-center p-0 w-5/12 bg-white text-white shadow-md">
                        <div class="flex items-center justify-center rounded p-0 w-full h-10 bg-blue-800 text-white shadow-md font-bold">
                            {{ __('ATC filtering') }}
                        </div>
                        <div class="w-full text-black p-2">
                            <input type="text" class="border rounded w-2/3 h-9 shadow-md">
                        </div>
                        <div class="w-full bg-gray-50 text-black shadow-md p-2 rounded">
                            <label class="block">
                                <select class="form-multiselect block w-full mt-1 rounded overflow-x-hidden h-52" multiple>
                                    @foreach($atc as $atcs)
                                        <option value="{{$atcs->id}}">{{$atcs->atc_code}}-{{$atcs->atc_content}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                    </div>

                    <div class="flex flex-wrap items-start justify-start p-0 w-5/12 bg-white shadow-md rounded">
                        <div class="flex items-center justify-center p-0 w-full h-10 bg-blue-800 text-white shadow-md rounded font-bold">
                            {{ __('Indication filtering') }}
                        </div>
                        <div class="w-full text-black p-2">
                            <input type="text" class="border rounded w-2/3 h-9 shadow-md">
                        </div>
                        <div class="w-full bg-gray-50 text-black shadow-md p-2 rounded ">
                            <label class="block">
                                <select class="form-multiselect block w-full mt-1 rounded overflow-x-hidden h-52" multiple>
                                @foreach($indication as $indications)
                                    <option value="{{$indications->id}}">{{$indications->indication_name}}</option>
                                @endforeach
                                </select>
                            </label>
                        </div>
                    </div>
                </section>

                <section class="border rounded overflow-hidden flex p-6">
                    <div class="flex flex-wrap rounded items-start justify-center p-4 w-full bg-green-700 shadow-md justify-between">
                        <label for="Sender">
                            <input type="text" class="rounded p-2 h-9" placeholder="Sender">
                        </label>
                        <label for="Target">
                            <input type="text" class="rounded p-2 h-9" placeholder="Target">
                        </label>
                        <label for="Product">
                            <input type="text" class="rounded p-2 h-9" placeholder="Product">
                        </label>
                    </div>
                </section>

                <section class="w-full">
                    <table class="table-fixed shadow-md">
                        <tr>
                            <th>ATC</th>
                            <th>Product</th>
                            <th>Item</th>
                            <th>Date</th>
                            <th>Format</th>
                            <th>Sender</th>
                            <th>Target</th>
                            <th>Theme</th>
                        </tr>

{{--                        @foreach($record as $records)--}}
                        <tr>
{{--                            <td>{{$records->atc}}</td>--}}
{{--                            <td>{{$records->product}}</td>--}}
{{--                            <td>{{$records->item}}</td>--}}
{{--                            <td>{{$records->date}}</td>--}}
{{--                            <td>{{$records->format}}</td>                               --}}
{{--                            <td>{{$records->sender}}</td>                               --}}
{{--                            <td>{{$records->target}}</td>                               --}}
{{--                            <td>{{$records->theme}}</td>                               --}}

                            <td>A02AA</td>
                            <td>Prodaxa</td>
                            <td>34</td>
                            <td>03-05-2011</td>
                            <td>E-mail</td>
                            <td>AstraZenica</td>
                            <td>Cardioloog</td>
                            <td>New Recipe for arthrium fibrilatie goedgekeurd door EMA</td>
                        </tr>
{{--                        @endforeach--}}

                    </table>
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
