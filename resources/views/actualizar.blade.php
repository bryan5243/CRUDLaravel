@extends('layouts/plantilla')
@section('TituloPagina', 'crear un nuevo registro')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Actuializar nueva persona</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('personas.update',$personas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno}}">

                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required value="{{ $personas->materno}}">

                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre}}">

                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $personas->fecha_nacimiento}}">

                <br>
                <a href="{{ route('personas.index') }}" class="btn btn-info">
                    <span class="fa-sharp fa-solid fa-rotate-left"></span> Regresar</a> <button class="btn btn-warning">
                    <span class="fa-solid fa-user-pen"></span> Actualizar</button>

            </form>
            </p>

        </div>
    </div>

@endsection
