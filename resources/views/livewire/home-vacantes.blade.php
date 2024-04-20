<div>
    <livewire:filtrar-vacantes />
    <div class="p-12">
        <div class="mx-auto max-w-7xl">
            <h3 class="mb-12 text-4xl font-extrabold text-gray-700 dark:text-gray-300">Nuestras vacantes</h3>
            <div class="divide-y divide-gray-200 dark:divide-gray-600">
                @forelse ($vacantes as $vacante)
                    <div class="py-5 md:flex md:justify-between md:items-center">
                        <div class="text-gray-700 md:flex-1 dark:text-gray-300">
                            <a class="text-xl font-bold" href="{{ route('vacantes.show', $vacante->id) }}">
                                {{ $vacante->titulo }}
                            </a>
                            <p class="mt-3 mb-3 text-base font-bold text-gray-600 dark:text-gray-300">{{ $vacante->empresa }}</p>
                            <p class="mt-3 mb-3 text-sm font-bold text-gray-600 dark:text-gray-300">{{ $vacante->categoria->categoria }}</p>
                            <p class="mt-3 mb-3 text-sm font-bold text-gray-600 dark:text-gray-300">{{ $vacante->salario->salario }}</p>
                            <p class="mb-3 text-sm text-gray-500 dark:text-gray-200">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                            <p class="mb-3 text-sm text-gray-500 dark:text-gray-200">Oferta actualizada {{ $vacante->updated_at->diffForHumans() }}</p>
                        </div>
                        <div class="flex justify-center w-full my-5 md:relative md:w-auto md:justify-start md:my-0">
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="p-3 text-sm font-bold text-white uppercase bg-indigo-400 rounded-lg dark:bg-indigo-300 dark:text-gray-600" >Ver vacante</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-base text-center text-gray-700 dark:text-gray-300">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
