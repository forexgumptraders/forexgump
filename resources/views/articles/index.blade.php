<x-app-layout>
@if (!empty($searchResults) && count($searchResults) > 0)
            <div x-data="{ isOpen: false }" class="search-results-container absolute mt-2 w-full bg-white border border-gray-300 rounded shadow-lg" style="z-index: 1;">
              <!-- Contenedor del resultado de búsqueda con ancho del 100% -->
              <div style="width: 100%;">
                <ul>
                  @foreach ($searchResults as $result)
                  <li class="p-2 hover:bg-gray-100">
                    <div class="flex items-center">
                      @if ($result->image)
                      <img src="{{ Storage::url($result->image->url) }}" alt="{{ $result->name }}" class="w-12 h-12 mr-2">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  

  <link rel="stylesheet" href="css/articles.css">
  
  <div class="max-w-2xl mx-auto px-4 lg:px-8 py-12">

  <div class="flex">
  <!-- Grupo Free -->
    <a class="text-gray-900 w-full bg-tele rounded-lg shadow-lg mb-6 hover:shadow-xl transition duration-300 ease-in-out" href="{{ Auth::user() && Auth::user() ? route('unirte-al-grupo') :  route('unirte-al-grupo') }}">
      <div class="p-4">
        <div class="tituloSignal text-white font-bold text-xl mb-2 mt-2 text-center">Grupo Telegram</div>
        <div class="fecha text-center">
          <div class="flex items-center justify-center text-gray-700 hover:text-blue-500">
            <img src="{{ asset('img/telegrama.png') }}" alt="Icono de Telegram" class="w-12 mr-2">
            </div>
        </div>
      </div>
    </a>


<!-- <a class="text-gray-900 w-full bg-tele rounded-lg shadow-lg mb-6 hover:shadow-xl transition duration-300 ease-in-out" href="{{ Auth::user() && Auth::user()->subscribed('señales') ? route('unirte-al-grupo-plus') : route('billing.index') }}">
      <div class="p-4">
        <div class="tituloSignal text-white font-bold text-xl mb-2 mt-2 text-center">PLUS</div>
        <div class="fecha text-center">
          <div class="flex items-center justify-center text-gray-700 hover:text-blue-500">
            <img src="{{ asset('img/telegrama.png') }}" alt="Icono de Telegram" class="w-12 mr-2">
            </div>
        </div>
      </div>
    </a> -->
</div>


    <div id="articles-container">
      {{-- Tabla de Todas las señales --}}
      @include('articles.partials.tab-all')

   

    </div>

  </div>

  <div id="load-more" data-page="{{ $articles->currentPage() + 1 }}" data-last-page="{{ $articles->lastPage() }}">
        <!-- ... botón u otra forma de activar la carga de más artículos ... -->

    </div>

  <script src="js/articles.js"></script>


<!-- 
<script>
        function actualizarArticulos() {
            $.get("{{ route('articles.index') }}", function(data) {
                var nuevaTabAll = $(data).find('#articles-container').html();
                $("#articles-container").html(nuevaTabAll);
            });
            console.log("peticion actualizada");
        }

        $(document).ready(function() {
            // Actualizar cada 10 segundos (10000 milisegundos)
            setInterval(actualizarArticulos, 15000);
        });
    </script> -->
  <script>
    var csrfToken = "{{ csrf_token() }}";
  </script>
</x-app-layout>