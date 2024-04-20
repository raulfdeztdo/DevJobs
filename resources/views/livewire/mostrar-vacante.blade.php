<div class="p-10">
    <div class="mb-5">
        <h3 class="my-3 text-3xl font-bold text-gray-800 dark:text-gray-300">{{ $vacante->titulo }}</h3>
        <div class="p-4 my-10 bg-gray-100 rounded-lg md:grid md:grid-cols-2 dark:bg-slate-700">
            <h2 class="mb-5 text-2xl font-bold text-gray-800 dark:text-gray-300">Datos</h2>
            <p class="my-3 text-sm font-bold text-gray-800 uppercase dark:text-gray-300">{{ __('Empresa') }}:
                <span class="font-normal normal-case">{{ $vacante->empresa }}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800 uppercase dark:text-gray-300">{{ __('Último día de inscripción') }}:
                <span class="font-normal normal-case">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800 uppercase dark:text-gray-300">{{ __('Categoria') }}:
                <span class="font-normal normal-case">{{ $vacante->categoria->categoria }}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800 uppercase dark:text-gray-300">{{ __('Salario') }}:
                <span class="font-normal normal-case">{{ $vacante->salario->salario }}</span>
            </p>
        </div>
        <div class="gap-6 p-4 my-10 bg-gray-100 rounded-lg md:grid md:grid-cols-6 dark:bg-slate-700">
            <div class="md:col-span-2">
                <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{ "Imagen vacante " . $vacante->titulo }}">
            </div>
            <div class="md:col-span-4">
                <h2 class="mb-5 text-2xl font-bold text-gray-800 dark:text-gray-300">Descripción</h2>
                <p class="text-gray-800 dark:text-gray-300">{{ $vacante->descripcion }}</p>
            </div>
        </div>
        @guest
            <div class="p-5 mt-5 text-center bg-gray-100 border border-indigo-600 border-dashed rounded-lg dark:border-indigo-300 dark:bg-slate-700 dark:text-white bg-gray50">
                <p>
                    ¿Deseas postularte a esta vacante? <a class="font-bold text-indigo-600 dark:text-indigo-300" href="{{ route('register') }}">Obten una cuenta y aplica a esta y a otras vacantes</a>
                </p>
            </div>
        @endguest
        @auth
            @cannot('create', App\Models\Vacante::class)
                <livewire:postular-vacante :vacante="$vacante" />
            @endcannot
        @endauth
    </div>
</div>
