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
            grid-template-columns: repeat(4, 1fr);
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
            text-align: left;
        }

        .contenedor-pregunta.activa .respuesta {
            opacity: 1;
            margin-top: 20px;
        }

        .contenedor-pregunta.activa .cruz {
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
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">¡Gracias por elegir nuestro robot Supra!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">A continuación, te proporcionaremos detalles sobre el robot Supra y el proceso completo de instalación. Es crucial seguir cada paso detalladamente para garantizar una instalación correcta. Una vez hayas revisado todo el contenido, estarás listo para proceder con la descarga e instalación del mismo.</p>
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
                    <p>Conoce a Supra</p>
                </div>
                <div class="categoria" data-categoria="broker">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z" />
                    </svg>
                    <p>Instalación y Parametros</p>
                </div>
                <div class="categoria" data-categoria="riesgo">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z" />
                    </svg>
                    <p>Configuración del Experto</p>
                </div>
                <div class="categoria" data-categoria="beneficios">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z" />
                    </svg>
                    <p>Supra en marcha</p>
                </div>
            </div>


            <div class="preguntas">


                <div class="contenedor-preguntas activo" data-categoria="mercado">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Introducción a Supra<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Nuestro mejor robot opera con una estrategia basada en rebotes, generando beneficios mediante operaciones a corto plazo. Supra busca oportunidades en acciones o activos que presenten una brecha significativa entre la media móvil de 25 periodos y el precio actual, ejecutando operaciones con el objetivo de retornar a la media.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Características clave de Supra<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> <b>Antes de poner el robot en marcha, es crucial realizar ciertas verificaciones y entender la importancia de estos puntos:</b>
                        <br>
                        
                        <br>
                        <b>Estrategia de Rebote:</b> Supra se fundamenta en una estrategia inteligente de rebote, capitalizando las oportunidades del mercado a corto plazo.
                        <br>      
                        <b>Operaciones Contrarias:</b> El robot realiza operaciones contrarias, identificando brechas entre el precio actual y la media móvil de 25 periodos para ejecutar transacciones rentables.      
                        <br>
                        <b>Órdenes de Compra y Venta Contextualizadas:</b> Supra establece órdenes de compra y venta con parámetros específicos para maximizar ganancias y minimizar riesgos.
                        <br>
                        </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Órdenes de Compra <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">
                        <br>
                        <b>Órdenes de Compra:</b>
                        <br>
                        • Periodo de Media Móvil Simple: Definido por la variable <b>Period_SMA_UNDER.</b>
                        <br>
                        • Contador de Velas de Activación: Definido por la variable <b>CONT_VELAS_UNDER_ACTIVACION.</b>
                        <br>
                        • Distancia de Precio a Media Móvil: Definida por la variable <b>DIST_VELA_SMA_UNDER.</b>
                        <br>
                        <br>
                        <b>Ejemplo de configuración optimizada:</b>
                        <br>
                        <b>Period_SMA_UNDER = 30 (SMA)</b>
                        <br>
                        <b>CONT_VELAS_UNDER_ACTIVACION = 11 (velas)</b>
                        <br>
                        <b>DIST_VELA_SMA_UNDER = 20 (pips)</b>
                        <br>
                        <br>
                        <img src="{{ asset('img/robots/supra1.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        Cuando se cumplen estas tres condiciones, Supra ejecuta una orden de compra con Stop Loss <b>(SL BUY_1)</b> y Take Profit <b>(TP BUY_1)</b>, ambos optimizables.
                        <br>
                        <br>
                        <img src="{{ asset('img/robots/supra.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Órdenes de Venta <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> 
                        <br>
                        <b>Órdenes de Venta:</b>
                        <br>
                        • Periodo de Media Móvil Simple: Definido por la variable <b>Period_SMA_ON.</b>
                        <br>
                        • Contador de Velas de Activación: Definido por la variable <b>CONT_VELAS_ON_ACTIVACION.</b>
                        <br>
                        • Distancia de Precio a Media Móvil: Definida por la variable <b>DIST_VELA_SMA_ON.</b>
                        <br>
                        <br>
                        <b>Ejemplo de configuración optimizada:</b>
                        <br>
                        <b>Period_SMA_ON = 30 (SMA)</b>
                        <br>
                        <b>CONT_VELAS_ON_ACTIVACION = 11 (velas)</b>
                        <br>
                        <b>DIST_VELA_SMA_ON = 20 (pips)</b>
                        <br>
                        <br>
                        <img src="{{ asset('img/robots/suprasell.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        Al cumplirse estas tres condiciones, Supra ejecuta una orden de venta con Stop Loss <b>(SL SELL_1)</b> y Take Profit <b>(TP SELL_1)</b>, también ajustables según tus preferencias.
                        <br>
                        <br>
                        <img src="{{ asset('img/robots/suprasell2.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br></p>
                    </div>

                </div>


                <div class="contenedor-preguntas" data-categoria="broker">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Instalar Supra en MetaTrader 4<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> 
                        <br>
                        <b>Abre MetaTrader 4:</b>Inicia tu plataforma MetaTrader 4 en tu computadora.</b>
                        <br>
                        <b>Accede a la Carpeta de Datos:</b> En la barra de menú, haz clic en "Archivo" y selecciona "Abrir Carpeta de Datos". Esto te llevará al directorio de MetaTrader 4 en tu sistema.
                        <br>
                        <img src="{{ asset('img/robots/carpeta.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        <b>Ubica la Carpeta MQL4:</b> Dentro de la carpeta de datos, busca y selecciona la carpeta "MQL4".
                        <br>
                        <img src="{{ asset('img/robots/MQL4.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        <b>Dirígete a la Carpeta Experts:</b> Dentro de la carpeta MQL4, localiza la carpeta "Experts".
                        <br>
                        <img src="{{ asset('img/robots/Experts.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        <b>Copia y Pega (Supra_V_1.0.ex4):</b> 
                        <br>
                        • Descarga los archivos necesarios: (Supra_V_1.0.ex4).</b>
                        <br>
                        • Copia el archivo Supra_V_1.0.ex4.</b>
                        <br>
                        • Pégalo dentro de la carpeta "Experts".</b>
                        <br>
                        <img src="{{ asset('img/robots/PasteSupra.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        Con estos pasos simples, habrás instalado exitosamente Supra en la plataforma MetaTrader 4. Ahora lo siguiente es ir al apartado de Asesores Expertos, dale a click derecho y Actualizar, tendria que aparecer el Robot Supra_V_1.0 cargado exitosamente como se muestra en la imagen.
                        <br>
                        <img src="{{ asset('img/robots/Update.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        </p>                   
                    
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Configuración de Presets:<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">
                        Igual que el paso anterior es hora de instalar el archivo de configuración optimizado para que Supra tenga parametros precargados. 
                        <br>
                        <b>Dirígete a la Carpeta Presets:</b> Dentro de la carpeta MQL4, localiza la carpeta "Presets".
                        <br>
                        <img src="{{ asset('img/robots/Presets.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        <b>Instalación de (Supra_V_1.0.set):</b> 
                        <br>
                        • Copia el archivo Supra_V_1.0.set.</b>
                        <br>
                        • Pégalo dentro de la carpeta "Presets".</b>
                        <br>
                        <img src="{{ asset('img/robots/SupraSet.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br>
                        <br>
                        <b>Nota Importante: Los Presets son Opcionales, pero Recomendados.</b>
                        <br>
                        Los presets contienen configuraciones óptimas que han sido cuidadosamente ajustadas para ofrecer un rendimiento destacado. Si no estás seguro de cómo configurar los parámetros, utilizar los presets es la opción recomendada. Sin embargo, ten en cuenta que el usuario tiene la libertad de modificar estos parámetros según sus preferencias. Siéntete libre de ajustar el Stop Loss, Take Profit o Lotaje según tu estrategia y apetito de riesgo.

                        </p>
                    </div>
                </div>


                <div class="contenedor-preguntas" data-categoria="riesgo">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Configuración del Experto <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si abrimos la pestaña llamada 'Propiedades del Experto', se abrirá un recuadro en el que podrán activar, desactivar y asignar valores a diferentes variables para el funcionamiento del robot.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedad1.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Activador BUY/SELL <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Las siguientes variables sirven para determinar qué contexto queremos que ejecute el robot. Si deseamos que ejecute órdenes de compra, dejaremos marcada la variable ACTIVAR_BUY; si queremos que ejecute ventas, dejaremos la opción ACTIVAR_SELL.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedad2.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Variables a optimizar <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Estas variables son las tres que vimos anteriormente, tanto las "UNDER" como las "ON", es decir, tanto las que van por debajo de la media móvil como las que van por encima de la media móvil.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedad3.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Variables fijas <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Estas variables son contadores; no se tocará nada en ellas.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedad4.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Variables de Gestión Monetaria<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Estas variables nos sirven para abrir órdenes con un lote fijo o con un porcentaje. Es importante activar una y desactivar la otra, ya que si ambas están activadas (true), se abrirán el doble de operaciones, una por lote fijo y otra por porcentaje. En este caso, está activado el lote fijo.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedad5.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Ejemplo de Configuración<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">
                        En este ejemplo, te mostramos cómo podrías dejar la configuración de Supra. Cabe recalcar que al descargar el robot, te proporcionamos un archivo .set por si no te animas al principio a probar estrategias. No obstante, también puedes configurar y probar otros valores para ir testeando el robot según tus preferencias y estrategias específicas.
                        <br><br>
                        <img src="{{ asset('img/robots/propiedadesfinished.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        </p>
                    </div>


                </div>


                <div class="contenedor-preguntas" data-categoria="beneficios">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Cuanto dinero necesito para empezar? <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Nosotros te recomendamos empezar con un mínimo de 500 $ / €.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Con qué divisa trabaja el robot Supra?<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">
                        La configuración que utilizamos nosotros es con el par de divisas EUR/USD. Sin embargo, es importante que cada usuario evalúe y pruebe varias divisas para que el robot se adapte a su manera de inversión. Diferentes pares de divisas pueden tener comportamientos y volatilidades distintas, por lo que probar con diversas opciones puede ayudar a encontrar la configuración óptima que se ajuste a las preferencias y estrategias de inversión de cada individuo.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Backtesting <img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">                                        
                    Es recomendable probar el robot utilizando el probador de estrategias de MetaTrader 4 para hacer un backtesting antes de operar en el mercado real. Una vez que uno haya desarrollado una estrategia conveniente y haya visto buenos resultados, entonces es apropiado implementarla en el mercado real.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">¡Ya estás listo para comenzar!<img src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">                                                          
                        ¡Felicidades por completar la configuración de Supra!. Ahora, con tu robot listo, confía en tu trabajo y en tu visión. Recuerda, cada ajuste y cada prueba te acercan más al éxito. ¡Estamos emocionados por ver tus logros como trader! ¡Que haya buenos profits! 🚀💰</p>
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
                    

                        @if ($supraRobot)
                            @php
                                $fileName = str_replace('storage/', '', $supraRobot->name);
                            @endphp
                            <a href="{{ url($supraRobot->path) }}" class="download-link" download="{{ $fileName }}">
                                Robot Supra
                                <i class="fas fa-download"></i>
                            </a>
                        @else
                            <p>No se encontró el robot supra.</p>
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