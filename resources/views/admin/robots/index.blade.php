@extends('adminlte::page')

@section('title', 'ForexGump')

@section('content_header')
    <h1>Robots</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('admin.robots.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="file" onchange="updateFileName(this)">
                    <label class="custom-file-label" for="file">Elegir un robot</label>
                    @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mx-auto">
                <button type="submit" class="btn btn-primary btn-block">Subir</button>
            </div>
        </div>
    </form>

    <div class="mt-4">
        <h2 class="h5">Listado de Robots</h2>
        <div class="row">
            <div class="col-lg-12">
                @if($robots->isEmpty())
                    <div class="text-center">
                        <p>No hay robots disponibles.</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Path</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($robots as $robot)
                                    <tr>
                                        <td>{{ $robot->name }}</td>
                                        <td>{{ $robot->path }}</td>
                                        <td>
                                            <form action="{{ route('admin.robots.destroy', $robot->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        function updateFileName(input) {
            var fileName = input.files[0].name;
            var label = input.nextElementSibling;
            label.innerHTML = fileName;
        }
    </script>
@stop
