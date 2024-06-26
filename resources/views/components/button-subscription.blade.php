@props(['name','price'])

<div class="w-full">

@if(auth()->user()->hasDefaultPaymentMethod($name))

    @if(auth()->user()->subscribed($name))

    @if(auth()->user()->subscribedToPrice($price, $name))


    @if(auth()->user()->subscription($name)->onGracePeriod())

        <button wire:click="resuminSubscription('{{$name}}')"

            wire:loading.remove

            wire:target="resuminSubscription('{{$name}}')"

            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
            Renudar plan

        </button>

        <button wire:loading.flex

            wire:target="resuminSubscription('{{$name}}')"

            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">

            <x-spinner size="6" class="mr-2"/>

            Renudar plan

        </button>

        @else

            <button wire:click="cancelingSubscription('{{$name}}')"

                wire:loading.remove

                wire:target="cancelingSubscription('{{$name}}')"

                class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                Cancelar
            </button>

            <button wire:loading.flex

                wire:target="cancelingSubscription('{{$name}}')"

                class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">

                <x-spinner size="6" class="mr-2"/>

                Cancelar

            </button>

            @endif

            @else

                <button wire:click="changingPlans('{{$name}}', '{{$price}}')"

                    wire:loading.remove

                    wire:target="changingPlans('{{$name}}', '{{$price}}')"

                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                    Cambiar de plan
                </button>

                <button wire:loading.flex

                    wire:target="changingPlans('{{$name}}', '{{$price}}')"

                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">

                    <x-spinner size="6" class="mr-2"/>

                    Cambiar de plan

                </button>

            @endif


            @else

                
                <button wire:click="newSubscription('{{$name}}', '{{$price}}')"

                    wire:loading.remove

                    wire:target="newSubscription('{{$name}}', '{{$price}}')"
                    
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                    
                
                Suscribirse
                
                </button>

                <button wire:loading.flex

                    wire:target="newSubscription('{{$name}}', '{{$price}}')"
                    
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                    
                    <x-spinner size="6" class="mr-2"/>
                    
                    Suscribirse
                
                </button>

        @endif


@else

    <button

    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
    Agregar metodo de pago
    </button>


@endif

</div>