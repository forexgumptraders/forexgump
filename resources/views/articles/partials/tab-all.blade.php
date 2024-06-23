
      @foreach ($articles as $article)
      <div class="bg-white rounded-lg shadow-lg mb-6 hover:shadow-xl transition duration-300 ease-in-out" data-mode="{{ $article->modo }}">
        <a class="text-gray-900" href="{{ route('articles.show', $article) }}">
          <div class="p-4">
            <div class="estados flex justify-center items-center text-lg text-white mp-2 {{ $article->estado === 'En curso' ? 'bg-blue-500' : 'bg-red-500' }} rounded-lg px-2">
              {{ $article->estado === 'En curso' ? 'Abierta' : 'Cerrada' }}
            </div>

            <div class="tituloSignal font-bold text-xl mb-2 mt-2 text-center">{{ $article->title }}</div>

            <div class="fecha text-center flex justify-between items-center">
              {{ $article->created_at->format('d/m|H:i') }}

             
              <div class="estados flex justify-center items-center text-sm text-white mp-2 rounded-lg px-2 
                        {{ Auth::check() ? '' : 'unauthenticated-margin' }}"
                style="background-color: {{ $article->modo === 'free' ? 'rgb(34, 197, 94)' : 'rgb(245, 158, 11)' }};
                        border-radius: 50px;">
                {{ $article->modo === 'free' ? 'Free' : 'Plus' }}
            </div>

            <style>
              .unauthenticated-margin {
                  margin-left: -35px;
              }
            </style>

            <div class="estados flex justify-center items-center text-sm text-white mp-2 rounded-lg px-2" style="background-color: rgb(249,39,144); border-radius: 50px; max-width: 200px;">
            #{{ $article->id }}
                        </div>



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
              @endauth
            </div>
          </div>
        </a>
      </div>
      @endforeach


