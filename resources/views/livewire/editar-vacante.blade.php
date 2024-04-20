<form class="space-y-5 md:w-1/2" wire:submit.prevent='editarVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input
            id="titulo"
            class="block w-full mt-1"
            type="text"
            wire:model.live="titulo"
            value="{{ old('titulo') }}"
            placeholder="Titulo vacante"
        />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select wire:model.live="salario" id="salario" class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
            <option value="">Seleccione un salario</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model.live="categoria" id="categoria" class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
        <option value="">Seleccione una categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria  }}</option>
        @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block w-full mt-1"
            type="text"
            wire:model.live="empresa"
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
        />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para inscripción')" />
        <x-text-input
            id="ultimo_dia"
            class="block w-full mt-1"
            type="date"
            wire:model.live="ultimo_dia"
            :value="old('ultimo_dia')"
        />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto')" />
        <textarea
            wire:model.live="descripcion"
            id="descripcion"
            cols="30"
            rows="10"
            placeholder="Descripción general del puesto, experiencia"
            class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
        ></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block w-full mt-1"
            type="file"
            wire:model="imagen_nueva"
            accept="image/*"
        />

        <div class="my-5 w-96">
            <x-input-label for="imagen" :value="__('Imagen actual')" />
            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo }}">
        </div>


        <div class="my-5 w-96">
            @if ($imagen_nueva)
                <x-input-label for="imagen" :value="__('Imagen nueva')" />
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen de la vacante" class="object-cover">
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="justify-center w-full">
        {{ __('Editar vacante') }}
    </x-primary-button>
</form>