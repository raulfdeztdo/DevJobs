<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña?. Introduce tu email de registro y enviaremos un enlace para que puedas crear una contraseña nueva') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 dark:text-red-300" />
        </div>

        <div class="flex justify-between my-5">
            @if (Route::has('password.request'))
                <x-link
                    :href="route('login')"
                >
                    Login
                </x-link>
                <x-link
                    :href="route('register')"
                >
                    Crear cuenta
                </x-link>
            @endif
        </div>
        <x-primary-button class="justify-center w-full">
            {{ __('Envíar email') }}
        </x-primary-button>
    </form>
</x-guest-layout>
