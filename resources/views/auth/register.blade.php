<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 dark:text-red-300" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 dark:text-red-300" />
        </div>

        <!-- Rol Type -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Rol')" />
            <select name="rol" id="rol" class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                <option value="">-- Selecciona un rol --</option>
                <option value="1">Desarrollador</option>
                <option value="2">Recruiter</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2 dark:text-red-300" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 dark:text-red-300" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 dark:text-red-300" />
        </div>

        <div class="flex justify-between my-5">
            @if (Route::has('password.request'))
                <x-link
                    :href="route('login')"
                >
                    ¿Ya estás registrado?
                </x-link>
                <x-link
                    :href="route('password.request')"
                >
                    Olvidaste tu password
                </x-link>
            @endif
        </div>
        <x-primary-button class="justify-center w-full">
            {{ __('Crear cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>
