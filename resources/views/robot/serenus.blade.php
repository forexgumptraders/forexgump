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
            grid-template-columns: repeat(5, 1fr);
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
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">¡Gracias por elegir nuestro robot Serenus!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">A continuación, te proporcionaremos detalles sobre el robot Serenus y el proceso completo de instalación. Es crucial seguir cada paso detalladamente para garantizar una instalación correcta. Una vez hayas revisado todo el contenido, estarás listo para proceder con la descarga e instalación del mismo.</p>
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
                    <p>Serenus</p>
                </div>
            </div>


            <div class="preguntas">


                <div class="contenedor-preguntas activo" data-categoria="mercado">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">El Mercado Forex <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">El mercado Forex es el mercado global donde se compran y venden monedas. Es el mercado financiero más grande y líquido. Los participantes, como bancos e inversores, buscan obtener ganancias especulando sobre las tasas de cambio entre diferentes monedas. Puedes invertir en pares de divisas, como el EUR/USD (euro/dólar estadounidense), tratando de beneficiarte de los movimientos de las tasas de cambio. Es importante comprender el análisis técnico y fundamental para tomar decisiones informadas en el mercado Forex.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Medias Moviles <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> <b>Media Móvil Simple (SMA - Simple Moving Average):</b> La media móvil simple es una herramienta de análisis técnico que suaviza las fluctuaciones de los datos de precios para identificar tendencias. Se calcula sumando los precios de cierre de un periodo específico y dividiendo la suma por el número de periodos.
                        <br>
                        <br>
                         <b>Media Móvil Exponencial (EMA - Exponential Moving Average):</b>La Media Móvil Exponencial es una herramienta utilizada en el análisis técnico para suavizar la variabilidad de los datos de precios y identificar tendencias. A diferencia de la Media Móvil Simple (SMA), la EMA asigna mayor peso a los precios más recientes, lo que la hace más sensible a los cambios recientes en los datos.</p>

                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">RSI <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"><b>RSI (Índice de Fuerza Relativa)</b>El RSI es un indicador de análisis técnico utilizado en los mercados financieros para evaluar la magnitud de los cambios recientes en los precios y determinar si un activo está sobrecomprado o sobrevendido.
                        <br><br> <b>Interpretación: </b> <br> • Si el RSI está por encima de 70, podría sugerir que el activo está sobrecomprado. <br> • Si el RSI está por debajo de 30, podría sugerir que el activo está sobrevendido.
                        <br><br> <b>Importancia de las Divergencias con el RSI:</b> <br> • Las divergencias pueden ayudar a los operadores a identificar posibles cambios en la dirección de la tendencia antes de que se reflejen claramente en los precios. <br> • No siempre se producen divergencias, pero cuando ocurren, pueden ser señales poderosas para los operadores técnicos. <br> • Es crucial confirmar las señales de divergencia con otros indicadores y análisis para aumentar la precisión de las decisiones comerciales. <br> <br> Al utilizar el RSI y observar divergencias, los operadores pueden obtener información valiosa sobre la fuerza y la dirección potencial de una tendencia, lo que puede ser útil en la toma de decisiones de inversión.
                    </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Estocástico <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"><b>Oscilador Estocástico: </b>El Estocástico es un indicador de análisis técnico utilizado para evaluar el impulso del precio y detectar niveles de sobrecompra o sobreventa en un activo financiero. Se calcula comparando el precio de cierre actual con el rango entre el máximo más alto y el mínimo más bajo en un período determinado. El resultado se expresa en porcentaje y se utiliza para generar señales de compra o venta. Un valor por encima de 80 suele indicar sobrecompra, mientras que un valor por debajo de 20 indica sobreventa. </p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Momentum <img  class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"><b>Momentum: </b> El indicador de momentum es una herramienta de análisis técnico que mide la velocidad del cambio de precios de un activo financiero durante un período específico. Se calcula restando el precio de cierre actual del precio de cierre de un período anterior. Un resultado positivo sugiere un impulso alcista, mientras que un resultado negativo indica un impulso bajista. El momentum se utiliza para identificar posibles cambios en la dirección de la tendencia y evaluar la fuerza de un movimiento de precios. Se puede aplicar en diferentes marcos temporales y es una herramienta común en el análisis técnico para respaldar decisiones comerciales.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">MACD <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"><b>MACD: </b>El indicador MACD (Moving Average Convergence Divergence) es una herramienta de análisis técnico que ayuda a identificar cambios en la dirección de la tendencia, la fuerza de la tendencia y posibles puntos de entrada o salida en los mercados financieros. <br><br> El MACD se calcula restando la media móvil exponencial de 26 días de la media móvil exponencial de 12 días. Luego, se traza una línea de señal, que es la media móvil exponencial de 9 días de la diferencia entre estas dos medias. <br> <br> Los cruces entre el MACD y su línea de señal, así como las divergencias entre el MACD y el precio, son utilizados como señales de compra o venta. Un MACD que cruza por encima de su línea de señal sugiere un impulso alcista, mientras que un cruce por debajo indica un impulso bajista.</p>
                    </div>

                </div>


                <div class="contenedor-preguntas" data-categoria="broker">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Qué es un Broker y por que lo necesitamos? <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Un broker es una entidad que facilita la compra y venta de activos financieros, como acciones o divisas, actuando como intermediario entre los compradores y vendedores. Los inversores utilizan brokers para ejecutar transacciones, acceder a diferentes mercados financieros, recibir asesoramiento financiero y gestionar sus inversiones. Es crucial elegir un broker confiable y regulado, considerando factores como costos, servicios y reputación. Los brokers ofrecen plataformas de trading y servicios que permiten a los clientes participar en los mercados y tomar decisiones informadas sobre sus inversiones.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Broker que usamos <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Probamos nuestros robots en el broker <b>Tickmill</b>  para evaluar su rendimiento y eficacia, pero es importante destacar que no estamos afiliados a Tickmill. Recomendamos utilizar nuestras configuraciones específicas al operar con los robots para evitar posibles inconvenientes. Se aconseja encarecidamente contar con un saldo mínimo de 500US$ en la cuenta para operar con estos robots, ya que operar con cantidades inferiores podría no ser factible. No obstante, la decisión final sobre la cantidad a invertir recae en cada individuo, considerando sus propias circunstancias y preferencias financieras.</p>
                    </div>


                </div>


                <div class="contenedor-preguntas" data-categoria="riesgo">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Plataforma MT4 para testear los bots <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Lo primero que debes hacer es ingresar a Tickmill, abrir una cuenta ya sea Demo o Real y descargar el programa MetaTrader 4 desde este enlace <b> https://www.tickmill.com/es/trading-platforms/mt4</b>. Luego, al tener el ejecutable, instálalo siguiendo los pasos hasta abrir el programa. Una vez abierto, verás una ventana como la siguiente:  
                        <br><br>
                        <img src="{{ asset('img/robots/mt1.png') }}" alt="Ejemplo" style="  display: block; margin: 0 auto;">
                        <br><br>
                        Luego, haz clic sobre el icono marcado en rojo y después haz clic derecho en 'Accounts'. Entra con la cuenta que abriste en Tickmill.
                        <br><br>
                        <img src="{{ asset('img/robots/mt2.png') }}" alt="Ejemplo" style=" display: block; margin: 0 auto;">
                        <br><br>
                        Ingresa con las credenciales de tu cuenta. Estas te habrán llegado al correo ingresado en el broker. Tienes que poner exactamente lo mismo que te indica el correo: tu login, tu contraseña y tu servidor.
                        <br><br>
                        <img src="{{ asset('img/robots/mt3.png') }}" alt="Ejemplo" style=" display: block; margin: 0 auto;">
                        <br><br>
                        Una vez puestas las credenciales, debes ver algo como esto. Abajo a la derecha, cambiará de decir 'No hay conexión' a un número con unas barras en verde, confirmando la conexión exitosa, como se muestra en la imagen.
                        <br><br> 
                        <img src="{{ asset('img/robots/mt4.png') }}" alt="Ejemplo" style=" display: block; margin: 0 auto;">
                        <br><br>
                        Listo, ya tienes tu cuenta de MetaTrader lista para operar.
                        </p>                    
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Cálculo de Riesgo<img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">
                        La gestión de riesgos es una parte crucial de cualquier estrategia de trading, ya sea manual o automatizada a través de un robot de trading. Aquí hay algunas pautas para implementar una buena gestión de riesgos en el contexto de un robot de trading:
                        <br>
                        • <b>Tamaño de la posición (Lot Size): </b> Define el tamaño de la posición que el robot debe tomar en cada operación. Este tamaño se debe calcular en función del riesgo que estás dispuesto a asumir en cada operación. No debes arriesgar más de un cierto porcentaje de tu capital en una sola operación. Por ejemplo, si decides arriesgar el 2% de tu capital en cada operación, el tamaño de la posición se ajustará en consecuencia.
                        <br>
                        • <b>Stop Loss y Take Profit: </b> Establece niveles de stop loss y take profit para cada operación. El stop loss limita las pérdidas, y el take profit asegura que tomes ganancias cuando alcanzas un cierto nivel. Ajusta estos niveles de acuerdo con tu análisis de riesgo y recompensa.
                        <br>
                        • <b>Diversificación:</b>  Si estás utilizando varios robots o estrategias, asegúrate de diversificar tus inversiones. No concentres todo tu capital en un solo robot o instrumento financiero.
                        <br>
                        • <b>Monitorización Continua:</b>  Supervisa el rendimiento del robot de forma regular y ajusta la configuración según sea necesario. Los mercados pueden cambiar, y es importante adaptar tu estrategia a las condiciones actuales del mercado.
                        <br>
                        • <b>Backtesting y Optimización:</b>  Antes de implementar tu robot en un entorno de trading en vivo, realiza un extenso backtesting para evaluar su rendimiento histórico. Sin embargo, ten en cuenta que el rendimiento pasado no garantiza resultados futuros.
                        <br>
                        • <b>Configuración de Riesgo General:</b>  Establece parámetros generales de riesgo para el robot. Esto podría incluir límites diarios de pérdidas, número máximo de operaciones abiertas simultáneamente, entre otros.
                        <br>
                        • <b>Monitoreo del Capital:</b>  Establece un límite de pérdida total que estás dispuesto a aceptar en tu cuenta. Si se alcanza este límite, considera la posibilidad de detener temporalmente el robot y reevaluar tu estrategia.
                        <br>
                        • <b>Actualizaciones y Mejoras:</b>  Mantén tu robot actualizado desde Forex Gump. Los mercados evolucionan, y tu robot puede necesitar ajustes para seguir siendo eficaz.
                        <br><br>
                        Recuerda que la gestión de riesgos es clave para la supervivencia a largo plazo en el trading. Aunque los robots pueden ejecutar operaciones automáticamente, es responsabilidad del trader establecer y ajustar adecuadamente los parámetros de gestión de riesgos.
                            
                    
                    
                        </p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Como evitar un "Margin Call"? <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> <b>Margen:</b> 
                        <br><br>
                        <b>• Definición:</b> El margen es la cantidad de dinero requerida para abrir una posición en el mercado financiero. Representa un porcentaje del valor total de la posición y actúa como un depósito de buena fe para cubrir posibles pérdidas.
                        <br>
                        <b>• Importancia: </b> El margen es esencial para operar con apalancamiento y permite a los traders controlar posiciones más grandes de lo que su capital inicial permitiría. Sin embargo, el uso irresponsable del margen puede llevar a pérdidas significativas.
                        <br><br>
                        <b>Margen Libre:</b>
                        <br><br>                       
                        El margen libre, también conocido como "capital libre" o "capital disponible", se refiere al saldo de la cuenta de trading que no está actualmente comprometido en mantener posiciones abiertas. En otras palabras, es la cantidad de dinero que queda disponible en la cuenta después de tener en cuenta el margen utilizado para las posiciones abiertas.
                        <br>
                        <b>• Equidad:</b> Es el valor total de la cuenta, que incluye las ganancias o pérdidas no realizadas y el saldo inicial.
                        <br>
                        <b>•  Margen Utilizado:</b> Es la cantidad de dinero que se ha utilizado para mantener las posiciones abiertas.
                        <br><br>
                        <b> Margin Call:</b>
                        <br><br>
                        <b>• Definición:</b> Un margin call (llamada de margen) ocurre cuando las pérdidas en una cuenta alcanzan un nivel en el que el broker solicita al trader que deposite más fondos para mantener las posiciones abiertas. Si el trader no responde al margin call, el broker puede cerrar automáticamente las posiciones perdedoras para limitar las pérdidas.
                        <br><br>
                        <b>Apalancamiento:</b>
                        <br><br>
                        <b>• Definición:</b> El apalancamiento es la capacidad de controlar una gran posición en el mercado con una cantidad relativamente pequeña de capital. Se expresa como una proporción (por ejemplo, 50:1), indicando cuántas veces el capital del trader puede multiplicarse para determinar el tamaño de la posición.
                        <br>
                        <b>• Relación con el Margen:</b> El apalancamiento está estrechamente relacionado con el margen. Un alto apalancamiento implica un bajo margen requerido para abrir una posición. Aunque el apalancamiento amplifica las ganancias potenciales, también aumenta el riesgo de pérdidas, especialmente si no se gestiona adecuadamente.
                        <br><br>
                        <b>Relación entre los Conceptos:</b>
                        <br><br>
                        • El margen es el depósito necesario para abrir una posición, mientras que el apalancamiento determina cuánto controla el trader en relación con su capital.
                        <br>
                        • Un margin call puede ocurrir cuando las pérdidas alcanzan un nivel peligroso debido al apalancamiento excesivo. Es una advertencia para que el trader deposite más fondos o cierre posiciones.
                        <br>
                        • La gestión adecuada del margen y el apalancamiento es esencial para evitar pérdidas catastróficas y proteger el capital de trading.
                        <br><br>
                        En resumen, el margen permite operar con apalancamiento, pero su uso indebido puede llevar a un margin call. La comprensión y la gestión prudente del apalancamiento y el margen son fundamentales para el éxito y la supervivencia en el trading.
                    
                    
                        </p>
                    </div>
                    


                </div>


                <div class="contenedor-preguntas" data-categoria="disponibilidad">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Antes de poner el Bot en marcha <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta"> <b>Antes de poner los robots en marcha, es crucial realizar ciertas verificaciones y entender la importancia de estos puntos:</b>
                        <br><br>
                        <b>Verificar Configuraciones del Robot:</b>
                        <br>
                        • Antes de poner en marcha los robots, es esencial confirmar que las configuraciones están correctamente establecidas. Esto incluye parámetros como tamaños de posición, niveles de riesgo y otros ajustes específicos de la estrategia.
                        <br><br>
                        <b>Observar el Comportamiento Posterior a las Configuraciones:</b>
                        <br>
                        • Observar cómo se comportan los robots después de aplicar las configuraciones es clave. Se debe evaluar si las estrategias automatizadas se ajustan a las condiciones actuales del mercado y si generan resultados coherentes con las expectativas.
                        <br><br>
                        <b>Realizar Pruebas en Horarios y Condiciones Variadas:</b>
                        <br>
                        • Es necesario realizar pruebas exhaustivas, ya que los robots pueden comportarse de manera diferente en distintos horarios y condiciones de mercado. Asegurarse de que funcionan de manera consistente en diversos escenarios es fundamental para comprender su desempeño.
                        <br><br>
                        <b>Entender la Importancia de Respetar Horarios y Estadísticas:</b>
                        <br>
                        • Reconocer que, a pesar de ser automáticos, los robots pueden generar emociones similares al trading manual si no se respetan las estrategias predefinidas. La consistencia en la aplicación de las estrategias es clave para evitar decisiones impulsivas que puedan afectar el rendimiento.
                        <br><br>
                        <b>Monitorear Regularmente el Funcionamiento de los Robots:</b>
                        <br>
                        • Establecer un seguimiento periódico de los robots es esencial para asegurar que estén operando correctamente y en línea con las expectativas. Esto implica revisar su desempeño, ajustar configuraciones si es necesario y verificar la conexión con el servidor.
                        <br><br>
                        <b>Eliminar Emociones y Mantener Objetividad:</b>
                        <br>
                        • Aunque los robots son automáticos, la intervención humana es necesaria para mantener la objetividad. El principal objetivo es deshacerse de emociones impulsivas, similar al trading manual, al revisar y ajustar los robots periódicamente.
                        <br><br>
                        Al comprender y abordar estos puntos antes de poner en marcha los robots, se puede mejorar la eficacia y consistencia de las estrategias automatizadas, permitiendo que operen de manera más autónoma y eficiente.
                        </p>
                   
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Guardar configuraciones<img  class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Como conseguir un server gratuito?<img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Nueva opción de server<img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Poner el robot en funcionamiento<img  class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Errores comunes<img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Visualizar operaciones en el movil<img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Si, puedes usar cualquier broker para operar, aunque te recomendamos elegir con cuidado un buen broker con certificados de calidad. Nosotros te recomendamos.</p>
                    </div>
                </div>


                <div class="contenedor-preguntas" data-categoria="robot">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">Presentación Serenus <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
                        <p class="respuesta">Nosotros te recomendamos empezar con un mínimo de 250 $ / €.</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">Parametros <img class="cruz" src="{{ asset('img/plus.svg') }}" alt="Abrir"></p>
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
                       

                            @if ($serenusRobot)
                                @php
                                    $fileName = str_replace('storage/', '', $serenusRobot->name);
                                @endphp
                                <a href="{{ url($serenusRobot->path) }}" class="download-link" download="{{ $fileName }}">
                                    Robot Serenus
                                    <i class="fas fa-download"></i>
                                </a>
                            @else
                                <p>No se encontró el robot Serenus.</p>
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