<nav x-data="{open: false}" x-bind:style="'background-color: ' + $wire.navColor">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  

  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">

      <!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

        <button id="menuButton" x-on:click="open = true" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" class="menu inline-flex items-center justify-center p-2 rounded-md  " aria-expanded="false">
          <svg width="40" height="40" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
          </svg>
        </button>


        <script>
          const menuButton = document.getElementById("menuButton");

          // Agrega un evento click al documento
          document.addEventListener("click", (event) => {
            // Comprueba si el clic ocurrió fuera del botón y no dentro del menú
            if (
              !menuButton.contains(event.target) &&
              event.target.tagName !== "A" &&
              !event.target.closest(".menu-links")
            ) {
              menuButton.classList.remove("opened");
              menuButton.setAttribute("aria-expanded", "false");
            }
          });

          // var lastScrollTop = 0;

          // window.addEventListener("scroll", function() {
          //   var st = window.scrollY;

          //   if (st > lastScrollTop) {
          //     // Scrolling hacia abajo
          //     document.querySelector("nav").classList.add("hidden");
          //   } else {
          //     // Scrolling hacia arriba
          //     document.querySelector("nav").classList.remove("hidden");
          //   }

          //   lastScrollTop = st;
          // });
        </script>



        <style>
 
        /* nav {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
          }

          .hidden {
            top: -80px; 
          } */
  
          .menu {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            padding: 0;
            z-index: 9999;
          }

          .line {
            fill: none;
            stroke: black;
            stroke-width: 3;
            transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
              stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
          }

          .line1 {
            stroke-dasharray: 60 207;
            stroke-width: 3;
          }

          .line2 {
            stroke-dasharray: 60 60;
            stroke-width: 3;
          }

          .line3 {
            stroke-dasharray: 60 207;
            stroke-width: 3;
          }

          .opened .line1 {
            stroke-dasharray: 90 207;
            stroke-dashoffset: -134;
            stroke-width: 3;
          }

          .opened .line2 {
            stroke-dasharray: 1 60;
            stroke-dashoffset: -30;
            stroke-width: 3;
          }

          .opened .line3 {
            stroke-dasharray: 90 207;
            stroke-dashoffset: -134;
            stroke-width: 3;
          }
        </style>

      </div>

      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

        {{-- logotipo --}}
        <a href="/" class="flex-shrink-0 flex items-center icono">
          @if($icono && $icono->ruta_completa_imagen)
          <img class="block lg:hidden h-8 w-auto" src="{{ url('storage/' . $icono->ruta_completa_imagen) }}" alt="Icono">
          <img class="hidden lg:block h-8 w-auto" src="{{ url('storage/' . $icono->ruta_completa_imagen) }}" alt="Icono">
          @else
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
          @endif
        </a>


        <a href="/" class="flex justify-center items-center iconoChico">
          <img class="block lg:hidden h-16 w-auto" src="{{ asset('img/forexjaponesicono.png') }}">
          <img class="hidden lg:block h-16 w-auto" src="{{ asset('img/forexjaponesicono.png') }}">
        </a>



        <style>
          @media screen and (max-width: 759px) {

            /* Estilos para el componente de búsqueda */
            .icono {
              display: none;
              /* Mostrar el componente */
            }

          }

          @media screen and (min-width: 759px) {

            /* Estilos para el componente de búsqueda */
            .iconoChico {
              display: none;
              /* Mostrar el componente */

            }

          }

          @media screen and (min-width: 640px) and (max-width: 680px) {
            .iconoChico {
              min-width: 100px; 
              margin-left: -30px;
            }
        }
        </style>





        {{-- menu lg  --}}
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4 menuOptions">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->


            <a href="/home" id="homeNosotros" class="dos text-white px-3 py-2 text-sm font-medium" aria-current="page" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor"><span>HOME</span></a>

            <a href="/articles" class="dos articlesBoton text-white px-3 py-2 text-sm font-medium" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor"><span>SEÑALES</span></a>

            <a href="/trading-ai" class="dos articlesBoton text-white px-3 py-2 text-sm font-medium" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor"><span>ROBOT</span></a>

            <div class="relative inline-block text-left" x-data="{open: false}" x-on:mouseenter="open = true" x-on:mouseleave="open = false">
                <div x-on:click="open = !open">
                    <button type="button" class="dos inline-flex text-white px-3 py-2 text-sm font-medium" aria-current="page" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        <span x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">BLOG</span>
                        <svg class="-mr-1 ml-2 h-5 w-5 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-bind:class="{'rotated': open}">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor" />
                        </svg>
                    </button>
                </div>

                <div x-show="open" x-on:mouseenter="open = true" x-on:mouseleave="open = false" class="secciones origin-top-right absolute mt-0 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        @foreach($categories as $category)
                            <a class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{ route('post.category', $category) }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

          </div>
        </div>

        <div class="relative searchMax px-8 mx-auto text-center" style="width: 100%;">
          <div x-data="{ isOpen: true }" @click.away="isOpen = false">
            <div x-data="{ placeholderVisible: true }">
              <div class="relative searchMax">
                <span class="fa fa-search search absolute left-3 text-xl text-gray-400 pointer-events-none"></span>
                <input wire:model="search" class="w-full h-10 pl-10 pr-3 rounded border border-solid border-neutral-300 bg-white text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary text-center" @click="isOpen = true; placeholderVisible = false" @blur="isOpen = false; placeholderVisible = true" x-bind:placeholder="placeholderVisible ? 'Buscar Post' : ''">
              </div>
            </div>
            <!-- Resultados de búsqueda -->
            @if (!empty($searchResults) && count($searchResults) > 0)
            <div x-data="{ isOpen: false }" class="search-results-container absolute mt-2 w-full bg-white border border-gray-300 rounded shadow-lg" style="z-index: 1;">
              <!-- Contenedor del resultado de búsqueda con ancho del 100% -->
              <div style="width: 100%;">
                <ul>
                  @foreach ($searchResults as $result)
                  <li class="p-2 hover:bg-gray-100">
                    <div class="flex items-center">
                    @if ($result->images->count() > 0)
                        <img src="{{ Storage::url($result->images->first()->url) }}" alt="{{ $result->name }}" class="w-12 h-12 mr-2">
                    @else
                        <img src="https://cdn.pixabay.com/photo/2020/11/11/10/38/cat-5732087_960_720.jpg" alt="Imagen por defecto" class="w-12 h-12 mr-2">
                    @endif

                      <a href="{{ route('posts.show', $result) }}" class="text-black-500 hover:no-underline result-post">{{ $result->name }}</a>
                    </div>

                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            @endif

          </div>
        </div>



        <style>
          .rotated {
            transform: rotate(180deg);
            /* Rotar 180 grados */
            transition: transform 0.3s ease;
            /* Agrega una transición suave */
          }

          .placeholder-center::placeholder {
            text-align: center;
            /* Centra horizontalmente el texto del placeholder */
            vertical-align: middle;
            /* Centra verticalmente el texto del placeholder */
            line-height: 1.6rem;
            /* Ajusta la altura de línea para centrar verticalmente */
          }

          .search-results-container {
            max-height: 300px;
            /* Ajusta la altura máxima según tus necesidades */
            overflow-y: auto;
          }

          .search {
            margin-top: 10px;
            padding-left: 7px;
          }
        </style>

      </div>

      @auth

      <style>
        @media screen and (min-width: 260px) and (max-width: 639px) {
          .searchMax {
            display: none;
          }
        }
 
      </style>

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        {{-- Boton notificación --}}
        <!-- Boton notificacion-->
        <div class="btnNotification">
          @livewire('notification-component')
        </div>

        <!-- Profile dropdown -->
        <div class="ml-3 relative" x-data="{ open:false }">
          <div>
            <button x-on:click="open = true" class="flex text-sm  focus:outline-none" id="user-menu" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" style="z-index: 1;" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu perfil</a>

            <!-- <a href="{{route('billing.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Facturación</a> -->
            <a href="{{route('robots.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Mis Robots</a>

            @can('admin.home')
            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
            @endcan

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                            this.closest('form').submit();">Cerrar sesión</a>

            </form>

          </div>
        </div>
      </div>

      @else

      <style>
        @media screen and (min-width: 260px) and (max-width: 640px) {

          .iconoChico img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          }

        }

        @media screen and (min-width: 260px) and (max-width: 639px) {
          .searchMax {
            display: none;
          }
        }
      </style>

      <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">
        <img src="{{ asset('img/log-in-regular-120.png') }}" style="max-width: 40px;" alt="Descripción de la imagen">
      </a>




      @endauth
    </div>
  </div>
  <div class="relative searchMaxDown mx-auto text-center" style="width: 100%;">
    <div x-data="{ isOpen: true }" @click.away="isOpen = false">
      <div x-data="{ placeholderVisible: true }">
        <div class="relative searchMaxDown">
          <span class="fa fa-search search absolute left-3 text-xl text-gray-400 pointer-events-none"></span>
          <input wire:model="search" class="w-full h-10 pl-10 pr-3 rounded border border-solid border-neutral-300 bg-white text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary text-center" @click="isOpen = true; placeholderVisible = false" @blur="isOpen = false; placeholderVisible = true" x-bind:placeholder="placeholderVisible ? 'Buscar Post' : ''">
        </div>
      </div>
      <!-- Resultados de búsqueda -->
      @if (!empty($searchResults) && count($searchResults) > 0)
      <div x-data="{ isOpen: false }" class="search-results-container absolute mt-2 w-full bg-white border border-gray-300 rounded shadow-lg" style="z-index: 1;">
        <!-- Contenedor del resultado de búsqueda con ancho del 100% -->
        <div style="width: 100%;">
          <ul>
            @foreach ($searchResults as $result)
            <li class="p-2 hover:bg-gray-100">
              <div class="flex items-center">
              @if ($result->images->count() > 0)
                  <img src="{{ Storage::url($result->images->first()->url) }}" alt="{{ $result->name }}" class="w-12 h-12 mr-2">
              @else
                  <img src="https://cdn.pixabay.com/photo/2020/11/11/10/38/cat-5732087_960_720.jpg" alt="Imagen por defecto" class="w-12 h-12 mr-2">
              @endif

                <a href="{{ route('posts.show', $result) }}" class="text-black-500 hover:no-underline result-post">{{ $result->name }}</a>
              </div>

            </li>
            @endforeach
          </ul>
        </div>
      </div>
      @endif

    </div>
  </div>
  {{-- Menu mobil --}}
  <div class="sm:hidden" x-show="open" x-on:click.away="open = false">

    <div class="relative">
      <div x-data="{ isOpen: true }" @click.away="isOpen = false">
        <div x-data="{ placeholderVisible: true }">
          <div class="relative  ">
            <span class="fa fa-search search absolute left-3 text-xl text-gray-400 pointer-events-none"></span>
            <input wire:model="search" class="menu-links w-full h-10  pr-3 rounded border border-solid border-neutral-300 bg-white text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary text-center" @click="isOpen = true; placeholderVisible = false" @blur="isOpen = false; placeholderVisible = true" x-bind:placeholder="placeholderVisible ? 'Buscar Post' : ''">
          </div>

        </div>
        <!-- Resultados de búsqueda -->
        @if (!empty($searchResults) && count($searchResults) > 0)
        <div x-data="{ isOpen: false }" class="search-results-container absolute mt-2 w-full bg-white border border-gray-300 rounded shadow-lg" style="z-index: 1;">
          <!-- Contenedor del resultado de búsqueda con ancho del 100% -->
          <div style="width: 100%;">
            <ul>
              @foreach ($searchResults as $result)
              <li class="p-2 hover:bg-gray-100">
                <div class="flex items-center">
                @if ($result->images->count() > 0)
                    <img src="{{ asset('storage/' . $result->images->first()->url) }}" alt="{{ $result->name }}" class="w-12 h-12 mr-2">
                @else
                    <img src="https://cdn.pixabay.com/photo/2020/11/11/10/38/cat-5732087_960_720.jpg" alt="Imagen por defecto" class="w-12 h-12 mr-2">
                @endif

                  <a href="{{ route('posts.show', $result) }}" class="text-black-500 hover:no-underline">{{ $result->name }}</a>

                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        @endif

      </div>
    </div>
    <div class="menu-links botonMenu sm:hidden focus:outline-none text-center">

      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->



    

        <div class=" text-gray-300 text-left hover:text-white block rounded-md text-base font-medium" x-data="{open: false}">


        <a href="/home" class="text-center flex items-center justify-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">
            <span>Home</span>
            <span class="ml-auto">
                <div><img src="{{ asset('img/icons/home-alt-2-regular-24.png') }}" alt="Descripción de la imagen"></div>
            </span>
        </a>
        <a href="/articles" class="text-center flex items-center justify-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">
            <span>Señales</span>
            <span class="ml-auto">
                <div><img src="{{ asset('img/icons/candles-regular-24.png') }}" alt="Descripción de la imagen"></div>
            </span>
        </a>
        <a href="/trading-ai" class="text-center flex items-center justify-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">
            <span>Robot</span>
            <span class="ml-auto">
                <div><img src="{{ asset('img/icons/bot-regular-24.png') }}" alt="Descripción de la imagen"></div>
            </span>
        </a>


        </div>
        
        <div class="relative text-center" x-data="{open: false}">
          
        <div>
        <div role="button" tabindex="0" x-on:click="open = true" class="menu-links flex items-center justify-between px-3 py-2 rounded-md text-sm font-medium" aria-current="page" id="menu-button" aria-expanded="true" aria-haspopup="true" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">
    <span>Blog</span>
    <span class="ml-auto">
        <img src="{{ asset('img/icons/news-regular-24.png') }}" alt="Descripción de la imagen">
    </span>
</div>

</div>





          <div x-show="open" x-on:click.away="open = false" class="py-1" role="none">

            @foreach($categories as $category)
            <a class="menu-links text-center text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{route('post.category', $category)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" x-bind:style="'background-color: ' + $wire.navColor + '; color: ' + $wire.textColor">{{$category->name}}</a>
            @endforeach
          </div>

        </div>
      </div>

    </div>

</div>

<div class="forex-prices">
  <ul id="currency-list" class="currency-carousel">
    
  </ul>
</div>
<!-- resources/views/livewire/navigation.blade.php -->
<div>
    <div>
        @auth
            @if(!$isEmailVerified)


            <script>
                     document.addEventListener('DOMContentLoaded', (event) => {
                          document.querySelector('.alert .close').addEventListener('click', function() {
                              document.getElementById('alert-box').style.display = 'none';
                          });
                      });

            </script>
                <!-- Usuario no verificado, muestra el banner con enlace -->
                <div id="alert-box" class="alert-warning text-center custom-alert" role="alert" style="background-color: #EFE4B0; color: #D6AA2E; display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <span>Tu correo electrónico no ha sido verificado.&nbsp;</span>
                    <a href="{{ route('verification.notice') }}" class="alert-link underline-link">Haz clic aquí para verificarlo</a>.
                    <button type="button" class="close" style="background: none; border: none; font-size: 20px; font-weight: bold; cursor: pointer; margin-left: 10px;">&times;</button>
                </div>


            @endif
        @endauth
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB7HJ8K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>



<style>
  .placeholder-center::placeholder {
    text-align: center;
    /* Centra horizontalmente el texto del placeholder */
    vertical-align: middle;
    /* Centra verticalmente el texto del placeholder */
    line-height: 1.6rem;
    /* Ajusta la altura de línea para centrar verticalmente */
  }

 /* styles.css */
.underline-link {
    text-decoration: underline;
}
.custom-alert {
    height: 60px; /* Puedes ajustar este valor según tus necesidades */
}
/* styles.css */
.custom-alert {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px; /* Puedes ajustar este valor según tus necesidades */
}

  @media screen and (min-width: 1023px) {

    /* Estilos para el componente de búsqueda */
    .searchMaxDown {
      display: none;
      /* Mostrar el componente */

    }

  }


  @media screen and (max-width: 639px) {

    /* Estilos para el componente de búsqueda */
    .searchMaxDown {
      display: none;
      /* Mostrar el componente */

    }

  }

  @media screen and (min-width: 638px) and (max-width: 1023px) {

    /* Estilos para el componente de búsqueda */
    .searchMax {
      display: none;
      /* Agregar un margen superior si es necesario */
    }
  }
  
  .bg-pink-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(219 39 119	 / var(--tw-bg-opacity));
  }.bg-green-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(101 163 13	 / var(--tw-bg-opacity));
  }.bg-yellow-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(202 138 4 / var(--tw-bg-opacity));
  }.bg-purple-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(147 51 234	 / var(--tw-bg-opacity));
  }.bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(37 99 235	 / var(--tw-bg-opacity));
  }
  
</style>
</nav>

@section('js')
<!-- Agrega esto dentro de tu vista Livewire -->
<script>
  document.addEventListener('livewire:load', function() {
    Livewire.on('colorUpdated', function(navColor) {
      var nav = document.querySelector("nav");
      if (nav) {
        nav.style.backgroundColor = navColor;
      }
    });

    Livewire.on('textColorUpdated', function(fontColor) {
      var menuLinks = document.querySelectorAll(".menu-link");
      if (menuLinks) {
        menuLinks.forEach(link => {
          link.style.color = fontColor;
        });
      }
    });
  });

  


</script>


@endsection