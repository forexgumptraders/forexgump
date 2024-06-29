<x-app-layout>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <div class="card max-w-5xl mx-auto px-4 lg:px-8 py-12 mt-8">
    @if ($article->estado == "Positiva" || $article->estado == "Negativa")
    <div class="alert alert-danger">Esta señal está cerrada, mirá las abiertas</div>
    <style>
      .alert {
        background-color: crimson;
        opacity: .8;
        color: white;
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
      }
    </style>
    @elseif($article->estado == "Cancelada")
    <div class="alert alert-danger">Esta señal ha sido cancelada, mirá las abiertas</div>
    <style>
      .alert {
        background-color: crimson;
        opacity: .8;
        color: white;
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
      }
    </style>
    @elseif($article->estado == "Break even")
    <div class="alert alert-danger">Señal en Break even</div>
    <style>
      .alert {
        background-color: #5cb85c;
        opacity: .8;
        color: white;
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
      }
    </style>
    @else
    <div class="alert alert-success">¡Esta señal esta abierta!</div>
    <style>
      .alert {
        background-color: #198754;
        opacity: .8;
        color: white;
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
      }
    </style>
    @endif
    <br>
    <div class="flex justify-between items-center mb-4">
    <!-- Título en el medio -->
    <h1 class="divisa notranslate text-4xl font-bold text-gray-600 text-center w-full">{{$article->title}}</h1>

    <!-- Modo (Free o Plus) a la derecha -->
    <div class="estados flex justify-center items-center text-sm text-white mp-2 rounded-lg px-2" 
        style="background-color: {{ $article->modo === 'free' ? 'rgb(92,184,92)' : 'rgb(245, 158, 11)' }};
                border-radius: 50px;">
        {{ $article->modo === 'free' ? 'Free' : 'Plus' }}
    </div>
</div>


    

    <div class="w-full">
      <div class="estado text-lg text-gray-500 mb-2 text-center">
        {!!$article->estado!!}
        @if ($article->estado == "En curso")
        <style>
          .estado {
            background-color: #5cb85c;
            color: white;
            padding: 5px 15px;
          }
        </style>
        @elseif ($article->estado == "Positiva")
        <style>
          .estado {
            background-color: #5cb85c;
            color: white;
            padding: 5px 15px;
          }
        </style>
         @elseif ($article->estado == "Break even")
        <style>
          .estado {
            background-color: #0275d8;
            color: white;
            padding: 5px 15px;
          }
        </style>
        @else
        <style>
          .estado {
            background-color: crimson;
            color: white;
            padding: 5px 15px;
          }
        </style>
        @endif
      </div>

      <div class="orden text-lg text-gray-500 mb-2 text-center">
        {!!$article->orden!!}
        @if ($article->orden == "Buy" || $article->orden == "Buy Limit" || $article->orden == "Buy Stop")
        <style>
          .orden {
            background-color: #0275d8;
            color: white;
            padding: 5px 15px;
          }
        </style>
        @else
        <style>
          .orden {
            background-color: crimson;
            color: white;
            padding: 5px 15px;
          }
        </style>
        @endif
      </div>

      <!-- Tarjeta para Fechas -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center relative">
    <div class="p-4 flex items-center justify-between w-full">
        <!-- Fecha de creación -->
        <div class="flex items-center">
            <div class="p-4">
                <i class='bx bx-calendar text-2xl text-gray-500'></i>
            </div>
            <p class="text-lg text-gray-500 text-left">Creado: {!!$article->created_at->format('d-m H:i')!!}</p>
        </div>

  

        <!-- Fecha de actualización (si es diferente de la fecha de creación) -->
        @if ($article->updated_at->format('d-m H:i') != $article->created_at->format('d-m H:i'))
            <div class="flex items-center">
                <div class="p-4">
                    <i class='bx bx-edit text-2xl text-gray-500'></i>
                </div>
                <p class="text-lg text-gray-500 text-left">Actualizado: {!!$article->updated_at->format('d-m | H:i')!!}</p>
            </div>
        @endif

        <!-- Botones de like y dislike -->
        <div class="like-dislike flex items-center gap-4">
            <form action="{{ route('articles.like', $article) }}" method="POST">
                @csrf
                @if(Auth::check())
                    <button class="like-button {{ $article->hasLiked('like') ? 'like-selected' : '' }}" data-article-id="{{ $article->id }}" data-type="like">
                        <i class="far fa-thumbs-up fa-lg"></i>
                    </button>
                    <span id="likes-count-{{ $article->id }}" class="likes-count">{{ $article->likesCount }}</span>
                @else
                    <a href="{{ route('login') }}"><i class="far fa-thumbs-up fa-lg"></i></a>
                    <span id="likes-count-{{ $article->id }}" class="likes-count">{{ $article->likesCount }}</span>
                @endif
            </form>

            <form action="{{ route('articles.dislike', $article) }}" method="POST">
                @csrf
                @if(Auth::check())
                    <button class="dislike-button {{ $article->hasLiked('dislike') ? 'dislike-selected' : '' }}" data-article-id="{{ $article->id }}" data-type="dislike">
                        <i class="far fa-thumbs-down fa-lg"></i>
                    </button>
                    <span id="dislikes-count-{{ $article->id }}" class="likes-count">{{ $article->dislikesCount }}</span>
                @else
                    <a href="{{ route('login') }}"><i class="far fa-thumbs-down fa-lg"></i></a>
                    <span id="dislikes-count-{{ $article->id }}" class="likes-count">{{ $article->dislikesCount }}</span>
                @endif
            </form>
        </div>
    </div>
</div>



    </div>

    <br>

    <figure>
      <img class="img-base h-72 w-full object-cover object-center" src="@if($article->image){{Storage::url($article->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/04/13/05/graphic-1714230_960_720.png @endif" alt="">
    </figure>

    <div class="container-img">
      <img class="img-show" src="@if($article->image){{Storage::url($article->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/04/13/05/graphic-1714230_960_720.png @endif" alt="">
      <i class='bx bx-x'></i>
    </div>

    <div class="w-full mx-auto py-12">
      <!-- Tercera tarjeta para Precio -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center relative">
        <div class="p-4 flex justify-center items-center w-full">
          <div class="p-4">
            <i class='bx bx-dollar text-3xl text-gray-500'></i> <!-- Icono para Precio -->
          </div>
          <div class="text-lg text-gray-500 mb-2 text-center">
            <h4><span class="ordenesTitle">Precio:&nbsp;</span>{!!$article->entrada!!}</h4>
          </div>
        </div>
        <div class="copy-container absolute top-0 right-0 mt-2 mr-2">
          <button class="bg-blue-500 text-white px-2 py-1 rounded cursor-pointer copy-button" data-target="precio">Copiar</button>
          <span class="copied-label hidden text-sm text-green-500 ml-2 absolute">Copiado</span>
        </div>
      </div>

      <!-- Primera tarjeta para Stop Loss -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center relative">
        <div class="p-4 flex justify-center items-center w-full">
          <div class="p-4">
            <i class='bx bx-stop-circle text-3xl text-gray-500'></i> <!-- Icono para Stop Loss -->
          </div>
          <div class="text-lg text-gray-500 mb-2 text-center">
            <h4><span class="notranslate ordenesTitle">Stop Loss:&nbsp;</span>{!!$article->sl!!}</h4>
          </div>
        </div>
        <div class="copy-container absolute top-0 right-0 mt-2 mr-2">
          <button class="bg-blue-500 text-white px-2 py-1 rounded cursor-pointer copy-button" data-target="stoploss">Copiar</button>
          <span class="copied-label hidden text-sm text-green-500 ml-2 absolute">Copiado</span>
        </div>
      </div>

      <!-- Segunda tarjeta para Take Profit -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center relative">
        <div class="p-4 flex justify-center items-center w-full">
          <div class="p-4">
            <i class='bx bx-target-lock text-3xl text-gray-500'></i> <!-- Icono para Take Profit -->
          </div>
          <div class="text-lg text-gray-500 mb-2 text-center">
            <h4><span class="notranslate ordenesTitle">Take Profit:&nbsp;</span>{!!$article->tp!!}</h4>
          </div>
        </div>
        <div class="copy-container absolute top-0 right-0 mt-2 mr-2">
          <button class="bg-blue-500 text-white px-2 py-1 rounded cursor-pointer copy-button" data-target="takeprofit">Copiar</button>
          <span class="copied-label hidden text-sm text-green-500 ml-2 absolute">Copiado</span>
        </div>
      </div>
      <!-- Tercera tarjeta para RR -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center relative">
        <div class="p-4 flex justify-center items-center w-full">

          <div class="text-lg text-gray-500 mb-2 text-center">
            <h4><span class="ordenesTitle">R/R:&nbsp;</span>{!!$article->RR!!}</h4>
          </div>
        </div>

      </div>

      <!-- Cuarta tarjeta para el contenido -->
      <div class="bg-white rounded-lg shadow-lg mb-6 w-full hover:shadow-xl transition duration-300 ease-in-out flex items-center justify-center">
        <div class="p-4">
          <div class="text-gray-500 mt-4 text-center">
            {!!$article->body!!}
          </div>
        </div>
      </div>
    </div>

    <style>
      .copy-container {
        position: relative;
      }

      .copied-label {
        top: -212px;
        left: 50%;
        transform: translateX(-50%);
      }
    </style>

    <script>
      const copyButtons = document.querySelectorAll(".copy-button");
      const copiedLabels = document.querySelectorAll(".copied-label");

      copyButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
          const target = button.getAttribute("data-target");
          let textToCopy = "";

          if (target === "precio") {
            textToCopy = "{!! strip_tags($article->entrada) !!}";
          } else if (target === "stoploss") {
            textToCopy = "{!! strip_tags($article->sl) !!}";
          } else if (target === "takeprofit") {
            textToCopy = "{!! strip_tags($article->tp) !!}";
          }

          copyTextToClipboard(textToCopy);

          copiedLabels.forEach((label, labelIndex) => {
            if (index === labelIndex) {
              label.textContent = "Copiado";
            } else {
              label.textContent = "";
            }
          });
        });
      });

      function copyTextToClipboard(text) {
        const textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
      }
      // Función para enviar la solicitud AJAX
function sendLikeRequest(articleId, type, $likeButton) {
$.ajax({
  type: 'POST',
  url: `/articles/${articleId}/${type}`,
  data: {
    _token: '{{ csrf_token() }}'
  },
  success: function(response) {
    if (response.success) {
      // Actualiza la cantidad total de "Me gusta" en la página
      const $likesCount = $likeButton.siblings('.likes-count');
      const $dislikesCount = $likeButton.siblings('.dislikes-count');
      $likesCount.text(response.likesCount);
      $dislikesCount.text(response.dislikesCount);

      // Actualiza el estado en el almacenamiento local si lo deseas
      localStorage.setItem(`likeStatus-${articleId}`, type);
      updateLikeDislikeCounts(articleId);
    }
  },
  error: function(error) {
  }
});
}


// Obtener el estado de los botones al cargar la página
async function restoreLikeDislikeState() {
const likeButtons = document.querySelectorAll('.like-button');
const dislikeButtons = document.querySelectorAll('.dislike-button');

likeButtons.forEach(async button => {
  const articleId = button.dataset.articleId;
  const response = await getLikeDislikeState(articleId, 'like');

  if (response.hasLiked) {
    button.classList.add('like-selected');
  }
});

dislikeButtons.forEach(async button => {
  const articleId = button.dataset.articleId;
  const response = await getLikeDislikeState(articleId, 'dislike');

  if (response.hasLiked) {
    button.classList.add('dislike-selected');
  }
});

// Función para obtener el estado desde el servidor
async function getLikeDislikeState(articleId, type) {
  try {
    const response = await fetch(`/articles/${articleId}/${type}/has-liked`, {
      method: 'GET',
    });
    const data = await response.json();
    return data;
  } catch (error) {
   
  }
}
}


 // Verificar si el usuario está autenticado
$.ajax({
  type: 'POST',
  url: `{{ route('articles.like.check', $article) }}`,
  data: {
      _token: '{{ csrf_token() }}'
  },
  success: function(response) {
      if (response.authenticated) {
        restoreLikeDislikeState()
      } else {
          // El usuario no está autenticado, así que borramos cualquier estado almacenado en el navegador
          const likeButtons = document.querySelectorAll('.like-button');
          const dislikeButtons = document.querySelectorAll('.dislike-button');

          likeButtons.forEach(button => {
              const articleId = button.dataset.articleId;
              localStorage.removeItem(`likeStatus-${articleId}`);
              // Agregar un manejador de eventos al botón de "Me gusta" que redirige a la página de inicio de sesión al hacer clic
              button.addEventListener('click', function() {
                  window.location.href = '{{ route('login') }}';
              });
          });

          dislikeButtons.forEach(button => {
              const articleId = button.dataset.articleId;
              localStorage.removeItem(`likeStatus-${articleId}`);
              // Agregar un manejador de eventos al botón de "No me gusta" que redirige a la página de inicio de sesión al hacer clic
              button.addEventListener('click', function() {
                  window.location.href = '{{ route('login') }}';
              });
          });
      }
  },
  error: function(error) {
      // Manejar errores, si es necesario
  }
});


// Manejo del clic en los botones "Me gusta" y "No me gusta"
$('.like-button, .dislike-button').click(function(e) {
e.preventDefault();
const articleId = $(this).data('article-id');
const type = $(this).data('type');

const $likeButton = $(this).closest('.like-dislike').find('.like-button');
const $dislikeButton = $(this).closest('.like-dislike').find('.dislike-button');

// Verifica si el botón actual tiene la clase `${type}-selected`
if ($(this).hasClass(`${type}-selected`)) {
  $(this).removeClass(`${type}-selected`);
  sendLikeRequest(articleId, 'cancel', $likeButton);
  
} else {
  $likeButton.removeClass('like-selected');
  $dislikeButton.removeClass('dislike-selected');
  $(this).addClass(`${type}-selected`);
  sendLikeRequest(articleId, type, $likeButton);
}
});


// Función para actualizar los valores de "Me gusta" y "No me gusta" para un artículo específico
function updateLikeDislikeCounts(articleId) {
// Asegúrate de que articleId esté definido y sea un valor válido.
if (articleId) {
  $.ajax({
    type: 'GET',
    url: `/articles/${articleId}/counts`,
    success: function(response) {
      // Actualiza los conteos de "Me gusta" y "No me gusta en tiempo real
      // Usando los valores en la respuesta.
      const likesCount = response.likesCount;
      const dislikesCount = response.dislikesCount;

      // Actualiza los elementos HTML con los nuevos conteos.
      const likesCountElement = $(`#likes-count-${articleId}`);
      const dislikesCountElement = $(`#dislikes-count-${articleId}`);
      likesCountElement.text(likesCount);
      dislikesCountElement.text(dislikesCount);
    },
    error: function(error) {
      // Manejar errores, si es necesario
    }
  });
}
}



// Configurar un intervalo para actualizar los valores cada ciertos segundos
setInterval(function() {
  // Itera sobre todos los elementos con clase 'like-dislike' para obtener los IDs de los artículos
  $('.like-dislike').each(function() {
    const articleId = $(this).data('article-id');
    updateLikeDislikeCounts(articleId);
  });
}, 1000);
    </script>



    <!-- Footer -->

    <style>
       /* Clase para el botón de "Me gusta" seleccionado */
    .like-selected {
      color: #3b82f6;
      /* Puedes ajustar el color según tus preferencias */
    }

    /* Clase para el botón de "No me gusta" seleccionado */
    .dislike-selected {
      color: crimson;
      /* Puedes ajustar el color según tus preferencias */
    }
      .ordenes {
        text-align: center;
      }

      .img-base:hover {
        filter: grayscale(50%);
        cursor: pointer;
        transition: filter 0.5s;
      }

      .container-img {
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
        z-index: 1;
      }

      .img-show {
        height: 80%;
        display: block;
        object-fit: cover;
      }

      .bx.bx-x {
        position: absolute;
        color: white;
        top: 20px;
        right: 20px;
        font-size: 40px;
        cursor: pointer;
      }

      .move {
        transform: translateX(0%);
      }
    </style>

    <script>
      const images = document.querySelector('.img-base');
      const containerImage = document.querySelector('.container-img');
      const imgContainer = document.querySelector('img-show');

      images.addEventListener('click', () => {
        containerImage.classList.toggle('move');
        addImage(image.getAtribute('src'));
      });

      const addImage = (src) => {
        containerImage.classList.toggle('move');
      };

      containerImage.addEventListener('click', () => {
        containerImage.classList.toggle('move');
      });
    </script>

    <style>
      /* custom scroll bar */
      ::-webkit-scrollbar {
        width: 10px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      ::-webkit-scrollbar-thumb {
        background: #888;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }

      .ordenes h4 {
        color: black;
      }

      .ordenesTitle {
        color: black;
      }

      .divisa {
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        padding-top: 5px;
        color: black;
      }

      a {
        text-decoration: none;
        color: white;
      }

      .unirse {
        border-radius: 30px;
      }

      .unirse a {
        color: white;
      }

      .unirse a:hover {
        color: white;
      }
    </style>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</x-app-layout>