<x-app-layout>

	<div class="container py-8">

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
		</style>


		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

		@foreach ($posts as $post)
        <article class="relative w-full h-80 bg-cover bg-center zoom-background @if($loop->first) md:col-span-2 @endif @if($darkMode) dark-bg @endif"
    style="background-image: url(
        @if($post->images->count())
            {{ Storage::url($post->images->first()->url) }}
        @else
            https://cdn.pixabay.com/photo/2020/11/11/10/38/cat-5732087_960_720.jpg
        @endif); border-radius: 6px;">
    @if($darkMode)
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); border-radius: 8px;"></div>
    @endif

    <div class="absolute w-full h-full px-8 flex flex-col justify-center">
        <div>
            @foreach ($post->tags as $tag)
                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
            @endforeach
        </div>
        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->name }}
            </a>
        </h1>
        <div class="fechaBlog d-flex text-white">
            {{ $post->created_at->format('l j \\de F \\de Y') }}
        </div>
    </div>
</article>

@endforeach

<style>
    .zoom-background {
        transition: transform 0.3s ease;
        overflow: hidden;
    }

    .zoom-background:hover {
        transform: scale(1.02);
    }

</style>




		</div>

		<div class="mt-4">

			{{$posts->links()}}
		</div>

	</div>


	<script src="js/navigation-js.js"></script>

</x-app-layout>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		const articles = document.querySelectorAll(".grid-cols-1 article");

		// Restaurar el estado al cargar la página
		const isDarkMode = sessionStorage.getItem("dark_mode") === "true";

		if (isDarkMode) {
			articles.forEach((article) => {
				article.classList.add("dark-bg");
			});
		}
	});
</script>