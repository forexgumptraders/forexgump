<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<div class=" max-w-5xl mx-auto px-4 lg:px-8 py-12">
  <h1 class="divisa notranslate text-4xl font-bold text-gray-600 text-center">{{$article->title}}</h1>

<br>
  <div class="flex justify-content-between">

  <div class="flex-row">
    <div class="estado text-lg text-gray-500 mp-2">
      {!!$article->estado!!}
      @if($article->estado=="En curso")
      <style>.estado{background-color: #0275d8; color: white; border-radius: 15px; padding-right: 5px; padding-left: 5px; width: 79px;}</style>
      @elseif($article->estado=="Positiva")
      <style>.estado{background-color: #5cb85c; color: white; border-radius: 15px; padding-right: 5px; padding-left: 5px; width: 73px;}</style>
      @else<style>.estado{background-color: crimson; color: white; border-radius: 15px; padding-right: 5px; padding-left: 5px; width: 82px;}</style>
      @endif
    </div>

   <div class="orden text-lg text-gray-500 mp-2 mt-3">
    {!!$article->orden!!}
      @if($article->orden=="Compra")
    <style>.orden{background-color: #5cb85c; color: white; border-radius: 15px; padding-right: 5px; padding-left: 5px; width: 75px;}</style>
    @else<style>.orden{background-color: crimson; color: white; border-radius: 15px; padding-right: 5px; padding-left: 5px; width: 59px;}</style>
    @endif
  </div>

</div>

   <div class="justify-content-end text-lg text-gray-500 mp-2 ">
     <p>Creado el: {!!$article->created_at!!}</p>
        @if($article->updated_at==$article->created_at)
     <p>No ha sido actualizado</p>
     @else<p>Editado el: {!!$article->updated_at!!} </p>
     @endif
  </div>
 
 <br>


</div>

  <figure >
    <img class="img-base h-72 w-full object-cover object-center" src="@if($article->image){{Storage::url($article->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/04/13/05/graphic-1714230_960_720.png @endif" alt="">
   
  </figure>

  <div class="container-img">
    <img class="img-show" src="@if($article->image){{Storage::url($article->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/04/13/05/graphic-1714230_960_720.png @endif" alt="">
     <i class='bx bx-x'></i>
  </div>


  <div class="ordenes"> 
     <div class="text-lg text-gray-500 mp-2 text-center">
       <h4 class="flex justify-content-center"><span class="notranslate ordenesTitle">Stop loss:&nbsp;</span>{!!$article->sl!!}</h4>
    </div>

     <div class="text-lg text-gray-500 mp-2 text-center">
      <h4 class="flex justify-content-center"><span class="notranslate ordenesTitle">Take profit:&nbsp;</span>{!!$article->tp!!}</h4>
    </div>

     <div class="text-lg text-gray-500 mp-2 text-center">
      <h4 class="flex justify-content-center"><span class="ordenesTitle">Precio:&nbsp;</span>{!!$article->entrada!!}</h4>
    </div>
 </div>

  <div class="text-gray-500 mt-4">
    {!!$article->body!!}
  </div>



</div>

	<!-- Footer -->


  <style>
    .img-base:hover{
       filter:grayscale(50%);
       cursor: pointer;
       transition: filter.5s;
    }

    .container-img{
      position: fixed;
      height: 100%;
      width: 100%;
      transform: translateX(-100%);
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform .4s ease-in
    }

    .img-show{
      height: 80%;
      display: block;
      object-fit: cover; 
    }

    .bx.bx-x{
      position: absolute;
      color:  white;
      top:  20px;
      right: 20px;
      font-size: 40px;
      cursor: pointer;
    }

    .move{
         transform: translateX(0%);
    }
  </style>

<script>
  const images = document.querySelector('.img-base');
  const containerImage = document.querySelector('.container-img');
  const imgContainer = document.querySelector('img-show');

    images.addEventListener('click', ()=>{
      containerImage.classList.toggle('move');
      addImage(image.getAtribute('src'));

    })
 const addImage =  (src) => {
     containerImage.classList.toggle('move');
 }

containerImage.addEventListener('click', ()=>{
  containerImage.classList.toggle('move');
})

</script>

<style>

      .ordenes{
        background-color: #1f2937;
        padding-top: 15px;
        border-radius: 20px;
      }

      .ordenes h4{
        color:  crimson;
      }

      .ordenesTitle{
        color: white;
      }

      .divisa{
        background-color: #1f2937;
        border-radius: 20px;
        padding-top: 5px;
        color: white;
      }

	a{
		text-decoration: none;
		color: white;

	}

	a:hover{
		color: #dc3545;
	}

	.unirse{
		border-radius: 30px;
	}

	.unirse a{
		color: white;
	}

	.unirse a:hover{
		color: white;
	}

    footer{
        background-color: #1f2937;
    }

    .footer-copyright{
         background-image: linear-gradient(to left top, #1f2937, #3b365c, #723770, #af2e68, #dc3545);
    }

    .nosotros{
        text-align: left;
        margin-top: 20px;
    }

    .nosotros ul li{
        margin-top: 10px;
        font-size: 16px;
    }

      .nosotros .imgInst{
        margin-left: 45%;
    }

    .sombras-xl {
    width: 100px;
    height: 100px;
    text-align: center;
    margin: auto;
    margin-top: 20px;
    border-radius: 50%;
    display: table;
}
.contenido {
    border-radius: 50%;
    color: #fff7f7;
    font-size: 4em;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    text-shadow: 
    1px 1px #393E46,
    2px 2px #393E46,
    3px 3px #393E46,
    4px 4px #393E46,
    5px 5px #393E46,
    6px 6px #393E46,
    7px 7px #393E46,
    8px 8px #393E46,
    9px 9px #393E46,
    10px 10px #393E46,
    11px 11px #393E46,
    12px 12px #393E46,
    13px 13px #393E46,
    14px 14px #393E46,
    15px 15px #393E46,
    16px 16px #393E46,
    17px 17px #393E46,
    18px 18px #393E46,
    19px 19px #393E46,
    20px 20px #393E46,
    21px 21px #393E46,
    22px 22px #393E46,
    23px 23px #393E46,
    24px 24px #393E46,
    25px 25px #393E46,
    26px 26px #393E46,
    27px 27px #393E46,
    28px 28px #393E46,
    29px 29px #393E46,
    30px 30px #393E46,
    31px 31px #393E46,
    32px 32px #393E46,
    33px 33px #393E46,
    34px 34px #393E46,
    35px 35px #393E46,
    36px 36px #393E46,
    37px 37px #393E46,
    38px 38px #393E46,
    39px 39px #393E46,
    40px 40px #393E46,
    41px 41px #393E46,
    42px 42px #393E46,
    43px 43px #393E46,
    44px 44px #393E46,
    45px 45px #393E46,
    46px 46px #393E46,
    47px 47px #393E46,
    48px 48px #393E46,
    49px 49px #393E46,
    50px 50px #393E46,
    51px 51px #393E46,
    52px 52px #393E46,
    53px 53px #393E46,
    54px 54px #393E46,
    55px 55px #393E46,
    56px 56px #393E46,
    57px 57px #393E46,
    58px 58px #393E46,
    59px 59px #393E46,
    60px 60px #393E46,
    61px 61px #393E46,
    62px 62px #393E46,
    63px 63px #393E46,
    64px 64px #393E46,
    65px 65px #393E46,
    66px 66px #393E46,
    67px 67px #393E46,
    68px 68px #393E46,
    69px 69px #393E46,
    70px 70px #393E46,
    71px 71px #393E46,
    72px 72px #393E46,
    73px 73px #393E46,
    74px 74px #393E46,
    75px 75px #393E46,
    76px 76px #393E46,
    77px 77px #393E46,
    78px 78px #393E46,
    79px 79px #393E46,
    80px 80px #393E46,
    81px 81px #393E46,
    82px 82px #393E46,
    83px 83px #393E46,
    84px 84px #393E46,
    85px 85px #393E46,
    86px 86px #393E46,
    87px 87px #393E46,
    88px 88px #393E46,
    89px 89px #393E46,
    90px 90px #393E46,
    91px 91px #393E46,
    92px 92px #393E46,
    93px 93px #393E46,
    94px 94px #393E46,
    95px 95px #393E46,
    96px 96px #393E46,
    97px 97px #393E46,
    98px 98px #393E46,
    99px 99px #393E46,
   100px 100px#393E46;
   mix-blend-mode:hard-light;
   overflow: hidden;
}

.instagram {
background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}


</style>

<footer class="page-footer font-small stylish-color-danger text-danger pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
   
         <a href="/" class="icon flex-shrink-0 flex text-center items-center mt-3 mb-4">
          Forex<span class="iconSecundario">.Gump</span> 
        </a>
        <p>Comenza hoy con nuestro plan de trading y empeza a recibir señales por nuestra pagina.</p><br>
        <p class="text-white">“La bondad es la única inversión que nunca quiebra.” Henry David Thoreau</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="nosotros col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nosotros</h5>

        <ul class="list-unstyled">
          <li>
            <a href="/politicas">Politicas de Privacidad</a>
          </li>
          <li>
            <a href="/terminos">Terminos y Condiciones</a>
          </li>
          <li>
            <a href="/contactanos">Contacto</a>
          </li>
          <li>
            <a href="#about">Quiénes somos</a>
          </li>
        </ul>

      </div>

            <hr class="clearfix w-100 d-md-none">

      <div class="nosotros col-md-1 mx-auto">

        <!-- Links -->
        <h5 class="text-white text-center font-weight-bold text-uppercase mt-3 mb-2">Seguinos</h5>

        <ul class="list-unstyled">
          <li>
          
            <a href="https://www.instagram.com/f0rex_gump/?hl=es-la">
             <div class="sombras-xl instagram">
                <div class="contenido">
                    <i class="fa-brands fa-instagram"></i>         
                </div>        
             </div>
            </a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->




      <!-- Grid column -->
 
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr class="bg-white">

   <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Unete ahora</h5>
      </li>
      <li class="list-inline-item unirse bg-danger">
        <a href="{{route('register')}}" class="btn btn-outline-white btn-rounded">Registrarme</a>
      </li>
    </ul>


  <!-- Copyright -->
  <div class="footer-copyright bg-danger text-white text-center py-3">© 2022 Copyright:
    <a href="https://mdbootstrap.com/"> www.forexgump.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	
</x-app-layout>