<div>

<style>
	.loader {
    border-top-color: crimson;
    -webkit-animation: spinner 1.5s linear infinite;
    animation: spinner 1.5s linear infinite;
  }
  
  @-webkit-keyframes spinner {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spinner {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
</style>
<article class="card relative">

<div wire:loading.flex class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
	<x-spinner size="20"/>
</div>


<form action="" id="card-form" class="max-w mx-auto p-4 md:p-8">
    <div class="card-body">

        <h1 class="text-gray-700 text-lg font-bold mb-4">Agregar método de pago</h1>

        <div class="numeros">
            <p class="text-gray-700">Información de tarjeta</p>

            <div class="form-group">
                <input class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="card-holder-name" type="text" placeholder="Nombre del titular de la tarjeta" required>
            </div>

            <div class="mt-4">
                <label for="card-element" class="block text-sm font-medium text-gray-700">Tarjeta de crédito</label>
                <div class="mt-1 p-2 rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="card-element"></div>
                <span class="mt-2 text-red-500" id="cardErrors"></span>
            </div>

        </div>

    </div>
<br><br>
    <div class="card-footer flex justify-center">
        <button class="w-full px-4 py-2 text-white bg-red-500 rounded-full hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-200" id="card-button" data-secret="{{ $intent->client_secret }}">
            Agregar método de pago
        </button>
    </div>
</form>


</article>
	@slot('js')

		<script>

			document.addEventListener('livewire:load', function(){
				stripe();
			});

			Livewire.on('resetStripe', function(){
				document.getElementById('card-form').reset();
				stripe();
			})
		</script>


		<script>

			function stripe(){

				const stripe = Stripe("{{ env('STRIPE_KEY') }}");
				

				const elements = stripe.elements();
				const cardElement = elements.create('card');

				cardElement.mount('#card-element');

				//Generar token
				const cardHolderName = document.getElementById('card-holder-name');
				const cardButton = document.getElementById('card-button');
				const cardForm = document.getElementById('card-form');
				const clientSecret = cardButton.dataset.secret;


				cardForm.addEventListener('submit', async (e) => {

					e.preventDefault();

					const { setupIntent, error } = await stripe.confirmCardSetup(
						clientSecret, {
							payment_method: {
								card: cardElement,
								billing_details: { name: cardHolderName.value }
							}
						}
					);

					if (error) {

						document.getElementById('cardErrors').textContent = error.message;
					
					} else {
						
						Livewire.emit('paymentMethodCreate', setupIntent.payment_method); 
					}
				});


			}

		</script>
	@endslot

</div>
