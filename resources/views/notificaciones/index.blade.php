<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-10 text-2xl font-bold text-center">Mis notificaciones</h1>
                    @forelse ($notificaciones as $notificacion)
                        <div class="justify-between p-5 mb-5 border border-gray-200 rounded-lg md:flex md:items-center dark:border-gray-600">
                            <div>
                                <p>Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notificacion->data["nombre_vacante"] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 md:mt-0">
                                <a href="{{ route('candidatos.index', $notificacion->data['id_vacante']) }}" class="p-3 text-sm font-bold text-white uppercase bg-indigo-400 rounded-lg dark:bg-indigo-300 dark:text-gray-600">
                                    Ver candidatos
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600 dark:text-gray-300">No tienes notificaciones</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
