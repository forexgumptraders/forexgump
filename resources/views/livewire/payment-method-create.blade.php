<div>
   	
	<input id="card-holder-name" type="text">

	<div id="card-element"></div>

	<button id="card-button" data-secret="{{ $intent->client_secret }}">
	    Update Payment Method
	</button>

	@slot('js')
		<script>
		    const stripe = Stripe('stripe-public-key');

		    const elements = stripe.elements();
		    const cardElement = elements.create('card');

		    cardElement.mount('#card-element');
		</script>
	@endslot

</div>
