<x-app-layout>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Forex Gump</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/png" href="{{ asset('icono-pestaña.png') }}">


        <!-- CSS here -->
        <link rel="stylesheet" href="css/robot/bootstrap.min.css">
        <link rel="stylesheet" href="css/robot/owl.carousel.min.css">
        <link rel="stylesheet" href="css/robot/slicknav.css">
        <link rel="stylesheet" href="css/robot/animate.min.css">
        <link rel="stylesheet" href="css/robot/magnific-popup.css">
        <link rel="stylesheet" href="css/robot/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/robot/themify-icons.css">
        <link rel="stylesheet" href="css/robot/slick.css">
        <link rel="stylesheet" href="css/robot/nice-select.css">
        <link rel="stylesheet" href="css/robot/style.css">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>

    <body>

        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>

        <main>

            <!-- Slider Area Start-->
            <div class="slider-area">
                <div class="slider-active">
                    <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                        <div class="container">

                            <style>
                                .head-img {
                                    margin-top: -180px;
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
                                /* Oculta la barra de desplazamiento pero permite el desplazamiento */
                                .form {
                                    max-height: 600px; /* Establece la altura máxima según sea necesario */
                                    overflow-y: scroll; /* Muestra una barra de desplazamiento solo si es necesario */
                                    scrollbar-width: none; /* Oculta la barra de desplazamiento en navegadores compatibles */
                                    -ms-overflow-style: none; /* Oculta la barra de desplazamiento en Internet Explorer */
                                }

                                /* Muestra la barra de desplazamiento en Firefox */
                                .form::-webkit-scrollbar {
                                    display: none; /* Oculta la barra de desplazamiento en navegadores WebKit */
                                }

                            </style>
                            <div class="row d-flex align-items-center head-img">
                                <div class="col-lg-6 col-md-9 ">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInUp" data-delay=".4s">Inicia en este mundo sin estrés</span>
                                        <script>
                                            window.onload = function() {
                                                var texto = document.getElementById("texto");
                                                if (window.innerWidth < 500) {
                                                    texto.setAttribute("x", "23.5%");
                                                }
                                            };
                                        </script>
                                        <svg class="tituloPrincipal" viewBox="0 0 960 300">
                                            
                                            <symbol id="s-text">
                                            <text text-anchor="middle" y="50%" x="23%" id="texto">HECHO POR Y</text>
                                            <text text-anchor="middle" x="25%" y="80%">PARA TRADERS</text>

                                            </symbol>
                                            

                                            <g class = "g-ants">
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            </g>
                                        </svg>
          

                                    <p data-animation="fadeInUp" data-delay=".8s">Descubre nuestra plataforma. Ofrecemos señales gratuitas en nuestra aplicación y Telegram, filtradas por traders expertos en análisis técnico y fundamental.</p>
                                        <!-- Slider btn -->
                                        <div class="slider-btns">
                                            <!-- Hero-btn -->
                                            <a data-animation="fadeInLeft" data-delay="1.0s" href="articles" class="btnComenzar btn radius-btn">Comenzar</a>
                                            <!-- Video Btn -->
                                            <!-- <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href=""><i class="fas fa-play"></i></a> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                        @guest
                                        <div class="box">
                                            <div class="form" style="max-height: 660px; overflow-y: auto;"> <!-- Ajusta la altura máxima según sea necesario -->
                                                <h2>Regístrate</h2>
                                                <x-jet-validation-errors class="mb-4" />

                                                <form id="form-white" method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="inputBox">
                                                        <x-jet-label for="name" />
                                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="{{ __('Nombre') }}" required autofocus autocomplete="name" />
                                                    </div>

                                                    <div class="mt-4 inputBox">
                                                        <x-jet-label for="email" />
                                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="{{ __('Email') }}" :value="old('email')" required />
                                                    </div>

                                                    <div class="mt-4 inputBox">
                                                        <x-jet-label for="password" />
                                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="{{ __('Contraseña') }}" required autocomplete="new-password" />
                                                    </div>

                                                    <div class="mt-4 inputBox">
                                                        <x-jet-label for="password_confirmation" />
                                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="{{ __('Confirmar contraseña') }}" required autocomplete="new-password" />
                                                    </div>

                                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                    <div class="mt-4">
                                                        <x-jet-label for="terms">
                                                            <div class="flex items-center">
                                                                <x-jet-checkbox name="terms" id="terms" />

                                                                <div class="ml-2">
                                                                    {!! __('Estoy de acuerdo con los :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                    ]) !!}
                                                                </div>
                                                            </div>
                                                        </x-jet-label>
                                                    </div>
                                                    @endif

                                                    <br>
                                                    <div class="flex items-center mb-2 mt-2">
                                                        <div class="line"></div>
                                                        <div class="circle"></div>
                                                        <div class="line"></div>
                                                    </div>
                  

                                                                        
                                                    <div class="flex justify-center">
                                                        <div class="mt-4 mb-4 mr-2" style="width: 150px;"> <!-- Establece el ancho deseado aquí -->
                                                            <!-- Facebook login -->
                                                            <div>
                                                                <a href="{{route('auth.redirect')}}" class="ingresar flex items-center justify-center px-2 py-2 space-x-2 text-xs bg-blue-500 text-white transition-colors duration-200 transform border dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg>
                                                                    <span class="text-sm text-white dark:text-gray-200 ml-1">Facebook</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 mb-4 ml-2" style="width: 150px;"> <!-- Establece el mismo ancho aquí -->
                                                            <!-- Google login -->
                                                            <div>
                                                                <a href="{{route('auth.redirect')}}" class="ingresar flex items-center justify-center px-2 py-2 space-x-2 text-xs bg-red-500 text-white transition-colors duration-200 transform border dark:text-gray-300 dark:border-gray-300 hover:bg-gray-600 dark:hover:bg-gray-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);"><path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path>
                                                                    </svg>
                                                                    <span class="text-sm text-white dark:text-gray-200 ml-1">Google</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex items-center justify-end mt-4">
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                            {{ __('¿Ya estás registrado?') }}
                                                        </a>

                                                        <x-jet-button class="ml-4 btnUnirme">
                                                            {{ __('Unirme') }}
                                                        </x-jet-button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @else
                                        <!-- Si el usuario está autenticado, muestra la imagen -->
                                        <img src="img/shape/boy.png" alt="">

                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-6 col-md-9 ">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInUp" data-delay=".4s">Hecho por traders para traders</span>
                                        <svg class="tituloPrincipal" viewBox="0 0 960 300">
                                            <symbol id="s-text">
                                            <text text-anchor="middle" x="26%" y="50%">Comenzá a hacer</text>
                                            <text text-anchor="middle" x="27%" y="80%">Trading de estrés</text>

                                            </symbol>

                                            <g class = "g-ants">
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            <use xlink:href="#s-text" class="text-copy"></use>
                                            </g>
                                        </svg>
                                        <p data-animation="fadeInUp" data-delay=".8s">Descubre nuestra plataforma. Ofrecemos señales gratuitas en nuestra aplicación y Telegram, filtradas por traders expertos en análisis técnico y fundamental.</p>
                                        <!-- Slider btn -->
                                        <div class="slider-btns">
                                            <!-- Hero-btn -->
                                            <a data-animation="fadeInLeft" data-delay="1.0s" href="articles" class="btnComenzar btn radius-btn">Comenzar</a>
                                            <!-- Video Btn -->
                                            <!-- <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href=""><i class="fas fa-play"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                        <img src="img/hero/imgInicio.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
            <!-- Best Features Start -->
        <section class="best-features-area ftco-counter">
          
              
            <div class="contadores">
                    <div class="col-lg-15">
                        <div class="available-app-area project_section_2 layout_padding" style=" padding: 50px;">
                            <div class="container">
                                <div class="row">
                                <!-- Elemento 1 -->
                                <div class="col-lg-4 col-sm-6 text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="icon_1 mb-3"><img src="img/icons/icon-3.png" style="width: 70px; height: 70px;"></div>
                                        <h3 class="accounting_text_1" style="font-size: 46px;">
                                            <span style="font-size: inherit;">+</span>
                                            <span class="number" style="font-size: inherit; margin-left: -10px;" data-number="+{{$userCount}}">{{$userCount}}</span>
                                        </h3>
                                        <p class="years_text">Traders Activos</p>
                                    </div>
                                </div>
                                <!-- Elemento 2 -->
                                <div class="col-lg-4 col-sm-6 text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="icon_1 mb-3"><img src="img/icons/icon-1.png" style="width: 70px; height: 70px;"></div>
                                        <h3 class="accounting_text_1" style="font-size: 46px;">
                                            <span style="font-size: inherit;">+</span>
                                            <span class="number" style="font-size: inherit; margin-left: -10px;" data-number="7">7</span>
                                        </h3>
                                        <p class="years_text">Años en el Mercado</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="icon_1 mb-3"><img src="img/icons/icon-2.png" style="width: 70px; height: 70px;"></div>
                                        <h3 class="accounting_text_1" style="font-size: 46px;">
                                            <span style="font-size: inherit;">+</span>
                                            <span class="number" style="font-size: inherit; margin-left: -10px;" data-number="400">400</span>
                                        </h3>
                                        <p class="years_text">Visitan Forex Gump</p>
                                    </div>
                                </div>


                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="container">
              
                    
                    <div class="row justify-content-end">
                        
                        <div class="col-xl-8 col-lg-10">
                  
                            <!-- Section caption -->
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-features mb-70">
                                        <div class="features-icon" style="text-align: center; height: 48px; display: flex; align-items: center; justify-content: center;">
                                            <span class="flaticon-support">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                                    <path d="m12.223 11.641-.223.22-.224-.22a2.224 2.224 0 0 0-3.125 0 2.13 2.13 0 0 0 0 3.07L12 18l3.349-3.289a2.13 2.13 0 0 0 0-3.07 2.225 2.225 0 0 0-3.126 0z"></path>
                                                    <path d="m21.707 11.293-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707zM18.001 20H6v-9.585l6-6 6 6V15l.001 5z"></path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="features-caption">
                                            <h3>Comunidad Transparente</h3>
                                            <p>Forex Gump se centra en crear una comunidad donde aprendas e inviertas sin pagar costosos cursos o fórmulas mágicas de vendehumos, priorizando la transparencia en los resultados.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-features mb-70">
                                        <div class="features-icon">
                                            <span class="flaticon-support">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                                    <path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 16H5V5h14v14z"></path>
                                                    <path d="M11 7h2v2h-2zm0 4h2v6h-2z"></path>
                                                </svg>
                                        </div>
                                        <div class="features-caption">
                                            <h3>Información Fundamental</h3>
                                            <p>Proporcionamos noticias del mercado y el mundo para que los traders tomen decisiones fundamentales informadas, complementando el análisis técnico.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-features mb-70">
                                        <div class="features-icon">
                                            <span class="flaticon-support">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                                    <path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 2 .001 4H5V5h14zM5 11h8v8H5v-8zm10 8v-8h4.001l.001 8H15z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="features-caption">
                                            <h3>Plataforma Única</h3>
                                            <p>Forex Gump destaca por su plataforma única e innovadora, brindando una experiencia de trading distintiva con análisis en tiempo real y una interfaz amigable.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">

                                    <div class="single-features mb-70">
                                        <div class="features-icon">
                                            <span class="flaticon-support">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                                    <path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="features-caption">
                                            <h3>Soporte Técnico 24/7</h3>
                                            <p>Ofrecemos asistencia técnica continua las 24 horas, buscando mejorar la experiencia de los usuarios y fortalecer nuestra comunidad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shpe -->
                <div class="feo features-shpae d-none d-lg-block">

                    <img class="imgInicio" src="img/hero/imgInicio.png" alt="">

                </div>

            </section>
            <!-- Best Features End -->
            <!-- Services Area Start -->
            <section class="service-area sky-blue section-padding2">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-tittle text-center">
                                <h2>Todo en un solo lugar</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="services-caption text-center mb-30">
                                <div class="service-icon">
                                    <span class="flaticon-businessman">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                            <path d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z"></path>
                                            <path d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="service-cap">
                                    <h4><a href="/">Blog de Noticias</a></h4>
                                    <p>Explora nuestro blog con las últimas noticias. Mantente informado sobre eventos clave que afectan los mercados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="services-caption active text-center mb-30">
                                <div class="service-icon">
                                    <span class="flaticon-pay">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                            <path d="M12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm8.707-5.707L19 14.586V10c0-3.217-2.185-5.926-5.145-6.743C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707A.997.997 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.997.997 0 0 0-.293-.707zM16 12h-3v3h-2v-3H8v-2h3V7h2v3h3v2z"></path>
                                        </svg>

                                    </span>
                                </div>
                                <div class="service-cap">
                                    <h4><a href="/articles">Alertas Gratuitas</a></h4>
                                    <p>Recibe alertas gratuitas directamente en tu dispositivo en timpo real. Identifica oportunidades, copia, pega y llenate de profits!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="services-caption text-center mb-30">
                                <div class="service-icon">
                                    <span class="flaticon-plane">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); display: inline-block; vertical-align: middle; margin-top: -4px;">
                                            <path d="M21.928 11.607c-.202-.488-.635-.605-.928-.633V8c0-1.103-.897-2-2-2h-6V4.61c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5c-1.103 0-2 .897-2 2v2.997l-.082.006A1 1 0 0 0 1.99 12v2a1 1 0 0 0 1 1H3v5c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5a1 1 0 0 0 1-1v-1.938a1.006 1.006 0 0 0-.072-.455zM5 20V8h14l.001 3.996L19 12v2l.001.005.001 5.995H5z"></path>
                                            <ellipse cx="8.5" cy="12" rx="1.5" ry="2"></ellipse>
                                            <ellipse cx="15.5" cy="12" rx="1.5" ry="2"></ellipse>
                                            <path d="M8 16h8v2H8z"></path>
                                        </svg>

                                    </span>
                                </div>
                                <div class="service-cap">
                                    <h4><a href="/trading-ai">Robots Autónomos</a></h4>
                                    <p>Descubre la autonomía y dejale tu trading a nuestros robots. Elimina tus emociones y optimiza tus operaciones en automático </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
            <!-- Applic App Start -->
            <div class="applic-apps section-padding2">
                <div class="container-fluid">
                    <div class="row">
                        <!-- slider Heading -->
                        <div class="col-xl-4 col-lg-4 col-md-8">
                            <div class="single-cases-info mb-30">
                                <h3>Una Web muy<br>Versátil</h3>
                                <p>
                                    Con nuestra plataforma, recibir señales es más fácil que nunca. Miralas en la aplicacion web, por correo o a través de Telegram. Desde la comodidad de tu movil, accede a señales en tiempo real al precio mas bajo.</p>
                            </div>
                        </div>
                        <!-- OwL -->
                        <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                            <div class="app-active owl-carousel">
                                <div class="single-cases-img">
                                    <img src="img/gallery/App1.png" alt="">
                                </div>
                                <div class="single-cases-img">
                                    <img src="img/gallery/App2.png" alt="">
                                </div>
                                <div class="single-cases-img">
                                    <img src="img/gallery/App4.png" alt="">
                                </div>
                                <div class="single-cases-img">
                                    <img src="img/gallery/App5.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Applic App End -->
            <!-- Best Pricing Start -->
             <!-- <section id="prices" class="best-pricing pricing-padding" data-background="img/gallery/best_pricingbg.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-tittle section-tittle2 text-center">
                                <h2>Distintos Robots, mismos propositos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  -->
            <!-- Best Pricing End -->
            <!-- Pricing Card Start -->
          <!-- <div class="pricing-card-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-card text-center mb-30">
                                <div class="card-top">
                                    <span>Serenus</span>
                                    <h4>$89<span>/ Pago unico</span></h4>
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>Increase traffic 50%</li>
                                        <li>E-mail support</li>
                                        <li>10 Free Optimization</li>
                                        <li>24/7 support</li>
                                    </ul>
                                    <a href="/trading-ai/serenus" class="btn card-btn1">Robot Serenus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-card  text-center mb-30">
                                <div class="card-top">
                                    <span>Aureum</span>
                                    <h4>$129<span>/ Pago unico</span></h4>
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>Increase traffic 50%</li>
                                        <li>E-mail support</li>
                                        <li>10 Free Optimization</li>
                                        <li>24/7 support</li>
                                    </ul>
                                    <a href="/trading-ai/aureum" class="btn card-btn1">Robot Aureum</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-card text-center mb-30">
                                <div class="card-top">
                                    <span>Supra</span>
                                    <h4>$179<span>/ Pago unico</span></h4>
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>Increase traffic 50%</li>
                                        <li>E-mail support</li>
                                        <li>10 Free Optimization</li>
                                        <li>24/7 support</li>
                                    </ul>
                                    <a href="/trading-ai/supra" class="btn card-btn1">Robot Supra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->
            <!-- Pricing Card End -->

            
            <!-- Our Customer Start -->

          <!-- <div class="our-customer section-padd-top30">
                <div class="container-fluid">
                    <div class="our-customer-wrapper">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-8">
                                <div class="section-tittle text-center">
                                    <h2>What Our Customers<br> Have to Say</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="customar-active dot-style d-flex dot-style">
                                    <div class="single-customer mb-100">
                                        <div class="what-img">
                                            <img src="img/shape/man1.png" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                        </div>
                                    </div>

                                    <div class="single-customer mb-100">
                                        <div class="what-img">
                                            <img src="img/shape/man2.png" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                        </div>
                                    </div>

                                    <div class="single-customer mb-100">
                                        <div class="what-img">
                                            <img src="img/shape/man3.png" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                        </div>
                                    </div>

                                    <div class="single-customer mb-100">
                                        <div class="what-img">
                                            <img src="img/shape/man2.png" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->

            <div class="faqs-banner say-something-aera pt-90 pb-90 fix" id="faqs-section">
                
            <div class="col-lg-4 col-sm-6 text-center">
                  <div class="d-flex flex-column align-items-center">
                        <div class="icon_1 mb-3"><img src="img/icons/conversacion.png" style="width: 70px; height: 70px;"></div>
                        <h3 class="accounting_text_2 mb-2" style="font-size: 46px;">FAQ's</h3>
                        <p class="years_text_2">Preguntas Frecuentes</p>
                  </div>
                                    
            </div>                                                            

                                  <!-- shape -->
                <div class="say-shape">
                    <img src="img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                    <img src="img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
                </div>

            </div>


            <main class="faqs">
                <!-- <br><br><br>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle text-center">
                            <h2>FAQ's</h2>
                        </div>
                    </div>
                </div> -->


                <div class="categorias" id="categorias">
                    <div class="categoria activa" data-categoria="servicio">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z" />
                        </svg>
                        <p>Comunidad</p>
                    </div>
                    <div class="categoria" data-categoria="metodos-pago">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" style="fill: rgba(184, 184, 184, 1);"><path d="M21 10.975V8a2 2 0 0 0-2-2h-6V4.688c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5a2 2 0 0 0-2 2v2.998l-.072.005A.999.999 0 0 0 2 12v2a1 1 0 0 0 1 1v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a1 1 0 0 0 1-1v-1.938a1.004 1.004 0 0 0-.072-.455c-.202-.488-.635-.605-.928-.632zM7 12c0-1.104.672-2 1.5-2s1.5.896 1.5 2-.672 2-1.5 2S7 13.104 7 12zm8.998 6c-1.001-.003-7.997 0-7.998 0v-2s7.001-.002 8.002 0l-.004 2zm-.498-4c-.828 0-1.5-.896-1.5-2s.672-2 1.5-2 1.5.896 1.5 2-.672 2-1.5 2z"></path></svg>                        <p>Robots de Trading</p>
                    </div>
                    <div class="categoria" data-categoria="tecnica">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" style="fill: rgba(184, 184, 184, 1);"><path d="M6 19h1v3h2v-3h1a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H9V2H7v3H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1zM7 7h2v10H7zm7 10h1v3h2v-3h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V4h-2v3h-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm1-8h2v6h-2z"></path></svg>
                        <p>Señales Financieras</p>
                    </div>
                    <div class="categoria" data-categoria="brokers">
                        <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z" />
                        </svg>
                        <p>Metodos de pago</p>
                    </div>
                </div>


                <div class="preguntas">


                    <div class="contenedor-preguntas activo" data-categoria="servicio">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Que es Forex Gump? <img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">
                                Forex Gump es una plataforma diseñada por traders para traders, centrada en la transparencia de resultados. Enfocada en destacar el desempeño de expertos con más de 7 años de experiencia en el mercado. 
                                <br><br>
                                Nuestro principal objetivo es forjar una comunidad limpia y honesta, donde los traders se sientan cómodos con nuestra información y servicios, promoviendo la confianza y la transparencia en el mundo del trading
                            </p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Que servicios ofrecemos? <img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">
                                Forex Gump ofrece una variedad de servicios para traders, incluyendo un blog de noticias que proporciona información relevante sobre el mundo del trading. Además, la plataforma ofrece servicios de trading algorítmico con robots creados internamente, los cuales han sido probados y testeados. Estos robots pueden recibir actualizaciones para mejorar su rendimiento con el tiempo.
                                <br><br>
                                Adicionalmente, Forex Gump brinda señales financieras tanto gratuitas como pagas. Los usuarios tienen la flexibilidad de recibir estas señales a través de la aplicación, correo electrónico o Telegram, según sus preferencias individuales. En resumen, la plataforma busca ofrecer una experiencia integral al proporcionar recursos informativos, herramientas de trading automatizado y servicios de señales adaptados a las preferencias de los traders.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Quién conforma Forex Gump?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Forex Gump está compuesto por un equipo de traders y programadores. La sinergia de estas dos disciplinas tiene como objetivo la creación de un sistema para traders único en comparación con otras opciones en internet. La plataforma se distingue por su enfoque en la simplicidad, practicidad y seguridad, proporcionando a los usuarios una experiencia de trading confiable y eficiente.</p>
                        </div>

                    </div>


                    <div class="contenedor-preguntas" data-categoria="metodos-pago">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué es un robot de trading y para qué sirve en el mercado de forex?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Un robot de trading es un software automatizado diseñado para ejecutar operaciones en los mercados financieros en lugar de un operador humano.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué ventajas tiene utilizar un robot en comparación con el trading manual?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Mayor velocidad de ejecución, objetividad, y capacidad para operar las 24 horas del día sin fatiga.</p>
                        </div>

                        <div class="contenedor-pregunta">
                                <p class="pregunta">¿Qué robots ofrece nuestra plataforma?<img src="img/plus.svg" alt="Abrir"></p>
                                <p class="respuesta">Ofrecemos actualmente un robot en nuestra plataforma: el Robot Supra. Este software están diseñado para proporcionar a los traders herramientas eficaces y versátiles para maximizar sus operaciones en el mercado con un porcentaje de acierto del 95% o más, probado y testeado por traders en diferentes años y momentos.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿En qué marco temporal y con qué par de divisas opera nuestro Robot Supra?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">EL robot Supra trabaja en un periodo de 4 horas con la moneda EUR/USD.</p>
                        </div>


                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Puedo personalizar la configuración de los robots por mi cuenta?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Sí, los traders tienen la libertad de ajustar la configuración de los robots según sus preferencias. No obstante, para facilitar este proceso, proporcionamos un archivo .set que contiene configuraciones adaptadas al backtesting realizado por Forex Gump. Este archivo simplifica la instalación y uso de los robots, asegurando una puesta en marcha eficiente y basada en pruebas sólidas.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cómo se puede descargar nuestros Robots y cuáles son las ventajas de adquirirlo con Forex Gump?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Nuestra plataforma permite la descarga de los Robots por siempre, proporcionando actualizaciones sin costos adicionales.</p>
                        </div>


                    </div>


                    <div class="contenedor-preguntas" data-categoria="tecnica">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué es una señal financiera? <img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Una señal financiera es una indicación o recomendación generada por análisis técnico, fundamental e institucional, que sugiere posiciones de compra o venta en los mercados financieros.</p>
                        </div>
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué tipo de señales ofrecemos?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Ofrecemos señales en diversos nichos, abarcando desde divisas hasta criptomonedas, proporcionando a los traders una gama amplia de oportunidades.</p>
                        </div>
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué tipos de órdenes enviamos?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Enviamos diversas órdenes, como sell, buy, sell stop, buy stop, sell limit y buy limit, para ofrecer versatilidad en las operaciones y adaptarnos a distintas estrategias.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué información se envía junto con las señales?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Cada señal incluye la orden de compra, un análisis detallado sobre la señal, gráficos representativos, niveles de stop loss y take profit para gestionar riesgos.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cómo se realizan las actualizaciones de las señales?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Actualizamos permanentemente el estado de las señales, indicando si están abiertas o cerradas, para que los usuarios estén al tanto de la situación actual de cada señal.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué función tiene la sección de likes en las señales?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">La sección de likes permite a los traders expresar su preferencia, indicando qué señales fueron más valoradas. Esto ofrece a los usuarios una perspectiva sobre la confiabilidad y popularidad de las señales.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Cómo puede un trader acceder a estas señales?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Los traders pueden acceder a las señales de manera gratuita sin suscripción, y también ofrecemos una opción de suscripción para señales plus con beneficios adicionales</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Quiénes son los responsables de enviar estas señales?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Nuestras señales son enviadas por traders con más de 7 años de experiencia en el mercado, respaldadas por un análisis técnico, fundamental e institucional exhaustivo.</p>
                        </div>



                    </div>


                    <div class="contenedor-preguntas" data-categoria="brokers">
                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Qué métodos de pago aceptamos en nuestra plataforma?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Aceptamos pagos a través de tarjetas de crédito, débito y PayPal, brindando opciones flexibles para nuestros usuarios.</p>
                        </div>

                        <div class="contenedor-pregunta">
                            <p class="pregunta">¿Es posible cancelar la suscripción al servicio y cómo funciona este proceso?<img src="img/plus.svg" alt="Abrir"></p>
                            <p class="respuesta">Sí, los usuarios tienen la opción de cancelar la suscripción al servicio. La cancelación se confirmará durante el período de gracia, asegurando una gestión sencilla y transparente.</p>
                        </div>
                    </div>

                </div>

            </main>
            <br><br><br><br>

         
            <!-- Available App  Start-->
            <div class="available-app-area">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="app-caption">
                                <div class="section-tittle section-tittle3 " style="text-align: center;">
                                    <h2>Hecho por traders para traders</h2>
                                    <p>Descubri como hacer dinero inteligentemente y aumenta tus profits con nuestra plataforma.</p>
                                    <div class="app-btn">
                                        <!-- <a href="#" class="app-btn1"><img src="img/shape/app_btn1.png" alt=""></a>
                                        <a href="#" class="app-btn2"><img src="img/shape/app_btn2.png" alt=""></a> -->
                                        <div style="text-align: center;">
                                            <a href="/" class="forexfooter"><img src="img/forexgumpigcontent.png" alt="" style="width: 15%; display: block; margin: 0 auto;"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="app-img">
                                <img src="img/shape/wallet.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shape -->
                <div class="app-shape">
                    <img src="img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                    <img src="img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
                    <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
                </div>
            </div>
            <!-- Available App End-->
            <!-- Say Something Start -->
            <div class="say-something-aera pt-90 pb-90 fix">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                            <div class="say-something-cap">
                                <h2>Escribinos tu mensaje.</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="say-btn">

                                <a class="btnContacto btn radius-btn" data-bs-toggle="modal" data-bs-target="#feedbackModal" href="">Contactanos</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- shape -->
                <div class="say-shape">
                    <img src="img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                    <img src="img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
                </div>
            </div>
            <!-- Say Something End -->

        </main>
        <footer>

            <!-- Footer Start-->
            <div class="footer-main">
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row  justify-content-between">
                            <div class="col-lg-3 col-md-4 col-sm-8">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="/"><img src="img/forexgump3.png" alt=""></a>
                                    </div>
                                    <style>
                                        .footer-logo {
                                            width: 50%;
                                       }                
                                      
                                    </style>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">El usuario es el único responsable de cualquier consecuencia derivada del uso inapropiado de los recursos de Forex Gump.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Enlaces</h4>
                                        <ul>
                                            <li><a href="/home">Home</a></li>
                                            <li><a href="/articles">Señales</a></li>
                                            <li><a href="/trading-ai">Robots</a></li>
                                            <li><a href="/">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Soporte</h4>
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#feedbackModal" href="">Reportar un error</a></li>
                                            <li><a href="/policy">Política de privacidad</a></li>
                                            <li><a href="/terms">Términos y condiciones</a></li>
                                            <li><a href="#faqs-section">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Blog</h4>
                                        <div class="footer-pera footer-pera2">
                                            <p>Subscribite a nuestro boletin informativo </p>
                                        </div>
                                        <!-- Form -->
                                        <div class="footer-form">
                                            <div id="mc_embed_signup">
                                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                    <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Correo electronico " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Direccion de Correo '">
                                                    <div class="form-icon">
                                                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="img/shape/form_icon.png" alt=""></button>
                                                    </div>
                                                    <div class="mt-10 info"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p class="copyright">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                    </p>

                                    <div class="copyright-container">
                                        <span>Todos los derechos reservados | Con&nbsp;</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 8, 8, 1);">
                                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.186 10.74L12 16.926 7.814 12.74a2.745 2.745 0 0 1 0-3.907 2.745 2.745 0 0 1 3.906 0l.28.279.279-.279a2.745 2.745 0 0 1 3.906 0 2.745 2.745 0 0 1 .001 3.907z"></path>
                                        </svg>
                                        <span>&nbsp;creado por <a class="copyForex" href="/" target="_blank">&nbsp;ForexGump</a></span>

                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->

        </footer>

        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Contactanos</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{route('contactanos.store')}}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">

                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            @error('name')
                            <script>
                                swal({
                                    title: "Hubo un error!",
                                    text: "Complete todos los campos por favor.",
                                    icon: "error",
                                });
                            </script>
                            @enderror
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo electronico</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">El correo el obligatorio.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                            </div>
                            @error('email')
                            <script>
                                swal({
                                    title: "Hubo un error!",
                                    text: "Complete todos los campos por favor.",
                                    icon: "error",
                                });
                            </script>
                            @enderror
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número telefonico</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">El numero es obligatorio.</div>
                            </div>
                            @error('phone')
                            <script>
                                swal({
                                    title: "Hubo un error!",
                                    text: "Complete todos los campos por favor.",
                                    icon: "error",
                                });
                            </script>
                            @enderror
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem; resize: none;" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
                            </div>

                            @error('message')
                            <script>
                                swal({
                                    title: "Hubo un error!",
                                    text: "Complete todos los campos por favor.",
                                    icon: "error",
                                });
                            </script>
                            @enderror


                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" data-toggle="modal" type="submit">Enviar</button></div>

                        </form>
                        @if(session('info'))


                        <script>
                            swal({
                                title: "Gracias por tu consulta!",
                                text: "{{session('info')}}",
                                icon: "success",
                            });
                        </script>


                        @endif
                    </div>
                </div>
            </div>
        </div>

        <script src="js/robot/vendor/modernizr-3.5.0.min.js"></script>

        <!-- Jquery, Popper, Bootstrap -->
        <script src="js/robot/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/robot/popper.min.js"></script>
        <script src="js/robot/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="js/robot/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="js/robot/owl.carousel.min.js"></script>
        <script src="js/robot/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="js/robot/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="js/robot/wow.min.js"></script>
        <script src="js/robot/animated.headline.js"></script>
        <script src="js/jrobot/query.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="js/robot/jquery.scrollUp.min.js"></script>
        <script src="js/robot/jquery.nice-select.min.js"></script>
        <script src="js/robot/jquery.sticky.js"></script>

        <!-- contact js -->


        <script src="js/robot/jquery.validate.min.js"></script>
        <script src="js/robot/mail-script.js"></script>
        <script src="js/robot/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="js/robot/plugins.js"></script>
        <script src="js/robot/main.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

  
        <script src="js/animated-number/jquery.waypoints.min.js"></script>
        
        <script src="js/animated-number/jquery.stellar.min.js"></script>
     

        <script src="js/animated-number/aos.js"></script>
        <script src="js/animated-number/jquery.animateNumber.min.js"></script>

        
        <script src="js/animated-number/scrollax.min.js"></script>

        <script src="js/animated-number/main.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

</x-app-layout>