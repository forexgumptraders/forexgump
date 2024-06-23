<x-app-layout>
<style>

</style>
    <div class="container mt-5">
    <div class="titulo">
            <h1>Robot Supra</h1>
        </div>
            <div class="row">
             
                @if(Auth::user()->supra === 'inactivo')

                <div class="py-12 card w-full">
                    <div>
                        <div class="bg-white dark-bg-gray-800 overflow-hidden  sm-rounded-lg p-6">
                            <div class="mb-2">
                                <div class="card bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                                    <p class="font-bold text-center">US$179</p>
                                    <p class="text-lg text-center">Pagalo por unica vez y tenelo por siempre.</p>
                                </div>
                            </div>

                            <div>
                                <p class="mb-4">Seleccione el metodo de pago</p>

                                <ul class="space-y-4">
                                    <li x-data="{open: false}">
                                        <button class="w-full flex justify-center bg-gray-100 py-2 rounded-lg shadow" x-on:click="open = !open" x-show="open == false">
                                            <img class="h-12 " src="../img/paypal.png" alt="">
                                        </button>

                                        <div class="pt-4 pb-4" x-show="open" style="display: none">
                                            <div id="paypal-button-container"></div>
                                        </div>

                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                @else
                <!-- Mostrar una alerta si el robot está activo -->
                <div class="py-12 w-full">
                    <div>
                        <div class="bg-white dark-bg-gray-800 overflow-hidden shadow-xl sm-rounded-lg p-6">
                            <div class="mb-2">
                                <div class="bg-green-100 border-t text-center border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                                    <p class="font-bold text-center">Ya tienes acceso al BOT Supra</p>
                                    <a href="{{ route('robot.supra') }}" class="text-lg text-center text-green-700 hover:underline">Ver mas</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endif
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Introducción</h5>
                            <br>
                            <p class="card-text">
                                Para lograr que tu bot funcione adecuadamente, es necesario que entiendas qué herramientas son necesarias para su implementación y uso.</p>
                                <br>
                                <p><b>Adquisición del Bot:</b> Obtén a nuestro EA Supra para automatizar tus operaciones de manera eficiente. Al realizar la compra, tendrás la posibilidad de descargarlo cuantas veces desees y aprovechar todas sus actualizaciones.</p>
                                <br>
                                <p><b>Servidor VPS:</b> Utiliza un servidor VPS para mantener activo tu bot las 24 horas del día, garantizando un rendimiento continuo. Es importante destacar que puedes optar por dejar encendida tu computadora las 24 horas, permitiendo que el bot realice operaciones en todo momento.</p>
                                <br>
                                <p><b>Elección de Brokers:</b> Selecciona un broker regulado por normativas europeas para garantizar transparencia y seguridad en tus transacciones.</p>
                                <br>
                                <p><b>Inversión:</b> Configura el bot para operar con una inversión mínima de $500, destacando que te enseñamos a personalizarlo para adaptar su rendimiento según tus preferencias financieras y el capital que desees invertir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Conocimiento</h5>
                            <br>
                            <p class="card-text">
                            Aquí te proporcionaremos las claves para entender cómo y por qué el robot toma decisiones, así como nociones básicas sobre el comportamiento del mercado.</p>
                                <br>
                                <p><b>Operativa del Robot:</b> Entenderemos cómo el robot realiza operaciones, desde abrir hasta cerrar, analizando factores clave como tendencias y señales del mercado.</p>
                                <br>
                                <p><b>Entradas y Salidas:</b> Exploraremos los momentos precisos en los que el robot decide entrar o salir del mercado, maximizando ganancias y gestionando riesgos.</p>
                                <br>
                                <p><b>Optimización del Robot:</b> Aprenderemos a personalizar la configuración del robot, optimizándola según preferencias y estrategias de inversión, adaptándola a diferentes estilos de trading.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
        /* Agrega tus estilos personalizados aquí */
        .card {
            margin-bottom: 20px;
        }
        .titulo {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }
         </style>

        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD"></script>
        <script>
            window.paypal
                .Buttons({
                    async createOrder() {

                        return axios.post('/trading-ai/supra/create-paypal-order', {
                            amount: 179

                        }).then(function(response) {
                            return response.data.id
                        }).catch(function(error) {
                            console.log(error);
                        });

                    },
                    async onApprove(data, actions) {
                        return axios.post('/trading-ai/supra/capture-paypal-order', {
                            orderID: data.orderID

                        }).then(function(response) {
                            window.location.href = '/view-bot-supra';
                        }).catch(function(error) {
                            console.log(error);
                        });
                    },
                })
                .render("#paypal-button-container");

            // Example function to show a result to the user. Your site's UI library can be used instead.
            function resultMessage(message) {
                const container = document.querySelector("#result-message");
                container.innerHTML = message;
            }
        </script>




     
</x-app-layout>