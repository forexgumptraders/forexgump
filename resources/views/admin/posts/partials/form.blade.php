<div class="form-group">
   				{!! Form::label('name', 'Nombre:') !!}
   				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

   				@error('name')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

   			<div class="form-group">
   				{!! Form::label('slug', 'Slug:') !!}
   				{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}

   				@error('slug')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

   			<div class="form-group">
   				{!! Form::label('category_id', 'Categoria') !!}
   				{!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}

   				@error('category_id')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

   			<div class="form-group">
   				<p class="font-weight-bold">Etiquetas</p>

   				@foreach($tags as $tag)

   					<label class="mr-2">
   						{!! Form::checkbox('tags[]', $tag->id, null) !!}
   						{{$tag->name}}
   					</label>

   				@endforeach

   					

   				@error('tags')
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
						@isset($post->images[0])
    					<img id="picture1" src="{{ Storage::url($post->images[0]->url) }}" alt="Imagen 1">
						@else
							<img id="picture1" src="https://cdn.pixabay.com/photo/2019/09/05/03/47/trading-4453011_960_720.jpg" alt="Imagen por defecto">
						@endisset
					</div>

					<div class="form-group">
						{!! Form::label('file1', 'Imagen 1 que se mostrará en el post') !!}
						{!! Form::file('file1', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

						@error('file1')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>

				<div class="col">
				

					<div class="image-wrapper">
						@isset($post->images[1])
						<img id="picture2" src="{{ Storage::url($post->images[1]->url) }}" alt="Imagen 2">
						@else
							<img id="picture2" src="https://cdn.pixabay.com/photo/2019/09/05/03/47/trading-4453011_960_720.jpg" alt="Imagen por defecto">
						@endisset
					</div>

					<div class="form-group">
						{!! Form::label('file2', 'Imagen 2 que se mostrará en el post') !!}
						{!! Form::file('file2', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

						@error('file2')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>
			</div>


   			<div class="form-group">
   				{!! Form::label('extract', 'Extracto:') !!}
   				{!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

   				@error('extract')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

   			<div class="form-group">
   				{!! Form::label('body', 'Cuerpo del post:') !!}
   				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

   				@error('body')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>

			   <div class="form-group">
   				{!! Form::label('bodysecond', 'Cuerpo del post:') !!}
   				{!! Form::textarea('bodysecond', null, ['class' => 'form-control']) !!}

   				@error('bodysecond')
   					<small class="text-danger">{{$message}}</small>
   				@enderror

   			</div>
