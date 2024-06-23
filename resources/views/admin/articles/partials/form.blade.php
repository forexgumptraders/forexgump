<div class="form-group">
   				{!! Form::label('title', 'Titulo:') !!}
   				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una señal']) !!}

   				@error('title')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>
<!-- 
   			<div class="form-group">
   				{!! Form::label('slug', 'Slug:') !!}
   				{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la señal', 'readonly']) !!}

   				@error('slug')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div> -->

            
            <div class="form-group">
               <p class="font-weight-bold">Modo</p>

               <label>
                  {!! Form::radio('modo', "free", true) !!}
                  Free
               </label>

               <label>
                  {!! Form::radio('modo', "plus") !!}
                  Plus
               </label>

             
      
               @error('status')
               <br>  
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>

   			<div class="form-group">
   				<p class="font-weight-bold">Estado</p>

   				<label>
   					{!! Form::radio('status', 1, true) !!}
   					Borrador
   				</label>

   			   <label>
   					{!! Form::radio('status', 2) !!}
   					Publicado
   				</label>
      
   				@error('status')
   				<br>	
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

           

   			<div class="row mb-3">
   				<div class="col">
   					<div class="image-wrapper">
   						@isset($article->image)
                     <img id="picture" src="{{Storage::url($article->image->url)}}" alt="">
                     @else
                     <!-- <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/04/13/05/graphic-1714230_960_720.png" alt=""> -->
                     <img id="picture" src="{{ asset('img/no-signal.jpg') }}" alt="Ejemplo">

                     @endisset
   					</div>
   				</div>


   				<div class="col">
   					<div class="form-group">
   						{!! Form::label('file', 'Imagen que se mostrara en la señal') !!}
   						{!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

   						@error('file')
   							<span class="text-danger">{{$message}}</span>
   						@enderror
   					</div>



   					<p>Elige una imagen relacionada al grafico o analisis de la señal a enviar</p>
   				</div>
   			</div>

             <div class="form-group">
               <p class="font-weight-bold">Estado de señal</p>

               <label>
                  {!! Form::radio('estado', "En curso", true) !!}
                  En curso
               </label>

               <label>
                  {!! Form::radio('estado', "Positiva") !!}
                  Positiva
               </label>

               <label>
                  {!! Form::radio('estado', "Negativa") !!}
                  Negativa
               </label>

               <label>
                  {!! Form::radio('estado', "Cancelada") !!}
                  Cancelar
               </label>

               <label>
                  {!! Form::radio('estado', "Break even") !!}
                  Break even
               </label>
             
      
               @error('status')
               <br>  
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>


                 <div class="form-group">
               <p class="font-weight-bold">Orden de señal</p>


               <label>
                  {!! Form::radio('orden', "Buy", true) !!}
                  Buy
               </label>

               <label>
                  {!! Form::radio('orden', "Sell") !!}
                  Sell
               </label>
               <label>
                  {!! Form::radio('orden', "Buy Limit") !!}
                  Buy Limit
               </label>
               <label>
                  {!! Form::radio('orden', "Sell Limit") !!}
                  Sell Limit
               </label>
               <label>
                  {!! Form::radio('orden', "Buy Stop") !!}
                  Buy Stop
               </label>
               <label>
                  {!! Form::radio('orden', "Sell Stop") !!}
                  Sell Stop
               </label>

      
               @error('status')
               <br>  
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>

            <div class="form-group">
               {!! Form::label('entrada', 'Orden de entrada:') !!}
               {!! Form::textarea('entrada', null, ['class' => 'form-control']) !!}

               @error('tp')
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>

            <div class="form-group">
               {!! Form::label('sl', 'Stop Loss:') !!}
               {!! Form::textarea('sl', null, ['class' => 'form-control']) !!}

               @error('sl')
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>

            <div class="form-group">
               {!! Form::label('tp', 'Take Profit:') !!}
               {!! Form::textarea('tp', null, ['class' => 'form-control']) !!}

               @error('tp')
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>
            <div class="form-group">
               <p class="font-weight-bold">Riesgo/Beneficio</p>


               <label>
                  {!! Form::radio('RR', "1:1", true) !!}
                  1:1
               </label>

               <label>
                  {!! Form::radio('RR', "1:2") !!}
                  1:2
               </label>
               <label>
                  {!! Form::radio('RR', "1:3") !!}
                  1:3
               </label>
               <label>
                  {!! Form::radio('RR', "1:4") !!}
                  1:4
               </label>
               <label>
                  {!! Form::radio('RR', "1:5") !!}
                  1:5
               </label>
               <label>
                  {!! Form::radio('RR', "1:6") !!}
                  1:6
               </label>

      
               @error('status')
               <br>  
                  <small class="text-danger">{{$message}}</small>
               @enderror

            </div>

   			<div class="form-group">
   				{!! Form::label('body', 'Cuerpo de la señal:') !!}
   				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

   				@error('body')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

    