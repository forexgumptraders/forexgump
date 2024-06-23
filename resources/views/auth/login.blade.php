<x-guest-layout name="fondo">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <x-jet-authentication-card>
        <x-slot name="logo">

            <div style="text-align: center; width: 300px;">
                <a href="/" class="icon">
                    <img src="{{ asset('img/forexgump3.png') }}" alt="Descripción de la imagen" class="icon">
                </a>
            </div>



        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif


        <div class="flex items-center justify-center mt-4" style="text-align: center;">
            <p>Iniciar sesión &nbsp;</p>

        </div>
        <div class="mt-4 mb-8 ">
            <!-- facebook login -->
            <div>
                <a href="{{route('auth.redirect')}}" class="ingresar flex items-center justify-center w-full px-4 py-3 mt-2 space-x-3 text-sm text-center bg-blue-500 text-white transition-colors duration-200 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <span class="text-sm text-white dark:text-gray-200 ml-2">Iniciar sesión con Facebook</span>
                </a>
            </div>

        </div>

        <div class="mt-4 mb-8 ">
                <!-- goole login -->
                <div>
                <a href="{{route('auth.redirect')}}" class="ingresar flex items-center justify-center px-2 py-2 space-x-2 text-xs bg-red-500 text-white transition-colors duration-200 transform border dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path>
                    </svg>
                    <span class="text-sm text-white dark:text-gray-200 ml-1">Iniciar sesión con Google</span>
                </a>
                </div>

            </div>


        <div class="flex items-center mb-8">
            <div class="line"></div>
            <div class="circle"></div>
            <div class="line"></div>
        </div>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>



            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu clave?') }}
                </a>
                @endif
            </div>


            <div class="flex items-center justify-center mt-4">
                <x-jet-button class="ingresar w-full h-auto py-3 flex items-center justify-center mt-4">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>

            <style>
                .ingresar {
                    border-radius: 100px;
                }

                .line {
                    height: 1px;
                    background-color: #666;
                    flex-grow: 1;
                }

                .circle {
                    width: 10px;
                    height: 10px;
                    background-color: #fff;
                    border-radius: 50%;
                    border: 1px solid #666;
                    margin: 0 10px;
                }
            </style>


            <div class="flex items-center justify-center mt-4" style="text-align: center;">
                <p>¿No tienes una cuenta?&nbsp;</p>
                <p>
                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Crea una
                    </a>
                </p>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>