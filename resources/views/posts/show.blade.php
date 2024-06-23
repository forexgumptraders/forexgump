<x-app-layout>

	<div class="container py-8">
		<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

		<h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

	
		<div class="flexi">
			<div class="fecha">
				<svg class="iconFecha" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(220, 20, 60, 1);">
					<path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"></path>
				</svg>
				<div class="fecha-text">
					{{$post->created_at->format('l j \\de F \\de Y')}}
				</div>
			
			</div>


		<div class="share-buttons-row">
			<!-- Facebook's Button -->
			<div class="share-button share-fb" data-network="facebook">
				<img src="{{ asset('img/facebook.png') }}" alt="Facebook">
			</div>

			<!-- Twitter's Button -->
			<div class="share-button share-twitter" data-network="twitter">
				<img src="{{ asset('img/twitter.png') }}" alt="Twitter">
			</div>

			<!-- Whatsapp's Button -->
			<div class="share-button share-whatsapp" data-network="whatsapp">
				<img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp">
			</div>

			<!-- Instagram's Button -->
			<!-- <div class="share-button share-instagram" data-network="instagram">
				<img src="{{ asset('img/instagram.png') }}" alt="Instagram">
			</div> -->

			<!-- Telegram's Button -->
			<div class="share-button share-telegram" data-network="telegram">
				<img src="{{ asset('img/telegrama.png') }}" alt="Telegram">
			</div>

			<!-- Reddit's Button -->
			<div class="share-button share-reddit" data-network="reddit">
				<img src="{{ asset('img/reddit.png') }}" alt="Reddit">
			</div>
		</div>
	</div>


		<div class="text-lg text-gray-500 mb-6">
			{!!$post->extract!!}
		</div>

		

		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

			<!-- contenido principal -->

			<div class="lg:col-span-2">

				<figure>

					@if($post->image)
					<img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
					@else
					<img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/09/05/03/47/trading-4453011_960_720.jpg" alt="">
					@endif

				</figure>

				<div class="text-base text-gray-500 mt-4">
					{!!$post->body!!}
				</div>

				<div class="user flex">
					<svg class="iconUser" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(166, 163, 164, 1);">
						<path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path>
					</svg>
					{{$post->user->name}}
				</div>





				<div class="share-buttons-row">
					<!-- Facebook's Button -->
					<div class="share-button share-fb" data-network="facebook">
						<img src="{{ asset('img/facebook.png') }}" alt="Facebook">
					</div>

					<!-- Twitter's Button -->
					<div class="share-button share-twitter" data-network="twitter">
						<img src="{{ asset('img/twitter.png') }}" alt="Twitter">
					</div>

					<!-- Whatsapp's Button -->
					<div class="share-button share-whatsapp" data-network="whatsapp">
						<img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp">
					</div>

					<!-- Instagram's Button -->
					<!-- <div class="share-button share-instagram" data-network="instagram">
						<img src="{{ asset('img/instagram.png') }}" alt="Instagram">
					</div> -->

					<!-- Telegram's Button -->
					<div class="share-button share-telegram" data-network="telegram">
						<img src="{{ asset('img/telegrama.png') }}" alt="Telegram">
					</div>

					<!-- Reddit's Button -->
					<div class="share-button share-reddit" data-network="reddit">
						<img src="{{ asset('img/reddit.png') }}" alt="Reddit">
					</div>
				</div>

				<!-- contenido relacionado -->

		

			</div>

			<aside>
					<h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{$post->category->name}}</h1>

					<ul>
						@foreach($similares as $similar)
						<li class="mb-4">
							<a class="flex" href="{{route('posts.show', $similar)}}">

								@if($similar->image)
								<img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
								@else
								<img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/09/05/03/47/trading-4453011_960_720.jpg" alt="">
								@endif

								<span class="flex-1 ml-2 text-gray-600">{{$similar->name}}</span>
							</a>
						</li>
						@endforeach
					</ul>

				</aside>

		</div>




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


			.list-unstyled {
				margin-left: 20px;
			}


			.fecha {
				display: flex;
				align-items: center;
			}

			.fecha-text {
				margin-right: 10px; /* Ajusta el espacio entre el texto y el icono de la fecha */
			}

			.iconFecha {
				width: 24px;
				height: 24px;
				fill: rgba(220, 20, 60, 1);
			}

			.user {
				color: gray;
				margin-top: 65px;
				font-size: 20px;
			}

			.iconUser {
				margin-top: -11px;
				margin-right: 15px;
			}

			.flexi {
				display: flex;
				align-items: center;
				flex-wrap: wrap; /* Para que los elementos se ajusten en dispositivos pequeños */
			}

			.fecha {
				margin-right: 20px;
			}

			.share-buttons-row {
				display: flex;
				justify-content: center;
				align-items: center;
				flex-wrap: wrap;
				max-width: 400px;
				margin: 0 auto;
				margin-top: 60px;
				margin-bottom: 60px;
			}

			.share-button {
				display: flex;
				justify-content: center;
				align-items: center;
				width: 50px;
				height: 50px;
				border-radius: 50%;
				background-color: #fff;
				margin: 10px; /* Ajusta el espacio entre los iconos */
				cursor: pointer;
			}

			.share-button img {
				width: 100%;
				height: auto;
			}

			/* Media Queries para hacerlos más pequeños en dispositivos pequeños */
			@media (max-width: 768px) {
				.share-buttons-row {
					max-width: 100%;
				}

				.share-button {
					width: 40px;
					height: 40px;
				}

				.share-button img {
					max-width: 100%;
				}

				.fecha {
					margin: 0px auto 0px; /* Margen automático para centrarlo horizontalmente */
					text-align: center; /* Centrar el texto dentro de la fecha */
				}
				 
				}

				/* Media Queries para hacerlos más pequeños en dispositivos pequeños */
				@media (max-width: 563px) {
			
				.fecha {
					margin: 40px auto -30px; /* Margen automático para centrarlo horizontalmente */
					text-align: center; /* Centrar el texto dentro de la fecha */
				}
   
				}

		</style>

		<script>
			// Obtener todos los elementos con la clase 'share-button'
			const shareButtons = document.querySelectorAll('.share-button');

			// Agregar un manejador de eventos de clic a cada botón
			shareButtons.forEach(button => {
				button.addEventListener('click', () => {
					// Obtener la red social desde el atributo 'data-network'
					const network = button.getAttribute('data-network');

					// Obtener la URL que deseas compartir (puedes obtenerla desde algún elemento en tu página)
					const urlToShare = window.location.href;
					// Realizar la acción de compartir en función de la red social
					switch (network) {
						case 'facebook':
							// Compartir en Facebook
							window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(urlToShare)}`);
							break;
						case 'twitter':
							// Compartir en Twitter
							window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(urlToShare)}`);
							break;
						case 'whatsapp':
							// Compartir en WhatsApp
							window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(urlToShare)}`);
							break;
						case 'telegram':
							// Compartir en Telegram
							window.open(`https://t.me/share/url?url=${encodeURIComponent(urlToShare)}`);
							break;
						case 'reddit':
							// Compartir en Reddit
							window.open(`https://www.reddit.com/submit?url=${encodeURIComponent(urlToShare)}`);
							break;

					}
				});
			});
		</script>

</x-app-layout>