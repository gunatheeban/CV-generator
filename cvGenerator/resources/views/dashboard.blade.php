<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="text-2xl">
                        Hi {{ auth()->user()->name }},  Welcome to {{config("app.name")}}!
                    </div>
                </div>

                <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

                    <div class="p-6 border-t border-gray-200">

                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="mb-6 bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg" >
                            <div class="p-6 w-full">
                                <b>Contact Information</b>
                                <x-jet-button class="float-right">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </x-jet-button>
                            </div>
                        </div>

                        <div class="mb-6 bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg" >
                            <div class="p-6 w-full">
                                <b>Contact Information</b>
                                <x-jet-button class="float-right">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </x-jet-button>

                                <x-jet-button class=" mr-2  float-right">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </x-jet-button>
                            </div>
                        </div>

                        <div class="mb-6 bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg" >
                            <div class="p-6">
                                <b>Contact Information</b>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
