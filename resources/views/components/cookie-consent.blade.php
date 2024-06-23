<div x-data="{ show: !localStorage.getItem('cookieConsent') }" x-show="show" class="aviso-cookies" id="aviso-cookies">
<img class="galleta" src="{{ asset('img/iconoforexgump.png') }}" alt="Galleta">
    <p class="parrafo">
        Forex Gump utiliza cookies. Al continuar utilizando el sitio, aceptas nuestra
        <a href="{{ $cookiePolicyLink }}" class="text-politica">política de cookies</a>.
    </p>
    <button @click="localStorage.setItem('cookieConsent', 'true'); show = false" class="boton" id="btn-aceptar-cookies">Aceptar</button>
    <a class="enlace" href="{{route('home.cookies')}}">Aviso de Cookies</a>

</div>


<style>

   /* styles.css o tu archivo de estilos */

.galleta {
   margin-top: -50px;
}

.text-politica{
    color: #f9218d;
}
.text-politica:hover{
    color: #f9218d;
}


    .aviso-cookies {
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
        box-shadow: 0px 2px 20px 10px rgba(222, 222, 222, .25);
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
        background: #f9218d;
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
        background: rgba(0, 0, 0, .20);
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


</style>