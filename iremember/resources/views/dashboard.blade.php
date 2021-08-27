<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                @livewire('home')

                <div class="container">
                    <h2>Posts publicados:</h2>
                    @livewire('post-list')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
