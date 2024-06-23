<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tabbed Content
        </h2>

        <link rel="stylesheet" href="css/robot/style.css">

    </x-slot>

    <style>
        .tabs-container {
            width: 100%;
            background-color: #f3f4f6;
            overflow: hidden;
        }

        .tabs {
            display: flex;
            justify-content: space-evenly;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .tab {
            cursor: pointer;
            padding: 15px 0;
            transition: background-color 0.3s;
            flex-grow: 1;
            text-align: center;
        }

        .tab:hover {
            background-color: #eaeaea;
        }

        .tab-content {
            display: none;
            padding: 20px;
            text-align: center;
        }

        .tab-content.active {
            display: block;
        }

        /* Ajustes para la tarjeta */
        .tab-content a {
            display: block;
            max-width: 400px;
            margin: 0 auto;
        }

        :root {
            --primario: #f9218d;
            --gris-claro: #B8B8B8;
            --sombra: 0 0 13px 0 rgba(185, 185, 185, .25);
        }

        .faqs {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
        }


        .titulo {
            color: #777;
            font-weight: 700;
            text-align: center;
            margin: 60px 0;
            font-size: 30px;
        }

        footer {
            margin-bottom: 0;
        }

        /*categorias*/

        .categorias {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 20px;
            margin-bottom: 60px;
        }

        .categoria {
            cursor: pointer;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background: white;
            font-weight: 700;
            color: var(--gris-claro);
            border: 2px solid transparent;
            transition: .3s ease all;
        }

        .categoria:hover p {
            color: #000;
        }

        .categoria:hover path {
            fill: var(--primario);
        }

        .categoria svg {
            width: 64px;
            margin-bottom: 10px;
        }

        .categoria path {
            fill: var(--gris-claro);
            transition: .3s ease all;
        }

        .categoria.activa {
            border: 2px solid var(--primario);
            color: #000;
        }

        .categoria.activa path {
            fill: var(--primario);
        }

        /*contenedor preguntas*/

        .contenedor-preguntas {
            display: none;
            grid-template-columns: 1fr;
            grid-gap: 40px;
        }

        .contenedor-preguntas.activo {
            display: grid;
        }

        .contenedor-pregunta {
            background: #fff;
            padding: 40px;
            border: 2px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            transition: .3s ease all;
            cursor: pointer;
        }

        .contenedor-pregunta:hover {
            box-shadow: var(--sombra);
        }

        .contenedor-pregunta.activa {
            border: 2px solid var(--primario);
        }


        /*preguntas*/


        .pregunta {
            font-weight: 700;
            font-size: 20px;
            line-height: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pregunta img {
            width: 14px;
        }

        .respuesta {
            color: #808080;
            line-height: 30px;
            max-height: 0;
            opacity: 0;
            transition: .3s ease all;
        }

        .contenedor-pregunta.activa .respuesta {
            opacity: 1;
            margin-top: 20px;
        }

        .contenedor-pregunta.activa img {
            transform: rotate(45deg);
        }


        /*responsive*/
        @media screen and (max-width: 820px) {
            .categorias {
                grid-template-columns: 1fr 1fr;
            }

            .categoria {
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 5px;
            }

            .categoria svg {
                widows: 30px;
                margin-right: 10px;
                margin-bottom: 0;
            }

        }


        @media screen and (max-width: 500px) {
            .categorias {
                grid-template-columns: 1fr;
            }

        }

        .tabs {
            display: flex;
            justify-content: space-evenly;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .tab {
            cursor: pointer;
            padding: 15px 0;
            transition: background-color 0.3s;
            flex-grow: 1;
            text-align: center;
            font-size: 18px;
            /* Ajusta el tamaño de la fuente según tus necesidades */
        }

        .tab:hover {
            background-color: #eaeaea;
        }


        .download-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>

    <div class="tabs-container">
        <ul class="tabs">
            <li class="tab" onclick="showTab('tab1')">Bienvenida</li>
            <li class="tab" onclick="showTab('tab2')">Instrucciones</li>
            <li class="tab" onclick="showTab('tab3')">Descarga</li>
        </ul>

        <div id="tab1" class="tab-content active">


            <section class=" dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">¡Gracias por elegir nuestro robot Aureum!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">A continuación, te proporcionaremos detalles sobre el robot Aureum y el proceso completo de instalación. Es crucial seguir cada paso detalladamente para garantizar una instalación correcta. Una vez hayas revisado todo el contenido, estarás listo para proceder con la descarga e instalación del mismo.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <br>
                        <a href="#tab2" id="comenzar" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Comenzar
                        </a>
                    </div>
                </div>
            </section>
            <br><br>
            <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-6xl dark:text-white">Con este robot, podrás:</h1>
            <br>
            <!-- Lista centrada con iconos -->
            <ul class="list-disc inline-block text-left mx-auto">
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Monitoreo 24/7:</span>&nbsp;<p> Opera sin intervención constante.</p>
                </li>
                <br>
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Evitas emociones: </span>&nbsp;<p>Decisiones sin influencia emocional.</p>
                </li>
                <br>
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Control de riesgos:</span>&nbsp;<p> Implementa límites automáticamente.</p>
                </li>
                <br>
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Eficiencia y velocidad:</span>&nbsp;<p> Ejecuta operaciones rápidas.</p>
                </li>
                <br>
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Consistencia:</span>&nbsp;<p> Aplica estrategias de manera constante.</p>
                </li>
                <br>
                <li class="flex items-center space-x-2 text-lg">
                    <img src="{{ asset('img/icons/si.png') }}" alt="Abrir">

                    <span>Análisis predictivo:</span>&nbsp;<p> Utiliza datos para anticipar movimientos.</p>
                </li>

            </ul>
        </div>

        <div id="tab2" class="tab-content">

        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
             <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">A continuación, te proporcionaremos secciones, cada una de las cuales contiene información e instrucciones necesarias para la implementación del robot. Es importante que las leas de forma ordenada para que puedas ejecutar el robot adecuadamente.</p>     
        </div>

            <main class="faqs">

                <div class="categorias" id="categorias">
                    <div class="categoria activa" data-categoria="mercado">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z" />
                        </svg>
                        <p>Mercados e Indicadores</p>
                    </div>
                    <div class="categoria" data-categoria="broker">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z" />
                        </svg>
                        <p>Broker</p>
                    </div>
                    <div class="categoria" data-categoria="riesgo">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z" />
                        </svg>
                        <p>Control de Riesgo</p>
                    </div>
                    <div class="categoria" data-categoria="beneficios">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z" />
                        </svg>
                        <p>Escalar Beneficios</p>
                    </div>
                    <div class="categoria" data-categoria="disponibilidad">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z" />
                        </svg>
                        <p>Alta Disponibilidad</p>
                    </div>
                    <div class="categoria" data-categoria="robot">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z" />
                        </svg>
                        <p>Aureum</p>
                    </div>
                </div>


                <div class="preguntas">


                    <div class="contenedor-preguntas activo" data-categoria="mercado">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Como me subscribo? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Para subscribirte y copiar señales del grupo VIP de telegram es necesario que te registres, una vez creado el usuario confirma el numero de telefono, compra el servicio que desees y asi recibir el link del grupo privado para recibir las señales.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cuantas señales recibo por dia? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Recibiras señales en un rango de 6 a 8 por dia con un acierto de 70% - 90%.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Que recibire por el grupo? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Los datos que se envian por el grupo son 3 TP (Take profit), un SL (Stop loss), y la divisa a operar ej: XAU/USD.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cuantas señales recibo por dia? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Recibiras señales en un rango de 6 a 8 por dia con un acierto de 70% - 90%.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cuanto dura el grupo VIP? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Tu subscripccion es hasta que se termine, si apretas cancelar vas a seguir recibiendo señales hasta que se cumpla la fecha, una vez echo eso se te desvinculara del grupo VIP siempre y cuando hayas cancelado el pago automatico.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Puedo cancelar mi subcripccion? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Efectivamente si, podes hacerlo cuando quieras desde tu usuario apretando el boton cancelar.</p>
                        </div>

                    </div>


                    <div class="contenedor-preguntas" data-categoria="broker">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué medios de pago aceptan? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Aceptamos tos los medios de pago.</p>
                        </div>


                    </div>


                    <div class="contenedor-preguntas" data-categoria="riesgo">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué es el Stop Loss (SL)? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Es el valor que fijaremos desde el principio, en el cual se cerrará la operación en caso de perdida.</p>
                        </div>
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué es el Take Profit (TP)? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Es el valor donde la operación se cerrará con ganancias, nosotros ofrecemos 3 TP.</p>
                        </div>
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué es un PIP y cuánto vale? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Es el movimiento más pequeño que puede realizar un tipo de cambio. Es la unidad en la que se miden las perdidas o ganancias.

                                El valor de un pip no es exacto, depende del par de divisas que operemos y del valor de esa divisa en cada momento.

                                Si operamos la divisa EUR/USD con un lotaje de 0.01. Un movimiento de un pip serían 0.10 USD Aproximadamente.

                                Si operamos con un lotaje de 0.10, por cada movimiento de un pip sería 1 USD Aproximadamente.

                                Si operamos con un lojate de 1.00 cada movimiento de un pip serían 10 USD Aproximadamente..</p>
                        </div>


                    </div>


                    <div class="contenedor-preguntas" data-categoria="beneficios">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cuanto dinero necesito para empezar? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Nosotros te recomendamos empezar con un mínimo de 250 $ / €.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Puedo usar las señales con cualquier broker? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                        </div>
                    </div>

                    <div class="contenedor-preguntas" data-categoria="disponibilidad">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">swfwefwefwef <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Nosotros te recomendamos empezar con un mínimo de 250 $ / €.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Puedo usar las señales con cualquier broker? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                        </div>
                    </div>


                    <div class="contenedor-preguntas" data-categoria="robot">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cuadsgdasgasgdasgar? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Nosotros te recomendamos empezar con un mínimo de 250 $ / €.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Puedo usar las señales con cualquier broker? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                            <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                        </div>
                    </div>

                </div>

            </main>
        </div>

        <div id="tab3" class="tab-content">
            <section class=" dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">¡Ya es hora, descarga tu robot!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Cabe resaltar la importancia de probar el robot en una cuenta demo antes de ejecutar operaciones reales. Recomendamos ajustar las configuraciones según las preferencias y estrategias individuales de cada usuario para adaptarse a su perfil de inversor. Esta precaución es esencial para una experiencia de trading más informada y exitosa.</p>
                    <div class="flex flex-col items-center space-y-2 sm:space-y-0 sm:justify-center">
                        <p class="text-center mb-8">Haz clic en el enlace de abajo para descargar los archivos:</p>

                        @if ($aureumRobot)
                                @php
                                    $fileName = str_replace('storage/', '', $aureumRobot->name);
                                @endphp
                                <a href="{{ url($aureumRobot->path) }}" class="download-link" download="{{ $fileName }}">
                                    Robot Aureum
                                    <i class="fas fa-download"></i>
                                </a>
                            @else
                                <p>No se encontró el robot Aureum.</p>
                            @endif
                    </div>

                </div>
            </section>
        


        </div>
    </div>

    <script>
        document.getElementById('comenzar').addEventListener('click', function(e) {
            e.preventDefault();

            // Obtener la pestaña correspondiente al enlace
            const tabId = this.getAttribute('href').substring(1);
            const tabs = document.querySelectorAll('.tab-content');

            // Ocultar todas las pestañas
            tabs.forEach(tab => tab.classList.remove('active'));

            // Mostrar la pestaña correspondiente
            const tabToShow = document.getElementById(tabId);
            tabToShow.classList.add('active');

            // Animar la barra (ajusta según tu diseño)
            const barra = document.querySelector('.barra-animada');
            const offsetLeft = this.offsetLeft;
            const offsetWidth = this.offsetWidth;

            barra.style.width = offsetWidth + 'px';
            barra.style.transform = `translateX(${offsetLeft}px)`;
        });



        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                if (tab.id === tabId) {
                    tab.classList.add('active');
                } else {
                    tab.classList.remove('active');
                }
            });
        }
        const categorias = document.querySelectorAll('#categorias .categoria');
        const contenedorPreguntas = document.querySelectorAll('.contenedor-preguntas');
        let categoriaActiva = null;

        categorias.forEach((categoria) => {
            categoria.addEventListener('click', (e) => {

                categorias.forEach((elemento) => {
                    elemento.classList.remove('activa');
                })

                e.currentTarget.classList.toggle('activa');
                categoriaActiva = categoria.dataset.categoria;


                // activamos el contenedor de preguntas que corresponde

                contenedorPreguntas.forEach((contenedor) => {
                    if (contenedor.dataset.categoria === categoriaActiva) {
                        contenedor.classList.add('activo');
                    } else {
                        contenedor.classList.remove('activo');
                    }
                });


            });
        });

        //respuestas frecuentes

        const preguntas = document.querySelectorAll('.preguntas .contenedor-pregunta');
        preguntas.forEach((pregunta) => {
            pregunta.addEventListener('click', (e) => {
                e.currentTarget.classList.toggle('activa');

                const respuesta = pregunta.querySelector('.respuesta');
                const alturaRealRespuesta = respuesta.scrollHeight;

                if (!respuesta.style.maxHeight) {

                    respuesta.style.maxHeight = alturaRealRespuesta + 'px';

                } else {
                    respuesta.style.maxHeight = null;

                }

                //reiniciamos las demas preguntas
                preguntas.forEach((elemento) => {
                    if (pregunta !== elemento) {
                        elemento.classList.remove('activa');
                        elemento.querySelector('.respuesta').style.maxHeight = null;
                    }

                });



            });
        })
    </script>


</x-app-layout>