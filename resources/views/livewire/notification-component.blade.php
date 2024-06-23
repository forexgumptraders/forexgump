<div class="ml-3 relative" >
    <x-jet-dropdown align="right" width="60">
        <x-slot name="trigger">
            <span class="inline-flex rounded-md">

                <button type="button" class="mt-2 mr-4 p-1 rounded-full text-gray-400 hover:text-white" wire:click="resetNotificationCount()">


                    <span class="relative inline-block">
                        <svg class="w-6 h-6 text-gray-700 fill-current" viewBox="0 0 20 20">
                            <path d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>


                        <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{auth()->user()->notification}}</span>

                    </span>


                </button>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="w-60 scrollable-div">

                <style>
                    .scrollable-div {
                        width: 260px;
                        /* Establece el ancho deseado */
                        max-height: 305px;
                        /* Establece la altura máxima para que aparezca la barra de desplazamiento */
                        overflow: auto;
                        /* Muestra la barra de desplazamiento cuando sea necesario */
                        border: 1px solid #ccc;
                        /* Agrega un borde para visualizar mejor el área del div */
                        padding: 10px;
                        /* Añade un relleno para separar el contenido del borde */
                    }
                </style>

                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Notificaciones') }}
                </div>


                @if ($this->notifications->count())

                <ul class="divide-y">

                    @foreach ($this->notifications as $notification)

                    <li wire:click="read('{{$notification->id}}')" class="{{ ! $notification->read_at ? 'bg-gray-200' : ''}}">
                        <x-jet-dropdown-link class="text-gray-700" href="{{$notification->data['url']}}">
                            {{$notification->data['message']}}


                            <span class="text-xs font-bold">{{$notification->created_at->diffForHumans()}}</span>
                        </x-jet-dropdown-link>
                    </li>

                    @endforeach

                </ul>

                @if(auth()->user()->notifications->count() > $count)

                <div class="px-4 pt-2 pb-1 flex justify-center">
                    <button wire:click="incrementCount()" class="text-sm text-blue-500 font-semibold">
                        Ver mas notificaciones
                    </button>
                </div>
                @endif

                @else

                <div class="px-4 py-4">
                    No tienes notificaciones
                </div>

                @endif
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>