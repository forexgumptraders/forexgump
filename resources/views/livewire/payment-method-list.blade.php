<div>
    <section class="card relative">

            <div wire:loading.flex class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
                <x-spinner size="20"/>
            </div>

            <div class="px-6 py-4 bg-gray-50">
                <h1 class="text-gray-700 text-lg font-bold">Metodos de pago agregado</h1>
            </div>

        <div class="card-body divide-y divide-gray-200">
           @foreach ($paymentMethods as $paymentMethod)
                <article class="px-2 py-2 text-gray-700 flex justify-between items-center">
                   <div>
                        <h1 class="text-sm mt-2"><span class="font-bold">{{$paymentMethod->billing_details->name}}</span> XXXX-{{$paymentMethod->card->last4}}</h1>

                        @if ($paymentMethod->id == auth()->user()->defaultPaymentMethod())

                        (default)

                        @endif


                        <p>Expira {{$paymentMethod->card->exp_month}}/{{$paymentMethod->card->exp_year}}</p>
                   </div>

                   <div>
                        @if(auth()->user()->defaultPaymentMethod()->id == $paymentMethod->id)
                        <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Predeterminado</span>

                        @endif
                        @if(auth()->user()->defaultPaymentMethod()->id != $paymentMethod->id)
                       <i class="fas fa-star cursor-pointer p-3 hover:text-gray-700"wire:click="defaultPaymentMethod('{{ $paymentMethod->id }}')"></i>
                       <i class="fas fa-trash cursor-pointer" wire:click="deletePaymentMethod('{{$paymentMethod->id}}')"></i>
                       @endif
                   </div>


                </article>
           @endforeach
        </div>

    </section>

</div>
