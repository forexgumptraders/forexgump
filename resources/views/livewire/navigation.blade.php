<nav class="bg-gray-800" x-data="{open: false}">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Poiret+One&family=Trade+Winds&display=swap" rel="stylesheet">
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Poiret+One&family=Righteous&family=Saira+Stencil+One&family=Spartan:wght@100&family=Trade+Winds&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 


    	<!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        
        <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">


  
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>



          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>




      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

      	<!-- logotipo-->

        <a href="/" class="icon flex-shrink-0 flex items-center">
          Forex<span class="iconSecundario">.Gump</span> 
        </a>


<style>


p {
  margin-bottom: 20px;
  line-height: 150%;
}

.aviso-cookies {
  display: none;
  background: #fff;
  padding: 20px;
  width: calc(100% - 40px);
  max-width: 300px;
  line-height: 150%;
  border-radius: 10px;
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 100;
  padding-top: 60px;
  box-shadow: 0px 2px 20px 10px rgba(222,222,222,.25);
  text-align: center;
}

.aviso-cookies.activo {
  display: block;
}

.aviso-cookies .galleta {
  max-width: 100px;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.aviso-cookies .titulo,
.aviso-cookies .parrafo {
  margin-bottom: 15px;
}

.aviso-cookies .boton {
  width: 100%;
  background: crimson;
  border: none;
  color: #fff;
  font-family: 'Roboto', sans-serif;
  text-align: center;
  padding: 15px 20px;
  font-weight: 700;
  cursor: pointer;
  transition: .3s ease all;
  border-radius: 5px;
  margin-bottom: 15px;
  font-size: 14px;
}

.aviso-cookies .boton:hover {
  background: #000;
}

.aviso-cookies .enlace {
  color: #000;
  text-decoration: none;
  font-size: 14px;
}

.aviso-cookies .enlace:hover {
  text-decoration: underline;
}

.fondo-aviso-cookies {
  display: none;
  background: rgba(0,0,0,.20);
  position: fixed;
  z-index: 99;
  width: 100vw;
  height: 100vh;
  top: 0;
  left: 0;
}

.fondo-aviso-cookies.activo {
  display: block;
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

@media (max-width: 750px) {
 .icon{
margin-left: 30px;
font-size: 25px;
 } 
}
</style>

        <!-- Menu lg--> 

        <div class="hidden sm:block sm:ml-6">
          <div class="flex px-3 py-2  space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            
  @foreach($categories as $category)
            <a  class="text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{route('posts.category', $category)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{$category->name}}</a>
            @endforeach

  

            <!-- This example requires Tailwind CSS v2.0+ -->
<!-- <div  class="relative inline-block text-left" x-data="{open: false}">
  <div>
    <button x-on:click="open = true" type="button" class="inline-flex text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Secciones
     
      <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <div class="secciones origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div x-show="open" x-on:click.away="open = false" class="py-1" role="none">

            @foreach($categories as $category)
            <a  class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{route('posts.category', $category)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{$category->name}}</a>
            @endforeach
    </div>
  </div>
</div>
 -->
  <style>
    .secciones{
      z-index: 100;
    }
  </style>

                 <!-- <a href="/products" class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Robots</a> 
                 -->

                <!-- <a href="/articles" class="text-white px-3 py-2 rounded-md text-sm font-medium" >Señales</a>  -->
<!-- 
                <a href="/cryptos" class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Cryptos</a>  -->



                <a href="/nosotros" class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a> 

  

          </div>
        </div>
      </div>


      @auth

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

      	<!-- Boton notificacion-->
<!-- 
        <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
 
         
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button> -->

        <!-- Profile dropdown -->
        <div class="ml-3 relative" x-data="{open: false}">
          <div>
            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
       
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url}}" alt="">
            </button>
          </div>
       
          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" x-on:click.away="open = false" class="menuOptions origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>

          <!--    <a href="{{route('billing.index')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Planes</a> -->
         
            @can('admin.home')
               <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
            @endcan


            <form method="POST" action="{{ route('logout') }}">
                    @csrf
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                    this.closest('form').submit();">Salir</a>

            </form>

          </div>
        </div>
      </div>

      <style>
        .menuOptions{
          z-index: 100;
        }
        .icon{
          margin-right: 40px;
        }
      </style>

      @else


        <div class="login flex">
            <a href="{{route('login')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ingresar</a>
            <a href="{{route('register')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Unirse</a>
            
        </div>

          <style>
            @media (min-width: 336px) and (max-width: 361px) {  
            
          .login{
            display: block;
            padding-left: 40px;
          }

        .icon{
          margin-left: 50px;
        }
      }

          @media (min-width: 300px) and (max-width: 336px) {  
            
          .login{
            display: block;
            padding-left: 30px;
          }
          .icon{
          margin-left: 40px;
        }
      </style>


      @endauth
    </div>
  </div>



  <!-- Menu movil -->
  <div class="sm:hidden focus:outline-none" id="mobile-menu" x-show= "open" x-on:click.away="open = false">
    <div class="px-2 pt-2 pb-3 space-y-1">

     
      @foreach($categories as $category)
            <a  class="bg-gray-700 text-center text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{route('posts.category', $category)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{$category->name}}</a>
            @endforeach


<div  class=" text-gray-300 text-left hover:text-white block px-3 py-2 rounded-md text-base font-medium"x-data="{open: false}">

<!--   <div>
    <button x-on:click="open = true" type="button" class="inline-flex text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Secciones

      <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
 -->
 
  <div class="rounded-md shadow-lg bg-gray ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
  <!--   <div x-show="open" x-on:click.away="open = false" class="py-1" role="none">




            @foreach($categories as $category)
            <a  class="bg-gray-700 text-center text-white block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" href="{{route('posts.category', $category)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{$category->name}}</a>
            @endforeach


    </div> -->

<!--             <a href="/products" class="text-white block px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Robots</a> 
 -->
          <!--  
                <a href="/articles" class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Señales</a>  -->

           <!--  <a href="/cryptos" class="text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Cryptos</a>
 -->

                <a href="/nosotros" class="text-center text-white block px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a> 


  </div>
</div>
    
    </div>
  </div>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MB7HJ8K');</script>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB7HJ8K"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


    <div class="aviso-cookies" id="aviso-cookies">
      <img class="galleta" src="./img/forexgump.png" alt="Galleta">
      <h3 class="titulo">Cookies</h3>
      <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
      <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
      <a class="enlace" href="{{route('posts.cookies')}}">Aviso de Cookies</a>
    </div>
    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>


  <script>
    const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
    const avisoCookies = document.getElementById('aviso-cookies');
    const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

    dataLayer = [];

    if(!localStorage.getItem('cookies-aceptadas')){
      avisoCookies.classList.add('activo');
      fondoAvisoCookies.classList.add('activo');
    } else {
      dataLayer.push({'event': 'cookies-aceptadas'});
    }

    botonAceptarCookies.addEventListener('click', () => {
      avisoCookies.classList.remove('activo');
      fondoAvisoCookies.classList.remove('activo');

      localStorage.setItem('cookies-aceptadas', true);

      dataLayer.push({'event': 'cookies-aceptadas'});
    });
  </script>

</nav>
