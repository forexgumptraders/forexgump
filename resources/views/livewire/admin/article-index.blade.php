<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese una señal">
    </div>


    @if($articles->count())
    <div class="card-body">
    	<table class="table table-striped">
    		<thead>
    			
    		</thead>
                <tr>
                	<th>ID</th>
                	<th>Señal</th>
                	<th colspan="2"></th>
                </tr>
    		<tbody>
    			@foreach($articles as $article)
    			     <tr>
    			     	<td>{{$article->id}}</td>
    			     	<td>{{$article->title}}</td>
    			     	<td with="10px">
    			     		<a class="btm btn-primary btn-sm" href="{{route('admin.articles.edit', $article)}}">Editar</a>
    			     	</td>
    			     	<td with="10px">
    			     		<form action="{{route('admin.articles.destroy', $article)}}" method="POST">
    			     			@csrf
    			     			@method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>

    			     		</form>
    			     	</td>
    			     </tr>
    			@endforeach
    		</tbody>

    	</table>
    </div>

    <div class="card-footer">
        {{$articles->links()}}
    </div>
    @else
        <div class="card-body">
            <strong>No hay ningun registro</strong>
        </div>
    @endif
  
</div>
