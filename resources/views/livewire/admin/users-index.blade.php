<div>
	<div class="card">

		<div class="card-header">
			<input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
		</div>
		@if($users->count())
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Suscripción</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->hasActiveSubscription()) <!-- Define este método en tu modelo User -->
							<span class="badge badge-success">Activo</span>
							@else
							<span class="badge badge-danger">Inactivo</span>
							@endif
						</td>
						<td width="10px">
							<a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="card-footer">
			{{$users->links()}}
		</div>
		@else

		<div class="card-body">
			<strong>No se encontraron registros</strong>
		</div>


		@endif
	</div>
</div>