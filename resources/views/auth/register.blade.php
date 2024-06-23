<x-guest-layout>
    <x-jet-authentication-card>
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <x-slot name="logo">

            <div style="text-align: center; width: 300px;">
                <a href="/" class="icon">
                    <img src="{{ asset('img/forexgump3.png') }}" alt="Descripción de la imagen" class="icon">
                </a>
            </div>





        </x-slot>

        <x-jet-validation-errors class="mb-4" />



        <!-- <div class="form-tabs">
            <div class="tab tab-active" onclick="toggleTab(true, 'estandar')">Cuenta Estandar</div>
            <div class="tab" onclick="toggleTab(false, 'trader')">Cuenta Trader</div>
        </div> -->

        <!-- Contenedor del formulario -->
        <div class="form-container">

            <div class="flex items-center justify-center mt-4" style="text-align: center;">
                <p>Registrarme &nbsp;</p>

            </div>
            <div class="mt-4 mb-8 ">
                <!-- facebook login -->
                <div>
                    <a href="{{route('auth.redirect')}}" class="ingresar flex items-center justify-center w-full px-4 py-3 mt-2 space-x-3 text-sm text-center bg-blue-500 text-white transition-colors duration-200 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                        <span class="text-sm text-white dark:text-gray-200 ml-2">Registrarme con Facebook</span>
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
                    <span class="text-sm text-white dark:text-gray-200 ml-1">Registrarme con Google</span>
                </a>
                </div>

            </div>

            <div class="flex items-center mb-8">
                <div class="line"></div>
                <div class="circle"></div>
                <div class="line"></div>
            </div>




            <form id="form-white" method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <x-jet-button class="ingresar mt-6 w-full py-3 justify-center">
                    {{ __('Unirme') }}
                </x-jet-button>

                <div class="mt-4 flex flex-col lg:flex-row lg:items-center lg:justify-between">
                    <div class="lg:w-1/2 lg:pr-4 text-center">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('¿Ya tienes una cuenta?') }}
                        </a>
                    </div>

                    <div class="mt-4 lg:w-1/2 lg:mt-0">
                        <input type="hidden" id="selected_account_type" name="selected_account_type" value="estandar">

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('home.terms').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terminos de Servicio').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('home.policy').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Politica de Privacidad').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                        @endif

                    </div>

                </div>


            </form>
            <!-- <form id="form-black" method="POST" action="{{ route('register') }}" class="hidden">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('home.terms').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terminos de Servicio').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('home.policy').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Politica de Privacidad').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('¿Ya estas registrado?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Unirme') }}
                    </x-jet-button>
                </div>

                <input type="hidden" id="selected_account_type" name="selected_account_type" value="trader">

            </form> -->
        </div>
        </div>


    </x-jet-authentication-card>
</x-guest-layout>
<style>
    /* Estilo para las pestañas */

    .form-tabs {
        display: flex;
        justify-content: space-between;
        /* Espacio uniforme entre las pestañas */
        margin-bottom: 20px;
        /* Espaciado inferior entre las pestañas y el formulario */
    }

    .tab {
        cursor: pointer;
        flex: 1;
        /* Ocupa el 50% del ancho del contenedor */
        padding: 10px 20px;
        user-select: none;
        text-align: center;
        transition: background-color 0.3s;
    }

    .tab-active {
        background-color: crimson;
        color: #fff;
        /* Color de fondo y texto de la pestaña activa */
    }

    /* Estilo para los formularios */
    #form-white,
    #form-black {
        background-color: #fff;
        /* Fondo del formulario */
        padding: 20px;
        /* Espaciado interior del formulario */
        border: 1px solid #ccc;
        /* Borde del formulario */
        border-radius: 5px;
        /* Borde redondeado */
    }

    /* Clase para ocultar elementos */
    .hidden {
        display: none;
    }

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

<script>
    function toggleTab(isWhite) {
        if (isWhite) {
            document.getElementById('form-white').classList.remove('hidden');
            document.getElementById('form-black').classList.add('hidden');
            document.querySelector('.tab-active').classList.remove('tab-active');
            event.target.classList.add('tab-active');
        } else {
            document.getElementById('form-white').classList.add('hidden');
            document.getElementById('form-black').classList.remove('hidden');
            document.querySelector('.tab-active').classList.remove('tab-active');
            event.target.classList.add('tab-active');
        }
    }

    function toggleTab(isWhite, accountType) {
        document.getElementById('form-white').classList.toggle('hidden', !isWhite);
        document.getElementById('form-black').classList.toggle('hidden', isWhite);

        // Cambiar el valor de selected_account_type según la pestaña seleccionada
        document.getElementById('selected_account_type').value = accountType;

        document.querySelector('.tab-active').classList.remove('tab-active');
        event.target.classList.add('tab-active');
    }
</script>