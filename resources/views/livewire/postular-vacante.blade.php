<div class="flex flex-col items-center justify-center p-5 mt-10 bg-gray-100 dark:bg-slate-700 dark:text-white rounded-xl">
    <h3 class="my-4 text-2xl font-bold text-center">Postular esta vacante</h3>
    @if (session()->has('mensaje'))
        <div class="p-2 my-5 font-bold text-green-500 uppercase border border-green-500 rounded-xl dark:border-green-200 dark:text-green-200">
            {{ session('mensaje') }}
        </div>
    @else
        <form class="mt-5 w-96" wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-input-label  for="cv" :value="__('Curriculum Vitae (PDF)')" class="uppercase" />
                <x-text-input id="cv" class="block w-full mt-1" type="file" accept=".pdf" wire:model='cv'/>
                @error('cv')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <x-primary-button class="justify-center w-full my-5">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif
</div>
