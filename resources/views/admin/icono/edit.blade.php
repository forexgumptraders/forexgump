@extends('adminlte::page')

@section('title', 'Tu Blog')

@section('content_header')
    <h1>Cambiar Icono</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.icono.guardar', 'autocomplete' => 'off', 'files' => true]) !!}
        
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="form-group">
                    <label for="icono">Seleccionar Icono</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="icono" id="icono" accept="image/*">
                        <label class="custom-file-label" for="icono">Elegir un icono</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="form-group">
                    @if ($icono && $icono->ruta_completa_imagen)
                        <img id="picture" src="{{ url('storage/' . $icono->ruta_completa_imagen) }}" alt="Icono Actual" class="img-fluid rounded icon-image">
                    @else
                        <img id="picture" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Icono Predeterminado" class="img-fluid rounded icon-image">
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="form-group">
                    <label for="navColor">Seleccionar Color del Nav</label>
                    <input type="color" name="nav_color" id="navColor" class="form-control form-control-color rounded-circle" value="{{ $navColor }}">
                </div>
            
                <div class="form-group">
                    <label for="fontColor">Seleccionar Color del Texto</label>
                    <input type="color" name="text_color" id="fontColor" class="form-control form-control-color rounded-circle" value="{{ $textColor }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="form-group custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="darkMode" name="dark_mode" {{ $darkMode ? 'checked' : '' }}>
                    <label class="custom-control-label" for="darkMode">Modo Oscuro</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                {!! Form::submit('Guardar Icono y Color', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>

<script>
    document.getElementById("icono").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
            // Cambiar el nombre del archivo en la etiqueta
            document.querySelector('.custom-file-label').innerHTML = file.name;
        }

        reader.readAsDataURL(file);
    }

    document.getElementById("navColor").addEventListener('change', cambiarColor);
    document.getElementById("fontColor").addEventListener('change', cambiarColor);

    function cambiarColor(event) {
        var color = event.target.value;
        // Emitir el evento a Livewire para actualizar el color
        Livewire.emit('colorUpdated', color);
    }
</script>

@stop
