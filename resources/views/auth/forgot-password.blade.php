<x-guest-layout>
      <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <x-jet-authentication-card>
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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar link de reseteo') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
