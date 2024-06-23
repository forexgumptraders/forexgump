<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<div class="loader-container">
    <div class="loader"></div>
</div>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'ForexGump') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icono-pestaña.ico') }}">

    @livewireStyles


    <!-- Scripts -->

    <script src="https://js.stripe.com/v3/"></script>
    <!-- Incluir en tu archivo HTML -->


    @isset($css)
    {{$css}}
    @endisset



</head>

<body class="font-sans antialiased">



    <style>
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid crimson;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Encontrar el loader
            var loader = document.querySelector(".loader-container");

            if (loader) {
                // Mostrar el loader durante 2 segundos
                setTimeout(function() {
                    loader.style.display = "none";
                }, 600); // 2000 milisegundos (2 segundos)
            }
        });
    </script> 




    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')
        <x-cookie-consent :cookiePolicyLink="route('cookie.policy')"/>

        <x-jet-banner />
        <!-- Page Content -->

        <script src="{{ mix('js/bootstrap.js') }}"></script>

        <main>
            {{ $slot }}
            
            @livewireScripts

        </main>
    </div>

    <!-- <script src="{{ mix('js/app.js') }}"></script> -->



    @isset($js)
    {{$js}}
    @endisset
 


    <!-- @auth
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Notification.requestPermission().then((permission) => {
                if (permission === 'granted') {
                    console.log('Permiso concedido para mostrar notificaciones');
                }
            });
        });


        // Luego, registrar el Service Worker
        if ('serviceWorker' in navigator && 'PushManager') {
            navigator.serviceWorker.register('/sw.js')
                .then((registration) => {
                    console.log('Service Worker registrado con éxito:', registration);
                })
                .catch((error) => {
                    console.error('Error al registrar el Service Worker:', error);
                });
        }

        function enviarNotificacionAlServiceWorker(notification) {
            if (navigator.serviceWorker.controller) {
                console.log('Service Worker controlador encontrado:', navigator.serviceWorker.controller);

                // Convierte el objeto a una cadena JSON antes de enviarlo
                const jsonString = JSON.stringify(notification);

                // Envía el mensaje solo si hay un controlador
                navigator.serviceWorker.controller.postMessage({
                    action: 'pushMessage',
                    message: jsonString // Aquí se envía la cadena JSON
                });
            } else {
                console.error('Service Worker no tiene un controlador');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
                    Echo.private('App.Models.User.' + {{ Auth::user()->id }})
                        .notification((notification) => {
                            console.log('Enviando mensaje al Service Worker:', notification);

                    enviarNotificacionAlServiceWorker(JSON.stringify(notification));
                        });
        });
    </script>
    @endauth -->
</body>

</html>