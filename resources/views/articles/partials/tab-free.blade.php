{{-- Tabla de señales Free --}}
  <div id="tab-free" style="display: none;">
  <div class="bg-tele rounded-lg shadow-lg mb-6 hover:shadow-xl transition duration-300 ease-in-out">
    <a class="text-gray-900" href="{{ Auth::user() && Auth::user()->subscribed('señales') ? route('unirte-al-grupo') : route('billing.index') }}">
      <!-- <a class="text-gray-900" href="{{ Auth::user() ? 'https://t.me/+TCdsP204umtkYzgx' : route('login') }}"> -->

      <div class="p-4">
        <div class="tituloSignal text-white font-bold text-xl mb-2 mt-2 text-center">GRUPO FREE</div>
        <div class="fecha text-center">
          <!-- <a href="{{ Auth::user() && Auth::user()->subscribed('señales') ? route('unirte-al-grupo') : route('billing.index') }}" class="flex items-center justify-center text-gray-700 hover:text-blue-500">
                  <img src="{{ asset('img/telegrama.png') }}" alt="Icono de Telegram" class="w-12 mr-2">
              </a> -->


          <a href="{{ Auth::user() && Auth::user()->subscribed('señales') ? route('unirte-al-grupo') : route('billing.index') }}" class="flex items-center justify-center text-gray-700 hover:text-blue-500">
            <img src="{{ asset('img/telegrama.png') }}" alt="Icono de Telegram" class="w-12 mr-2">
          </a>
        </div>
      </div>
    </a>
  </div> 
    @foreach ($articles->where('modo', 'free') as $article)
    <div class="bg-white rounded-lg shadow-lg mb-6 hover:shadow-xl transition duration-300 ease-in-out" data-mode="{{ $article['modo'] }}">
        <a class="text-gray-900" href="{{ route('articles.show', $article) }}">
          <div class="p-4">
            <div class="estados flex justify-center items-center text-lg text-white mp-2 {{ $article->estado === 'En curso' ? 'bg-blue-500' : 'bg-red-500' }} rounded-lg px-2">
              {{ $article->estado === 'En curso' ? 'Abierta' : 'Cerrada' }}
            </div>

            <div class="tituloSignal font-bold text-xl mb-2 mt-2 text-center">{{ $article->title }}</div>

            <div class="fecha text-center flex justify-between items-center">
              {{ $article->created_at->format('d/m|H:i') }}

             
              <div class="estados flex justify-center items-center text-sm text-white mp-2 rounded-lg px-2" 
                style="background-color: {{ $article->modo === 'free' ? 'rgb(34, 197, 94)' : 'rgb(245, 158, 11)' }};
                      border-radius: 50px;">
                {{ $article->modo === 'free' ? 'Free' : 'Plus' }}
            </div>


            <div class="estados flex justify-center items-center text-sm text-white mp-2 rounded-lg px-2" style="background-color: rgb(249,39,144); border-radius: 50px; max-width: 200px;">
            {{ $article->user?->name }}
                        </div>


<!-- 
         @auth
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
              @endauth -->
            </div>
          </div>
        </a>
      </div>
      @endforeach

  </div>