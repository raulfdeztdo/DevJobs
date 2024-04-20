<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-10 text-2xl font-bold text-center">Candidatos vacante: {{ $vacante->titulo }}</h1>
                    <div class="p-5 md:flex md:justify-center">
                        <ul class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="flex items-center p-3">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-gray-800 dark:text-gray-300">{{ $candidato->user->name }}</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $candidato->user->email }}</p>
                                        <p class="text-sm font-bold text-gray-600 dark:text-gray-400">{{ $candidato->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ asset('storage/cv/' . $candidato->cv) }}" target="_blank" rel="noreferrer noopener" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 dark:border-gray-600 text-sm leading-5 font-medium rounded-full text-gray-700 dark:text-gray-200 bg-white dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-600">
                                            Ver CV
                                        </a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-sm text-center text-gray-600 dark:text-gray-200">No hay candidatos que mostrar</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
