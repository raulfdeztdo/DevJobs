<x-app-layout>
    <x-slot name="header">
        <div class="py-16 overflow-hidden lg:py-24">
            <div class="max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="relative">
                    <h2 class="text-4xl font-extrabold leading-8 tracking-tight text-center text-indigo-500 dark:text-indigo-300 sm:text-6xl">Encuentra un trabajo en Tech de forma remota</h2>
                    <p class="max-w-3xl mx-auto mt-4 text-xl text-center text-gray-500 dark:text-gray-300">Encuentra el trabajo de tus sueños en una empresa internacional; tenemos vacantes para front end developer, backend, devops, mobile y mucho más!</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <livewire:home-vacantes />
            </div>
        </div>
    </div>
</x-app-layout>