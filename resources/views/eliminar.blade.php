@extends('layouts/plantilla')
@section('TituloPagina', 'crear un nuevo registro')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Eliminar una persona</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!
                <table class="table table-sm table-hover" style="background-color: white">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas-> paterno}}</td>
                            <td>{{ $personas-> materno}}</td>
                            <td>{{ $personas-> nombre}}</td>
                            <td>{{ $personas-> fecha_nacimiento}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('personas.destroy',$personas->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('personas.index') }}" class="btn btn-info">
                        <span class="fa-sharp fa-solid fa-rotate-left"></span> Regresar</a> <button
                        class="btn btn-danger">
                        <span class="fa-solid fa-user-xmark"></span> Eliminar</button>
                </form>
                </p>
            </div>

        </div>
    </div>

@endsection
