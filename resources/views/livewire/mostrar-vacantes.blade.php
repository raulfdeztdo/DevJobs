<div>
    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a class="text-xl font-bold " href="{{ route('vacantes.show', $vacante->id) }}">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="text-sm font-bold text-gray-600 dark:text-gray-300">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-gray-500 dark:text-gray-200">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex flex-col items-stretch gap-3 mt-5 text-center md:flex-row md:mt-0">
                    <a href="{{ route('candidatos.index', $vacante) }}" class="px-4 py-2 text-xs font-bold text-white uppercase rounded-lg bg-slate-700 dark:text-slate-700 dark:bg-slate-200 hover:bg-slate-300">
                        {{ $vacante->candidatos->count() }} @choice('Candidato|Candidatos', $vacante->candidatos->count())
                    </a>
                    <a href="{{ route('vacantes.edit', $vacante->id) }}" class="px-4 py-2 text-xs font-bold text-white uppercase bg-blue-700 rounded-lg dark:text-blue-700 dark:bg-blue-200 hover:bg-blue-300">Editar</a>
                    <button wire:click="$emit('confirmDelete', {{ $vacante->id }})" class="px-4 py-2 text-xs font-bold text-white uppercase bg-red-500 rounded-lg dark:text-red-700 dark:bg-red-200 hover:bg-red-300">Eliminar</button>
                </div>
            </div>
        @empty
            <p class="p-3 text-sm text-center text-gray-600 dark:text-gray-200">No hay vacantes que mostrar</p>
        @endforelse
    </div>

    <div class="mx-5 mt-10 md:mx-0">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('confirmDelete', vacanteId => {
            Swal.fire({
                title: "¿Eliminar vacante?",
                text: "Una vacante eliminada no se puede recuperar",
                color: "#f7fafc",
                icon: "warning",
                showCancelButton: true,
                background: "#1a202c",
                confirmButtonColor: "#3341a5",
                cancelButtonColor: "#a64449",
                confirmButtonText: "¡Si, eliminar!",
                cancelButtonText: "Cancelar"
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteVacante', vacanteId);
                    Swal.fire({
                        title: "¡Eliminada!",
                        text: "Tu vacante ha sido eliminada.",
                        icon: "success",
                        color: "#f7fafc",
                        background: "#1a202c",
                        confirmButtonText: "Cerrar",
                        confirmButtonColor: "#3341a5",
                    });
                }
            });
        });
    </script>
@endpush