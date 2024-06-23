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


		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


			@foreach ($posts as $post)
			<article class="relative w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif @if($darkMode) dark-bg @endif" style="background-image:url( @if($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2020/11/11/10/38/cat-5732087_960_720.jpg @endif );">
				@if($darkMode)
				<!-- Aplicar filtro oscuro más claro si el modo oscuro está activado -->
				<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);"></div>
				@endif

				<div class="absolute w-full h-full px-8 flex flex-col justify-center">
					<div>
						@foreach ($post->tags as $tag)
						<a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
						@endforeach
					</div>
					<h1 class="text-4xl text-white leading-8 font-bold mt-2">
						<a href={{ route('posts.show', $post) }}>
							{{ $post->name }}
						</a>
					</h1>
					<div class="fechaBlog d-flex">
						{{$post->created_at->format('l j \\de F \\de Y')}}
					</div>
					<style>
						.fechaBlog {

							margin-top: 18px;
							color: white;
						}

						.etiqueta {
							background-color: #1f2937;

						}
					</style>
				</div>
			</article>
			@endforeach


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