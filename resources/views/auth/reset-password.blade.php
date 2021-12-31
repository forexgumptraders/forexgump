<x-guest-layout>
    <x-jet-authentication-card>
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <x-slot name="logo">
             <a href="/" class="icon flex-shrink-0 flex items-center">
          Forex<span class="iconSecundario">.Gump</span> 
        </a>

        <style>

            .icon{
                background-color: #1f2937;
                border-radius: 20px;
                padding-right: 5px;
                padding-left: 5px;
            }

            .icon{
              font-size: 30px;
              color: crimson;
            font-family: 'Black Ops One', cursive;
          
            }

            .iconSecundario{
              color: white;
            }

             .icon:hover{
              
              color: crimson;
          
            }

            .iconSecundario:hover{
              color: white;
            }

        </style>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
