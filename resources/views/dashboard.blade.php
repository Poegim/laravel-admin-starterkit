<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="md:grid grid-cols-4 gap-4 p-4">

        <x-simple-card>
            <x-label value="Expected value" for="input_one" />
            <x-input class="w-full" placeholder="Insert text" aria-placeholder="Insert text" id="input_one" />
        </x-simple-card>
        <x-simple-card >
            <x-label value="Expected value" for="input_one" />
            <x-input class="w-full" placeholder="Insert text" aria-placeholder="Insert text" id="input_one" />
        </x-simple-card>
        <x-simple-card class="col-span-2">
            <x-label value="Expected value" for="input_one" />
            <x-input class="w-full" placeholder="Insert text" aria-placeholder="Insert text" id="input_one"/>
        </x-simple-card>
        <x-simple-card >
                Welcome To Simple Card
        </x-simple-card>



        {{-- <div class="grow basis-1/2 max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div> --}}
    </div>

</x-app-layout>
